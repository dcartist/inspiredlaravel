<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //login index
    public function index(){
        return view ('auth.login');
    }

    public function store(Request $request){

        // dd("working");
        $this->validate($request, ['email'=>'required|email', 'password'=>'required']);



       if(auth()->attempt($request->only('email', 'password')))
        {
            if (auth()->user()->is_admin == 1) {
                return redirect()->route('admin.home');
            }else{
                return redirect()->route('profile');
            }
        }else{
            // return redirect()->route('login')
            //     ->with('error','Email-Address And Password Are Wrong.');
            return back()->with('status', 'Invalid login details');
        }

    }
}
