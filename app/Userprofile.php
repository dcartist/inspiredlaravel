<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userprofile extends Model
{
    // color | bio | url | skills | mentor | user_id | avatar

    protected $fillable = [
        'color', 'bio', 'skills', 'url', 'avatar',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
