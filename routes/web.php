<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\web\IndexController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\web\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\web\CommentController;
use App\Http\Controllers\web\TagController;
use Illuminate\Support\Facades\Route;



/*
Invokable Routes
*/
Route::get('/' , [IndexController::class , 'index'])->name('index');
Route::get('/jobs' , [JobController::class , '__invoke'])->name('jobs');
Route::get('/about' , [AboutController::class , '__invoke'])->name('about'); ;
Route::get('/contact' , [ContactController::class , '__invoke'])->name('contact');

 


//PostController Routes
Route::resource('/posts', PostController::class);   /*use resourceful routing for the posts controller 
                                                    to handle all CRUD operations in one line */

//CommentController Routes
Route::resource('/comments', CommentController::class)->except('destroy');  /*use resourceful routing for the comments controller
                                                                             to handle all CRUD operations in one line*/


//TagController Routes
Route::resource('/tags', TagController::class)->only('index', 'show'); /*use resourceful routing for the tags controller
                                                                         to handle all CRUD operations in one line*/
