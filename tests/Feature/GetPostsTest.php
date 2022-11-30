<?php

namespace Tests\Feature;

use App\Helpers\JsonHelper;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Repositories\PostRepository;
use Database\Factories\PostFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetPostsTest extends TestCase
{
    /**
     * Tests controller retrieving 50 posts from source.
     *
     * @return void
     */
    public function test_get_posts()
    {
        $max = (int)config('app.max_posts');

        $posts_from_json = Post::factory()->count($max)->make()->toArray();

        // Mock repository: it has its own tests
        $repository = \Mockery::mock(PostRepository::class);
        $repository->shouldReceive('store')
            ->times($max)
            ->andReturn(new Post());
        $this->app->instance(PostRepository::class, $repository);

        // Mock json call - I don't care if the source is online or not
        $jsonHelper = \Mockery::mock(JsonHelper::class);
        $jsonHelper->shouldReceive('getJsonFromSource')
            ->andReturn($posts_from_json);
        $this->app->instance(JsonHelper::class, $jsonHelper);

        $controller = resolve(PostController::class);
        $count = $controller->getPosts();

        $this->assertEquals($max, $count);

    }

    public function test_get_posts_with_invalid()
    {
        $max = (int)config('app.max_posts');

        $posts_from_json = Post::factory()->count($max)->make()->toArray();

        // Make some data invalid
        $posts_from_json[2]['userId'] = null;
        $posts_from_json[3]['title'] = null;
        $posts_from_json[4]['body'] = null;
        $posts_from_json[5]['id'] = null;

        $max = $max-4;

        // Mock repository: it has its own tests
        $repository = \Mockery::mock(PostRepository::class);
        $repository->shouldReceive('store')
            ->times($max)
            ->andReturn(new Post());
        $this->app->instance(PostRepository::class, $repository);


        $jsonHelper = \Mockery::mock(JsonHelper::class);
        $jsonHelper->shouldReceive('getJsonFromSource')
            ->andReturn($posts_from_json);
        $this->app->forgetInstance(JsonHelper::class);
        $this->app->instance(JsonHelper::class, $jsonHelper);

        $controller = resolve(PostController::class);
        $count = $controller->getPosts();

        $this->assertEquals($max, $count);

    }
}
