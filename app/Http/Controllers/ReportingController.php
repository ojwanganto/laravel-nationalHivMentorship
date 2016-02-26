<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ReportingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countys = \DB::table('county')->get();
        return view('pages.reporting.reportinghome')->with('countys',$countys);
    }
    
    public function county()
    {
	
		$countys = \DB::table('county')->get();
		return View('pages.reporting.facility')->with('countys',$countys);
	}
   
  /* public function subcounty($id)
	{
		$subcounty = \DB::table('subcounty')->where('county_id', $id)->get();
		return View('pages.reporting.facility')->with('subcounty',$subcounty);
    }
*/
	
    public function subcounty($id)
	{
		$subcounty = \DB::table('subcounty')->where('county_id', $id)->get();
		
		return $subcounty;
		 
    }
    
    public function getMentorshipSessions ($fromdate, $todate, $county, $subcounty, $facility ) {
        
        $sessions = \DB::table('mentorship_session as ms')
            ->join('mentor as mn', 'ms.mentor_id', '=', 'mn.mentor_id')
            ->join('mentee as me', 'ms.mentee_id', '=', 'me.mentee_id')
            ->join('person as p', 'mn.person_id', '=', 'p.person_id')
            ->join('person as pp', 'me.person_id', '=', 'pp.person_id')
            ->join('session_tool as st', 'ms.session_tool_id', '=', 'st.tool_id')
            ->join('facility as f', 'ms.facility', '=', 'f.id')
            ->select('ms.session_id', \DB::raw("concat_ws(' ', p.first_name, p.middle_name, p.last_name) as mentor"), \DB::raw("concat_ws(' ', pp.first_name, pp.middle_name, pp.last_name) as mentee"), 'ms.session_date as sessionDate', 'st.name as sessionName', 'f.name as facilityName', 'f.mfl_code as facilityMFL')
            ->get();
        
       return $sessions;
        
       /* $query = "select
        ms.session_id,
        concat_ws(' ', p.first_name, p.middle_name, p.last_name) as mentor,
        concat_ws(' ', pp.first_name, pp.middle_name, pp.last_name) as mentee,
        ms.session_date as sessionDate,
        st.name as sessionName,
        f.name as facilityName,
        f.mfl_code as facilityMFL
        from mentorship_session ms
        inner join mentor mn on ms.mentor_id = mn.mentor_id
        inner join mentee me on ms.mentee_id = me.mentee_id
        inner join person p on mn.person_id = p.person_id
        inner join person pp on me.person_id = pp.person_id
        inner join session_tool st on ms.session_tool_id = st.tool_id
        inner join facility f on ms.facility = f.id";*/
        
       // $mSessions = \DB::select($query);
        
       // return $mSessions;
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	
     public function facility($id)
	{
		$facility = \DB::table('facility')->where('subcounty_id', $id)->get();
		
		return $facility;
		 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function display(){
		
		$persons = \DB::table('person')->get();
		return View('pages.reporting.county')->with('persons',$persons);
	}
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function displaysessions()
    {
       $sessions = \DB::table('mentorship_session')
    	->join('session_tool', 'mentorship_session.session_tool_id', '=', 'session_tool.tool_id')->get();
		return View('pages.reporting.reports')->with('sessions',$sessions);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    function mentorshipQuery() {
        $query = "select
ms.session_id,
concat_ws(' ', p.first_name, p.middle_name, p.last_name) as mentor,
concat_ws(' ', pp.first_name, pp.middle_name, pp.last_name) as mentee,
ms.session_date as sessionDate,
st.name as sessionName,
f.name as facilityName,
f.mfl_code as facilityMFL
from mentorship_session ms
inner join mentor mn on ms.mentor_id = mn.mentor_id
inner join mentee me on ms.mentee_id = me.mentee_id
inner join person p on mn.person_id = p.person_id
inner join person pp on me.person_id = pp.person_id
inner join session_tool st on ms.session_tool_id = st.tool_id
inner join facility f on ms.facility = f.id";
    }
}
