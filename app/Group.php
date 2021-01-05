<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //

    protected $fillable = [
        'name', 'description', 'type',
    ];

    //add a user to the blog
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function usergroup(){
        return $this->hasMany(Usergroup::class);
    }
}
