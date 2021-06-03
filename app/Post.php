<?php

namespace App;
use App\Tag;
use App\Post;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [

        'title',
        'text',
    ];

    public function tag(){

        return $this-> belongsTo(Tag::class);
    }
}
