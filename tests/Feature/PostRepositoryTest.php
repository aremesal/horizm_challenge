<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Repositories\PostRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostRepositoryTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test Repository stores a post.
     *
     * @return void
     */
    public function test_store_post()
    {
        $post = Post::factory()->make();

        $repo = resolve(PostRepository::class);

        $repo->store($post->toArray());

        $this->assertDatabaseCount('posts', 1);
    }
}
