<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'published']; //fields that can be updated by mass assignment
    
    protected $guarded = ['id']; //fields that cannot be updated by mass assignment(read only fields) 
}
