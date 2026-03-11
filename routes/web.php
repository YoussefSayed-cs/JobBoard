<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagController;
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
Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');
//Route::post('/comments', [CommentController::class, 'create']);



/*
TagController Routes
*/
Route::get('/tags', [TagController::class, 'index'])->name('tags.index');
//Route::post('/tags', [TagController::class, 'create']);
Route::get('/tags/test', [TagController::class, 'testManyToMany']);
