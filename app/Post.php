<?php

namespace App;
use App\Tag;
use App\Post;
use App\Datail;

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

    public function datail(){

        return $this-> hasOne(Datail::class);
    }
}
