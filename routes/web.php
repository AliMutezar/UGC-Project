<?php

use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/services', function() {
    return view('pages.services');
});

Route::get('/services-detail', function() {
    return view('pages.services-detail');
});

Route::get('/about', function() {
    return view('pages.about');
});

Route::get('/track', function() {
    return view('pages.track');
});


Route::get('/gallery', function() {
    return view('pages.gallery');
});

Route::get('/contact', function() {
    return view('pages.contact');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::controller(PostController::class)->group(function() {
    Route::get('/news', 'index');
    Route::get('/news/{post:slug}', 'show');
});


Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function() {
    Route::resource('posts', DashboardPostController::class);
    Route::resource('categories', DashboardCategoryController::class)->middleware('notUser')->except('show');
    Route::resource('users', DashboardUserController::class)->middleware('notUser')->except('show');
});


