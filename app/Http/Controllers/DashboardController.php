<?php

namespace App\Http\Controllers;

use App\Models\Freelance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Shipment;
use App\Models\User;

class DashboardController extends Controller
{
    public function index() 
    {
        if (Auth::user()->role == 'user') {        
            return redirect('/admin/posts');
        } else {
            return view('pages.admin.dashboard', [
                'users' =>  User::count(),
                'freelances' => Freelance::count(),
                'shipments_success' => Shipment::where('status', 'success_delivered')->count(),
                'shipments_process' => Shipment::where('status', 'process')->count(),
                'shipments_loading' => Shipment::where('status', 'loading')->count(),
                'shipments_create' => Shipment::where('status', 'create')->count(),
                'posts' => Post::count()
            ]);
        }
    }
}
