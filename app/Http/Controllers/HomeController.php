<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    //
    public function _construct()
    {
        $this->middleware('auth');
    }
    public function index(){

        $posts = Post::all();
        return view('home', ['posts'=> $posts->reverse()]);
    }
    public function homesearch(){

        $posts = Post::all();
        return view('homesearch', ['posts'=> $posts]);
    }
}
