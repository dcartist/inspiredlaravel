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

    //  Post::create([
    //      'user_id'=> auth()->id(),
    //      'body' => $request->body
    //  ])
    // $request->user()->posts()->create([
    //     'body'=>$requst->body
    // ]);

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
