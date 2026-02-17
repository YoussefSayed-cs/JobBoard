<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index()
    {
        $data = Post::paginate(5); //fetch all records from the posts table 
        $title = "All Posts";
        return view('posts.index', ['posts' => $data] + ['title' => $title]); //pass the data to the view with title
    }


    function show($id)
    {
        $post = Post::findOrFail($id); //fetch a single record by id or fail if not found
        return view('posts.show', ['posts' => $post]); //pass the post to the view
    }



    function create()
    {
        $posts = Post::create([
            'title' => 'New Post1111',
            'body' => 'This is the content of the new post11111.',
            'published' => true,
            'author' => 'Youssef',


        ]);

        return redirect('/posts'); //redirect to the posts index page after creating a new post
    }
}



