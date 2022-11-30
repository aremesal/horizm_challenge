<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class JsonHelper
{
    /**
     * Gets a max number of posts from the source
     *
     * @return array|false
     * @throws \Illuminate\Http\Client\RequestException
     */
    public function getJsonPostsFromSource() {
        $response = Http::get(config('app.json_posts_url'));
        $response->throw();

        if($response->successful()) {
            $json = $response->json();
            return array_splice($json, 0, config('app.max_posts'));
        }

        return false;
    }

    /**
     * Gets all users from source
     *
     * @return array|false|mixed
     * @throws \Illuminate\Http\Client\RequestException
     */
    public function getJsonUsersFromSource() {
        $response = Http::get(config('app.json_users_url'));
        $response->throw();

        if($response->successful()) {
            return $response->json();
        }

        return false;
    }
}
