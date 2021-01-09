<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use App\User;
use App\Userprofile;
class UserProfileController extends Controller
{
    //
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.index');
    }
//Show the application dashboard.
    /**
     *
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('admin.index');
    }

    public function profileSetup(){
        return view('user.setup');
    }


    public function profile(User $user){
        // dd($user);
        return view('users.profile', [
            'user' => $user
        ]);
}

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'body'=> 'required'
        // ]);
       //adds profile to the user
       $request->user()->profile()->create($request->only('color', 'bio', 'skills', 'url', 'avatar'));
       return back();
    // dd($request);
    }
}
