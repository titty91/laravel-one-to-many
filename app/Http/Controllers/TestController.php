<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class TestController extends Controller
{
    function home(){

        $posts = Post::all();
        return view('pages.home', compact('posts'));

    }
}
