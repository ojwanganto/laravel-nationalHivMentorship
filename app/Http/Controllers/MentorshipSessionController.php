<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\MentorshipSession;
use App\MentorshipSessionScore;

class MentorshipSessionController extends Controller
{
   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   /* public function __construct()
    {
        $this->middleware('auth');
    }*/
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mSessions = MentorshipSession::all();
        return view('pages.session.sessionlist', compact('mSessions', $mSessions));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.session.paginatedsession');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mSession = new MentorshipSession();
        $mSession -> mentor_id = $request->mentor;
        $mSession -> mentee_id = $request->mentee;
        $mSession -> session_tool_id = $request->tool_id;
        $mSession -> facility = "Nairobi";
        $mSession -> save();
        $sessionId = $mSession->session_id;
      
        $clinicalindicators = array(
            'ind_1','ind_2','ind_3','ind_4','ind_5','ind_6','ind_7','ind_8','ind_9','ind_10','ind_11','ind_12','ind_13','ind_14',         'ind_15','ind_16','ind_17','ind_18','ind_19','ind_20','ind_21'
            
        );

        foreach($clinicalindicators as $ind) {
            
            $indNo = explode("_", $ind)[1];
            $indScore = $request->$ind;
            $commentString = 'comm_'.$indNo;
            $comment = $request->$commentString;
            
            $indicatorScore = new MentorshipSessionScore();
            $indicatorScore -> session_id = $sessionId;
            $indicatorScore -> indicator_id = $indNo;
            $indicatorScore -> score = $indScore;
            $indicatorScore -> comment = $comment;
            $indicatorScore -> save();

        }
        return redirect('session-list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mentorshipSession = MentorshipSession::find($id);
        return view('pages.session.sessiontoolview', compact('mentorshipSession', $mentorshipSession));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    
    /*
        function that picks indicators and comments
    */
    private function processClinicalForm () {
        $indicatorsAndComments = array(
            'mentor',
            'mentee',
            'ind_1',
            'ind_2',
            'ind_3',
            'ind_4',
            'ind_5',
            'comm_1',
            'comm_2',
            'comm_3',
            'comm_4',
            'comm_5',
            'm_date'
        );
        return $indicatorsAndComments;
    }
}
