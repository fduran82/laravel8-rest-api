<?php

use App\Http\Controllers\PostsApiController;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Show all Posts
Route::get('/posts',[PostsApiController::class, 'index']);

// Add a new Post
Route::post('/posts', [PostsApiController::class, 'store']);

// Update a Post
Route::put('/posts/{post}', [PostsApiController::class, 'update']);

// Delete a Post
Route::delete('/posts/{post}', [PostsApiController::class, 'destroy']);

