<?php

namespace App\Http\Controllers;
use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
 {
     return view('admin.blog');
 }

 public function store(Request $request)
 {
     $this->validate($request, [
         'body'=> 'required'
     ]);
    //adds user to blog and then creates in database
    $request->user()->blog()->create($request->only('body', 'title', 'imageurl'));
    return back();
 }

 public function blogPage(){
    $blogs = Blog::latest()->paginate(5);

    return view('blog', [
        'blogs' => $blogs
    ]);
 }


}
