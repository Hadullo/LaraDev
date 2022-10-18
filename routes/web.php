<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Auth;
//use App\Http\Controllers\DashboardController;


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

//Route::get('/', function () {
  //  return view('pages.index');
//});

//Route::get('/about', function () {
  //  return view('pages.about');
//});

//Route::get('/contact', function () {
   // return view('pages.contact');
//});


//To Home Page
Route::get('/', [PagesController::class, 'index'])->name('home.index');


//To Home About Page
Route::get('/about', [PagesController::class, 'about'])->name('about.us');

//To Home Contact Page
Route::get('/contact', [PagesController::class, 'contact'])->name('contact.us');

//Resource for Postse
Route::resource('/blog', PostsController::class);




Auth::routes();



//Path to Admin Dashboard or user dashboard
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'redirect'])->name('dashboard');
