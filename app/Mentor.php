<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    protected $table = 'mentor';
    protected $primaryKey = 'mentor_id';
    
     /**
     * Get Mentor associated with MentorshipSession
     */
    public function mentorshipSession()
    {
        return $this->hasMany('App\MentorshipSession', 'mentor_id', 'mentor_id');
    }
    /*
        Get associated person
    */
    public function person()
    {
        return $this->belongsTo('App\Person', 'person_id', 'person_id');
    }
}
