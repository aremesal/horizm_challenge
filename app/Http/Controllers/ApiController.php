<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    private $post_controller;
    private $user_controller;

    public function __construct(PostController $post_controller, UserController $user_controller) {
        $this->post_controller = $post_controller;
        $this->user_controller = $user_controller;
    }

    /**
     * Imports posts and users from the source
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update() {
        $ret = [];

        // Import Posts
        $result = $this->post_controller->getPosts();
        $ret['posts'] = $result;

        // Import Users
        $result = $this->user_controller->getUsers();
        $ret['users'] = $result;

        return response()->json($ret, 200);
    }
}
