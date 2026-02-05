<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;   
use Illuminate\Support\Facades\Route;



// Index Routes
Route::get('/' , [IndexController::class , 'index'])->name('index');
Route::get('/jobs' , [IndexController::class , 'job'])->name('job');
Route::get('/about' , [IndexController::class , 'about'])->name('about');
Route::get('/contact' , [IndexController::class , 'contact'])->name('contact');



Route::get('/contact' , [ContactController::class , 'index'])->name('contact');
Route::get('/jobs', [JobController::class, 'index'])->name('jobs');
Route::get('/about', [AboutController::class, 'index'])->name('about'); 