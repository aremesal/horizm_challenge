<?php

namespace App\Console\Commands;

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Repositories\Contracts\PostRepositoryInterface;
use Illuminate\Console\Command;

class GetPostsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'horizm:getposts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Gets the posts from remote API and populat the database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Import Posts
        $postController = resolve(PostController::class);
        $result = $postController->getPosts();

        if($result !== false)
            $this->info('Got ' . $result . ' posts imported.');
        else
            $this->error('Could not import posts');

        // Import Users
        $userController = resolve(UserController::class);
        $result = $userController->getUsers();

        if($result !== false)
            $this->info('Got ' . $result . ' users imported.');
        else
            $this->error('Could not import users');

        return true;
    }
}
