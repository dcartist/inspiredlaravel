<?php

namespace App\Http\Controllers;
use App\Directory;
use Illuminate\Http\Request;

class DirectoryController extends Controller
{
    //
 public function index(){
    $directories = Directory::latest()->paginate(5);

    return view('directory', [
        'directories' => $directories
    ]);
 }



}



