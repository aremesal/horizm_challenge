<?php

namespace App\Repositories\Contracts;

use App\Http\Requests\StorePost;

interface PostRepositoryInterface
{
    public function store(Array $data);
}
