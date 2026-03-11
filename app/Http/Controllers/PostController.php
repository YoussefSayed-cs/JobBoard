<?php

namespace App\Http\Controllers;

use App\Models\Post; 
use App\models\PostFactory;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Post::cursorPaginate(5); 
        $title = "All Posts";
        return view('posts.index', ['posts' => $data] + ['title' => $title]); //pass the data to the view with title
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { 

        // $posts = Post::create([
        //     'title' => 'New Post1111',
        //     'body' => 'This is the content of the new post11111.',
        //     'published' => true,
        //     'author' => 'Youssef',
        // ]);

        Post::factory(10)->create(); //use the factory to create a new post with random data

        return response(content: ["message" => "Successful Creation"], status: 201); //redirect to the posts index page after creating a new post
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //@TODO: validate the request data before creating a new post
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id); //fetch a single record by id or fail if not found
        return view('posts.show', ['posts' => $post]); //pass the post to the view
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::findOrFail($id); //fetch the post by id or fail if not found
        $post->update([
            'title' => 'Updated Post Title',
            'body' => 'This is the updated content of the post.',
            'published' => false,
            'author' => 'Youssef Updated',
        ]); //update the post with new data

        return redirect('/posts'); //redirect to the posts index page after updating the post
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::destroy($id); //delete the post by id
        return response(content: "Successful Deletion" , status: 204); //redirect to the posts index page after deleting the post
    }
}
