<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Cache;

class User extends Authenticatable
{
    use Notifiable;


    protected $casts = [
        'socialMedia' => 'array',
        'interests' => 'array',
        'profilePictures' => 'array'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded=[];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isOnline()
    {
        return Cache::has('user-is-online-' . $this->id);
    }

    public function getLastActivityAttribute($value)
    {
        return jdate($value);
    }
    public function getCreatedAtAttribute($value)
    {
        return jdate($value);
    }
    public function getRouteKeyName()
    {
        return 'userName';
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
    public function fullName()
    {
         return $this->firstName . ' ' . $this->lastName;
    }
}
