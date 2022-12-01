<?php

namespace App\Http\Controllers;

use App\Helpers\JsonHelper;
use App\Models\Post;
use App\Repositories\Contracts\AttributeRepositoryInterface;
use App\Repositories\Contracts\PostRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    private $postRepo;
    private $jsonHelper;

    public function __construct(PostRepositoryInterface $postRepository, JsonHelper $json_helper)
    {
        $this->postRepo = $postRepository;
        $this->jsonHelper = $json_helper;
    }

    /**
     * Get all posts from source, validate and send them to repository. Return number of imported posts.
     *
     * @return false|array
     */
    public function getPosts()
    {
        $new = 0;
        $updated = 0;
        $posts = $this->jsonHelper->getJsonPostsFromSource();

        if($posts) {
            foreach ($posts as $post) {
                $validator = Validator::make($post,[
                    'id'=>'required|int',
                    'userId'=>'required|int',
                    'title'=>'required',
                    'body'=>'required',
                ]);

                if (!$validator->fails()) {
                    $post = $this->postRepo->store($post);
                    if($post->wasRecentlyCreated)
                        $new++;
                    else
                        $updated++;
                }
            }

            return ['new' => $new, 'updated' => $updated];
        } else {
            return false;
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
