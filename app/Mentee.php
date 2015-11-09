<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mentee extends Model
{
    protected $table = 'mentee';
    protected $primaryKey = 'mentee_id';
    
      /**
     * Get MentorshipSession associated with Mentee
     */
    public function mentorshipSession()
    {
        return $this->hasMany('App\MentorshipSession', 'mentee_id', 'mentee_id');
    }
    
    /*
        Get associated person
    */
    public function person()
    {
        return $this->hasOne('App\Person', 'person_id', 'person_id');
    }
}
