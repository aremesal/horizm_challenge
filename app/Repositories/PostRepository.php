<?php

namespace App\Repositories;

use App\Models\Post;
use App\Repositories\Contracts\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{
    protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    /**
     * Stores a new post from an array of post data
     *
     * @param array $data
     * @return mixed
     */
    public function store(Array $data)
    {
        $post = Post::firstOrNew(['id' => $data['id']]);

        // Always update the body
        $post->body = $data['body'];

        // Calculate rating
        // Always (re)calculate rating because the body could have changed
        $rating = Post::calculateRating($data['title'], $data['body']);

        // Only if it is a new entity insert all data
        if(!$post->exists) {
            $post->user_id = $data['userId'];
            $post->title = $data['title'];
            $post->rating = $rating;
        }

        $post->save();

        return $post;
    }

    public function user_ids_from_posts() {
        return Post::groupBy('user_id')->pluck('user_id')->toArray();
    }
}
