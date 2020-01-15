<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    
    protected $fillable = [ 'name' , 'photo', 'description', 
        'website', 'linkedin', 'twitter', 'location',
    ];

    public function jobs()
    {
        return $this->hasMany('App\Job');
    }
}
