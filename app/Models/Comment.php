<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory; //use the HasFactory trait to enable factory methods for this model
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
