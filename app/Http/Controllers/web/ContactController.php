<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact' , ['title' => 'Contact Us']);
    }
}
