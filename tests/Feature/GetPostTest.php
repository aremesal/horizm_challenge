<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class GetPostTest extends TestCase
{
    /**
     * Test that the API returns a post with its data.
     *
     * @return void
     */
    public function test_get_post()
    {
        Artisan::call('migrate:fresh');

        $post = Post::create([
            'id' => 111,
            'title' => 'sunt aut facere repellat provident occaecati excepturi optio reprehenderit',
            'body' => 'quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto',
            'user_id' => 222,
            'rating' => 45
        ]);
        $post->save();

        $user = User::create([
            'id' => 222,
            'name' => 'Leanne Graham',
            'email' => 'leanne@graham.com',
            'city' => 'London'
        ]);
        $post->user()->associate($user);
        $post->save();

        $response = $this->get('/api/v1/posts/111');

        $response->assertStatus(200);

        $response->assertExactJson([
            'id' => 111,
            'title' => 'sunt aut facere repellat provident occaecati excepturi optio reprehenderit',
            'body' => 'quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto',
            'user' => 'Leanne Graham'
        ]);

    }

    public function test_get_post_notfound()
    {
        Artisan::call('migrate:fresh');

        $post = Post::create([
            'id' => 111,
            'title' => 'sunt aut facere repellat provident occaecati excepturi optio reprehenderit',
            'body' => 'quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto',
            'user_id' => 222,
            'rating' => 45
        ]);
        $post->save();

        $user = User::create([
            'id' => 222,
            'name' => 'Leanne Graham',
            'email' => 'leanne@graham.com',
            'city' => 'London'
        ]);
        $post->user()->associate($user);
        $post->save();

        $response = $this->get('/api/v1/posts/999');

        $response->assertStatus(404);

    }
}
