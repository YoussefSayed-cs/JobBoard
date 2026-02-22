<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasUuids;
    use HasFactory;

    protected $keyType = 'string'; //specify the primary key type if it is not an integer

    protected $primaryKey = 'id'; //specify the primary key field if it is not 'id'

    protected $public = false; //specify that the primary key is not auto-incrementing
    
    protected $table = 'post'; //specify the table name if it is different from the model name in plural form
    protected $fillable = ['title', 'body','author' ,'published']; //fields that can be updated by mass assignment
    
    protected $guarded = ['id']; //fields that cannot be updated by mass assignment(read only fields) 

    public function comments()
    {
        return $this->hasMany(Comment::class , 'post_id' , 'id'); //hasMany(related model class name , foreign key in the related model , local key in the current model)
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class , 'post_tags' , 'post_id' , 'tag_id');
    }
}
