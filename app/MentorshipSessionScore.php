<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MentorshipSessionScore extends Model
{
    protected $table = 'session_score';
    protected $primaryKey = 'session_score_id';
    
    /**
     * Get the MentorshipSession associated with MentorshipSessionScore
     */
    public function mentorshipSession()
    {
        return $this->belongsTo('App\MentorshipSession', 'session_id', 'session_id');
    }
}
