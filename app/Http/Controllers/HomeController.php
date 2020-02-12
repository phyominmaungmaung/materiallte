<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\category;

class HomeController extends Controller
{
    public function getWelcome(){
        $posts=Post::OrderBy('id','desc')->with('user')->paginate('6');
        return view('welcome')->with(['posts'=>$posts]);
    }
    public function getDash(){
        return view('dashboard');
    }
}
