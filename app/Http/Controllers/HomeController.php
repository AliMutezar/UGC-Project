<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        // dd(Post::latest()->limit(1)->get());
        return view('pages.home', [
            "posts" => Post::latest()->limit(3)->get()
        ]);
    }
}
