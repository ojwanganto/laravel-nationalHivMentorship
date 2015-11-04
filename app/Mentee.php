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
}
