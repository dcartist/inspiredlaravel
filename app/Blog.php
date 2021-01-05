<?php

namespace App;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    // use HasFactory;
    protected $fillable = [
        'body', 'imageurl', 'title',
    ];

    //add a user to the blog
    public function user(){
        return $this->belongsTo(User::class);
    }
}
