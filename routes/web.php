<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\Auth\LoginController;
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

Route::get('/', function () {return view('welcome');})->name('home');
Route::get('/about', function (){return view('about');})->name('about');
Route::get('/directory', function(){return view('directory');})->name('directory');
Route::get('/mantra', function(){return view('directory');})->name('mantra');
Route::get('/contact', function(){return view('directory');})->name('contact');
Route::get('/blog', function(){return view('directory');})->name('blog');
Route::get('/supoort', function(){return view('directory');})->name('supportgroups');

//Auth
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::get('/user/home', [UserProfileController::class, 'index'])->name('user.index');
Route::post ('/logout', [LogoutController::class, 'store'])->name('logout');


