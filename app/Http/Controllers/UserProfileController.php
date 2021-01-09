<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
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

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'body'=> 'required'
        // ]);
       //adds user to blog and then creates in database
    //    $request->user()->blog()->create($request->only('body', 'title', 'imageurl'));
    //    return back();
    dd($request);
    }
}
