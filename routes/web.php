<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;   
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;



/*
IndexController Routes
*/
Route::get('/' , [IndexController::class , 'index'])->name('index');
Route::get('/jobs' , [IndexController::class , 'job'])->name('job');
Route::get('/about' , [IndexController::class , 'about'])->name('about');
Route::get('/contact' , [IndexController::class , 'contact'])->name('contact');

Route::get('/contact' , [ContactController::class , 'index'])->name('contact');
Route::get('/jobs', [JobController::class, 'index'])->name('jobs');
Route::get('/about', [AboutController::class, 'index'])->name('about'); 

/*
PostController Routes
*/
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');


/*
CommentController Routes
*/
Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');
Route::get('/comments/create', [CommentController::class, 'create']);