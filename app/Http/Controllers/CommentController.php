<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $data = Comment::all(); //fetch all records from the comments table
        $title = "All Comments";
        return view('comments.index ', ['comments' => $data, 'title' => $title]); //pass the comments and title to the view
    }

    

    public function create()
    {
         Comment::create([
            'content' => 'This is a new comment.',
            'post_id' => 1, // Assuming the comment belongs to a post with ID 1
            'author' => 'Youssef',
        ]);

        return redirect('/comments'); //redirect to the comments index page after creating a new comment
    }
    

}
