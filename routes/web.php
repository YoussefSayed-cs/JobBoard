<?php

use App\Http\Controllers\web\IndexController;
use App\Http\Controllers\web\PostController;
use App\Http\Controllers\web\CommentController;
use App\Http\Controllers\web\TagController;
use Illuminate\Support\Facades\Route;



/*
IndexController Routes
*/
Route::get('/' , [IndexController::class , 'index'])->name('index');
Route::get('/jobs' , [IndexController::class , 'job'])->name('job');
Route::get('/about' , [IndexController::class , 'about'])->name('about');
Route::get('/contact' , [IndexController::class , 'contact'])->name('contact');

 

/*
PostController 
*/

Route::resource('/posts', PostController::class); //use resourceful routing for the posts controller to handle all CRUD operations in one line

/*
CommentController Routes
*/

Route::resource('/comments', CommentController::class); //use resourceful routing for the comments controller to handle all CRUD operations in one line

/*
TagController Routes
*/

Route::resource('/tags', TagController::class); //use resourceful routing for the tags controller to handle all CRUD operations in one line
