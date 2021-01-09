<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     *
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username',
    ];

    /**
     *
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**

     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function blog()
    {
        return $this->hasMany(Blog::class);
    }

public function profile()
{
    return $this->hasOne(Userprofile::class);
}

}
