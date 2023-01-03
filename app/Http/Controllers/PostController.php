<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;


class PostController extends Controller
{
    public function index()
    {   

        // dd(request('search'));
        $title = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = 'Semua berita di kategori ' . $category->name;
        }

        if(request('user')) {
            $user = User::firstWhere('name', request('user'));
            $title = ' Berita yang ditulis oleh ' . $user->name;
        }

        return view('pages.news', [
            "title" => $title,
            "posts" => Post::latest()->filter(request(['search', 'category', 'user']))->paginate(3)->withQueryString() // scopeFilter model post, bawa query ke halaman selanjutnya
        ]);
    }

    public function show(Post $post)
    {
        return view('pages.news-detail', [
            "post"  =>  $post
        ]);
    }
}
