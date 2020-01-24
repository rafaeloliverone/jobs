<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
 
    protected $fillable = [ 'name', ];

    /**
     * Get the users with skill
     */
    public function users()
    {
        return $this->belongsToMany('App\User', 'user_skill');
    }

    /**
     * Get the jobs with skill
     */
    public function jobs()
    {
        return $this->belongsToMany('App\Job', 'job_skill');
    }
}
