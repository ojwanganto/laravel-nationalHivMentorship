<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SessionTool extends Model
{
    protected $table = 'session_tool';
    protected $primaryKey = 'tool_id';
    
     /**
     * Get the MentorshipSession associated with SessionTool
     */
    public function mentorshipSession()
    {
        return $this->hasOne('App\MentorshipSession', 'session_id', 'tool_id');
    }
}
