<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';

    protected $fillable = ['title'];

    protected $garded = ['id']; 


    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }   

    
}

