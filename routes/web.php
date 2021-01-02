<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
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
