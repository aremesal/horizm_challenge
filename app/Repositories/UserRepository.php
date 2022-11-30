<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Contracts\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Stores a new user from array of user data. If user's ID already exists does NOT update it - requirement
     *
     * @param array $data
     * @return mixed
     */
    public function store(Array $data)
    {
        $user = User::find($data['id']);

        if( !$user ) {
            $user = User::create([
                'id' => $data['id'],
                'name' => $data['name'],
                'email' => $data['email'],
                'city' => $data['city'],
            ]);
            $user->save();
        }

        return $user;
    }
}
