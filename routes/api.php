<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagController; 


/*|--------------------------------------------------------------------------
| Restful API Routes
| Request => get, post, put, delete
| Response => json, status code
|--------------------------------------------------------------------------
*/
// Post API
Route::post('/posts', [PostController::class, 'create']);
Route::put('/posts/{id}', [PostController::class, 'update']);
Route::delete('/posts/{id}', [PostController::class, 'destroy']);


// Comment API
Route::post('/comments', [CommentController::class, 'create']);


// Tag API
Route::post('/tags', [TagController::class, 'create']);

