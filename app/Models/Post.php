<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $table = 'post'; //specify the table name if it is different from the model name in plural form
    protected $fillable = ['title', 'body','author' ,'published']; //fields that can be updated by mass assignment
    
    protected $guarded = ['id']; //fields that cannot be updated by mass assignment(read only fields) 
}
