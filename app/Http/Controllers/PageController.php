<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('home');
    }
    public function posts_api(){
        return view('posts_api');
    }
}
