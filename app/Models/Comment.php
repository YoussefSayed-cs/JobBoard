<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments'; //specify the table name if it is different from the model name in plural form
    protected $fillable = [
        'post_id',
        'author',
        'content',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
