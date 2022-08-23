<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Show all Posts
Route::get('/',[PostsController::class, 'index']);

// Create a Post
Route::get('/create', [PostsController::class, 'create']);

// Store a Post
Route::post('/', [PostsController::class, 'store']);

// View a Post
Route::get('/{post}/view', [PostsController::class, 'view']);

// Edit a Post
Route::get('/{post}/edit', [PostsController::class, 'edit']);

// Update a Post
Route::put('/{post}', [PostsController::class, 'update']);

// Delete a Post
Route::delete('/{post}', [PostsController::class, 'destroy']);
