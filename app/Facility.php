<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    protected $table = 'facility';
    protected $primaryKey = 'id';
    
     public function mentorshipSession()
    {
        return $this->hasMany('App\MentorshipSession', 'facility', 'id');
    }
}
