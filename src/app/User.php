<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'linkedin', 'location', 'avatar', 
        'email', 'password', 'skills', 'about', 
        'birth_date', 'cellphone',
    ];

    /**
     * Get the vacancies this user is as a recruiter
     */
    public function jobs()
    {
        return $this->hasMany('App\Job');
    }

    /**
     * Get the avatar this user 
     */
    public function getAvatarImageAttribute($value) {
        return $this->avatar == null ? asset('images/null.png') : asset($this->avatar);
    }

    /**
     * Get the filename of avatar this user 
     */
    public function getAvatarFilenameAttribute($value) {
        return substr($this->avatar, 30, strlen($this->avatar));
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
