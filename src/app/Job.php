<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
 
    protected $fillable = [ 'title', 'location', 'challenge', 'description', 
    'skills', 'job_type', 'experience', 'range_salary_initial', 
    'range_salary_final', 'company_id', 'hiring_contact',
    ];

    /**
     * Get the company that owns the job.
     */
    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    /**
     * Get users who are recruiters for this job
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }


}
