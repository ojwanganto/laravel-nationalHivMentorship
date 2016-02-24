<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MentorshipSession extends Model
{
    protected $table = 'mentorship_session';
    protected $primaryKey = 'session_id';
    protected $dates = ['session_date'];
    
     /**
     * Get the SessionTool associated with MentorshipSession
     */
    public function sessionTool()
    {
        return $this->hasOne('App\SessionTool', 'tool_id', 'session_tool_id');
    }
    
     /**
     * Get scores associated with MentorshipSession
     */
    public function sessionScore()
    {
        return $this->hasMany('App\MentorshipSessionScore', 'session_id', 'session_id');
    }
    
     /**
     * Get Mentor associated with MentorshipSession
     */
    public function mentor()
    {
        return $this->belongsTo('App\Mentor', 'mentor_id', 'mentor_id');
    }
    
     /**
     * Get Mentee associated with MentorshipSession
     */
    public function mentee()
    {
        return $this->belongsTo('App\Mentee', 'mentee_id', 'mentee_id');
    }
}
