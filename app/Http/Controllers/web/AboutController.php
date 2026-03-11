<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about' , ['title' => 'About Us']);
    }
}
