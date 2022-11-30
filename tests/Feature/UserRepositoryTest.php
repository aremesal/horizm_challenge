<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\User;
use App\Repositories\PostRepository;
use App\Repositories\UserRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserRepositoryTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test Repository stores an user.
     *
     * @return void
     */
    public function test_store_user()
    {
        $user = User::factory()->make();
        $user['city'] = $user['address']['city'];

        $repo = resolve(UserRepository::class);

        $repo->store($user->toArray());

        $this->assertDatabaseCount('users', 1);
    }
}
