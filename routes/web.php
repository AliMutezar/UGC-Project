<?php

use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\FreelanceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KirimEmailController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\TrackShipmentController;
use Illuminate\Support\Facades\Route;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;

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


// Service Details
Route::get('/services-ocean-freight', function() {
    return view('pages.services-ocean-freight');
});

Route::get('/services-air-freight', function() {
    return view('pages.services-air-freight');
});

Route::get('/services-logistics', function() {
    return view('pages.services-logistics');
});

Route::get('/services-door-to-door', function() {
    return view('pages.services-door-to-door');
});

Route::get('/services-warehouse', function() {
    return view('pages.services-warehouse');
});

Route::get('/services-custom-brokerage', function() {
    return view('pages.services-custom-brokerage');
});

Route::get('/about', function() {
    return view('pages.about');
});


Route::get('/gallery', function() {
    return view('pages.gallery');
});


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::controller(PostController::class)->group(function() {
    Route::get('/news', 'index');
    Route::get('/news/{post:slug}', 'show');
});

Route::get('/track', [TrackShipmentController::class, 'index']);

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function() {
    Route::resource('posts', DashboardPostController::class);
    Route::resource('categories', DashboardCategoryController::class)->middleware('notUser')->except('show');
    Route::resource('users', DashboardUserController::class)->middleware('notUser')->except('show');
    Route::resource('shipments', ShipmentController::class)->middleware('notUser')->except('show');
    Route::get('ugcfreelances', [FreelanceController::class, 'show'])->middleware('notUser');
});


Route::controller(FreelanceController::class)->group(function() {
    Route::get('/contact', 'index');
    Route::post('/contact-post', 'store');
    Route::get('/reload-captcha', 'reloadCaptcha');
});
