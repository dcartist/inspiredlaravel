<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class RegisterController extends Controller
{
    //
    public function index(){
        return view ('auth.register');
    }

    // Register
    public function store(Request $request){
        $this->validate($request, ['name'=> 'required|max:355', 'username'=>'required|max:255|unique:users', 'password'=>'required|confirmed', 'email'=>'required|email|max:255|unique:users']);
        // dd($request);
        // $email = strtolower($request->email);
        // $usernamelowered = strtolower($request->username);
        User::create([
            'name' => $request->name,
            'username' =>  $request->username,
            'password' => Hash::make($request->password),
            'email' =>  $request->email,
            'is_admin'=>0,
        ]);

        auth()->attempt($request->only('email', 'password'));
            // return redirect()->route('user.index');
            return redirect()->route('blog');
    }
}
