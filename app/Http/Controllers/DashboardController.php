<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class DashboardController extends Controller
{
    public function index() 
    {
        if (Auth::user()->role == 'user') {        
            return redirect('/admin/posts');
        } else {
            return view('pages.admin.dashboard');
        }
    }
}
