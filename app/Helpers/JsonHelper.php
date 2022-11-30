<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class JsonHelper
{
    public function getJsonFromSource() {
        $response = Http::get(config('app.json_posts_url'));
        $response->throw();

        if($response->successful()) {
            $json = $response->json();
            return array_splice($json, 0, config('app.max_posts'));
        }

        return false;
    }
}
