<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directory extends Model
{
    //
            protected $fillable = [
                'name', 'description', 'type', 'url',
            ];

            //add a user to the blog
            public function user(){
                return $this->belongsTo(User::class);
            }
}
