<?php

namespace App\Http\Controllers\web;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Comment::cursorPaginate(10); //fetch all records from the comments table
        $title = "All Comments";
        return view('comments.index', ['comments' => $data, 'title' => $title]); //pass the comments and title to the view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Comment::factory(10)->create(); //use the factory to create a new comment with random data
        return response(content: ["message" => "Successful Creation"] , status: 201); //redirect to the posts index page after creating a new comment
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //@TODO: fetch the comment by id and pass it to the show view to display the comment details
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //@TODO: fetch the comment by id and pass it to the edit view to show the edit form
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //@TODO: validate the request data before updating the comment and then update the comment by id
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {   
        Comment::destroy($id); //delete the comment by id
        return response(content: ["message" => "Successful Deletion"] , status: 200 ); //redirect to the comments index page after deleting the comment
    }
}
