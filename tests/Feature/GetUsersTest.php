<?php

namespace Tests\Feature;

use App\Helpers\JsonHelper;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use App\Models\User;
use App\Repositories\PostRepository;
use Database\Factories\PostFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class GetUsersTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    /**
     * Tests controller retrieving 10 users from source.
     *
     * @return void
     */
    public function test_get_users()
    {
        $users_from_json = User::factory()->count(10)->make()->toArray();

        // Mock repository: it has its own tests
        $repository = \Mockery::mock(PostRepository::class);
        $repository->shouldReceive('user_ids_from_posts')
            ->andReturn([1, 2, 3]);
        $this->app->instance(PostRepository::class, $repository);

        // Mock json call - I don't care if the source is online or not
        $jsonHelper = \Mockery::mock(JsonHelper::class);
        $jsonHelper->shouldReceive('getJsonUsersFromSource')
            ->andReturn($users_from_json);
        $this->app->instance(JsonHelper::class, $jsonHelper);

        $controller = resolve(UserController::class);
        $count = $controller->getUsers();

        $this->assertEquals(3, $count['new']+$count['exists']);

    }

    /**
     * Tests controller retrieving 10 users from source with 4 with invalid data
     *
     * @return void
     */
    public function test_get_users_with_invalid()
    {
        $users_from_json = User::factory()->count(10)->make()->toArray();
   
        // Make some data invalid
        $users_from_json[2]['id'] = null;
        $users_from_json[3]['name'] = null;
        $users_from_json[4]['email'] = null;
        $users_from_json[5]['address']['city'] = null;

        // Mock repository: it has its own tests
        $repository = \Mockery::mock(PostRepository::class);
        $repository->shouldReceive('user_ids_from_posts')
            ->andReturn([1,2,3,4,5,6,7,8,9,10]);
        $this->app->instance(PostRepository::class, $repository);

        // Mock json call - I don't care if the source is online or not
        $jsonHelper = \Mockery::mock(JsonHelper::class);
        $jsonHelper->shouldReceive('getJsonUsersFromSource')
            ->andReturn($users_from_json);
        $this->app->instance(JsonHelper::class, $jsonHelper);

        $controller = resolve(UserController::class);
        $count = $controller->getUsers();

        $this->assertEquals(6, $count['new']+$count['exists']);

    }
}
