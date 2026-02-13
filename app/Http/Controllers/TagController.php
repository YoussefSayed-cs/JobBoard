<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();

        return view('tags.index', [
            'tags' => $tags,
            'title' => 'All Tags'
        ]);
    }



    public function create()
    {
        Tag::create([
            'title' => 'laravel developer',
        ]);
        return redirect()->route('tags.index');
    }


    public function testManyToMany()
    {
        // $post = Post::find(1);
        // $post3 = Post::find(3);

        

        // $post->tags()->attach(2); //attach another tag to the same post
        // $post3->tags()->attach(1); //attach the same tag to another post



       $tag = Tag::find(1);
     $tag->posts()->attach(2); //attach the same tag to another post

        return response()->json([
            'tag' => $tag,
            'posts' => $tag->posts
        ]);
    }


}
