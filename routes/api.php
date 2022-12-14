<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::prefix('v1')->group(function() {

    Route::get('/data/import-with-users', [ApiController::class, 'update'])->name('import_data');

    Route::get('/posts/top',    [PostController::class, 'top'])->name('show_top_posts');
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('show_post');
    Route::get('/users',        [UserController::class, 'list'])->name('list_users_with_posts');
});
