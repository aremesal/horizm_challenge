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

    public function store(Array $data)
    {
        $post = Post::firstOrNew(['id' => $data['id']]);

        // Always update the body
        $post->body = $data['body'];

        // Calculate rating
        // Always calculate rating because the body can change
        $rating = Post::calculateRating($data['title'], $data['body']);

        // If is an new entity
        if(!$post->exists) {
            $post->user_id = $data['userId'];
            $post->title = $data['title'];
            $post->rating = $rating;
        }

        $post->save();

        return $post;
    }
}
