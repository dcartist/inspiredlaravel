<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    //Logout
    public function store(){
        auth()->logout();
        return redirect()->route('home');
    }
}
