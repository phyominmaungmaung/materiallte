<?php

namespace App\Http\Controllers;

use App\category;
use App\Postimage;
use Faker\Provider\File;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function getAbout(){
        return view('about');
    }
}
