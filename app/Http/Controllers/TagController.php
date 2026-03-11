<?php

namespace App\Http\Controllers;
use App\Models\Tag;
use App\Models\Post;

use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::all();

        return view('tags.index', [
            'tags' => $tags,
            'title' => 'All Tags'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Tag::create([
            'title' => 'laravel developer',
        ]);
        return redirect()->route('tags.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function testManyToMany()
    {
        
     $tag = Tag::find(1);
     $tag->posts()->attach(2); //attach the same tag to another post

        return response()->json([
            'tag' => $tag,
            'posts' => $tag->posts
        ]);
    }

}
