<?php

namespace App\Http\Controllers;
use App\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{

    public function index()
    {
        $groups = Group::paginate(15);
       return view('supportgroups', [
           'groups' => $groups
       ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=> 'required',
            'type'=>'required'
        ]);
       //adds user to blog and then creates in database
       $request->user()->usergroup()->create($request->only('name', 'type', 'description'));
       return back();
    }


}
