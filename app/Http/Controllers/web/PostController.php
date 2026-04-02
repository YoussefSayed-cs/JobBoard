<?php

namespace App\Http\Controllers\web;

use App\Http\Requests\PostRequest;
use App\Models\Post; 
use App\models\PostFactory;

use Illuminate\Http\Request;
use Pest\Support\View;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Post::latest()->paginate(10); //fetch all posts with pagination, 10 posts per page
        $title = "All Posts";
        return view('posts.index', ['posts' => $data] + ['title' => $title]); //pass the data to the view with title  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { 
        return View('posts.create'); //return the view for creating a new post
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
      $post = new Post($request->validated());
      $post->save(); //save the post to the database

      return redirect('/posts')->with('success', 'Post created successfully.'); //redirect to the posts index page after saving the post   
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
        
        $post = Post::findOrFail($id); //fetch the post by id or fail if not found
        return view('posts.edit', ['posts' => $post , "page_title" => "Edit Post " . $post->title]); //pass the post to
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, string $id)
    {
      
        $post = Post::findOrFail($id); //fetch the post by id or fail if not found
        $post->update($request->validated()); //update the post with the validated request data
        $post->save(); //save the updated post to the database

        return redirect('/posts')->with('success', 'Post updated successfully.');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::destroy($id); //delete the post by id
        return redirect('/posts')->with('success', 'Post deleted successfully.'); //redirect to the posts index page after deleting the post
    }
}
