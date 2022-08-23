<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    // Index
    public function index () {

        $posts = Post::all();

        return view('index', ['posts' => $posts]);
    }

    // Create
    public function create(){

        return view('posts.create');
    }

    // Store
    public function store(){

        request()->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create([
            'title' => request('title'),
            'content' => request('content')
        ]);

        return redirect('/');
    }


    // View
    public function view(Post $post){

        return view('posts.view', ['post' => $post]);
    }


    // Edit
    public function edit(Post $post){

        return view('posts.edit', ['post' => $post]);
    }


    // Update
    public function update(Post $post){

        request()->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post->update([
            'title' => request('title'),
            'content' => request('content'),
        ]);

        return redirect('/');
    }


    // Destroy
    public function destroy(Post $post){

        $post->delete();

        return redirect('/');
    }

}
