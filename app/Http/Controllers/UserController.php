<?php

namespace App\Http\Controllers;

use App\Helpers\JsonHelper;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use App\Repositories\Contracts\PostRepositoryInterface;
use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    private $userRepo;
    private $postRepo;
    private $jsonHelper;

    public function __construct(UserRepositoryInterface $userRepository, PostRepositoryInterface $postRepository, JsonHelper $json_helper)
    {
        $this->userRepo = $userRepository;
        $this->postRepo = $postRepository;
        $this->jsonHelper = $json_helper;
    }

    /**
     * Get all users from source, filter users with posts, validate and send them to repository. Return number of imported users.
     *
     * @return false|int
     */
    public function getUsers()
    {
        $cont = 0;
        $users = $this->jsonHelper->getJsonUsersFromSource();
        $users_with_posts = $this->postRepo->user_ids_from_posts();

        if($users) {
            // Process only users who have posts
            $filtered = array_filter($users, function($v,$k) use ($users_with_posts) {
                return in_array($v['id'], $users_with_posts);
            }, ARRAY_FILTER_USE_BOTH);

            foreach ($filtered as $user) {
                // Adapt data from source
                $user['city'] = $user['address']['city'];

                $validator = Validator::make($user,[
                    'id'=>'required|int',
                    'name'=>'required',
                    'email'=>'required|email',
                    'city'=>'required',
                ]);

                if (!$validator->fails()) {
                    $this->userRepo->store($user);
                    $cont++;
                }
            }

            return $cont;
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
     * @param  \App\Http\Requests\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
