<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\MentorshipSession;
use App\Mentor;
use App\Mentee;
use App\MentorshipSessionScore;
use App\FormIndicatorDefinitions;

class MentorshipSessionController extends Controller
{
   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mSessions = MentorshipSession::all();
        foreach ($mSessions as $sess) {
            $facility = \DB::table('facility')->where('id', $sess->facility)->first();
            $facility = $facility->mfl_code . ": ".$facility->name;
            $sess->facility = $facility;
        }
        return view('pages.session.sessionhome', compact('mSessions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($tool) {
        
        $mentors = Mentor::all();
        $mentees = Mentee::all();
		$counties = \DB::table('county')->get();
        if ($tool==1) {
            return view('pages.session.tools.clinical', compact('mentors','mentees','counties'));
        } else if ($tool==2) {
            return view('pages.session.tools.laboratory', compact('mentors','mentees','counties'));
        } else if ($tool==3) {
            return view('pages.session.tools.counseling', compact('mentors','mentees','counties'));
        } else if ($tool==4) {
            return view('pages.session.tools.nutrition', compact('mentors','mentees','counties'));
        } else if ($tool==5) {
            return view('pages.session.tools.pharmacy', compact('mentors','mentees','counties'));
        } else {
            return redirect('mentorship-session');
        }
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
        $mSession -> session_date = date("Y-m-d", strtotime($request->m_date));
        $mSession -> facility = $request->m_facility;
        $mSession -> self_reported_gap = $request->self_reported_gap;
        $mSession -> previous_session_gap = $request->previous_session_gap;
        $mSession -> other_gap = $request->other_gap;
        $mSession -> session_objectives = $request->session_objectives;
        $mSession -> mentee_strength = $request->mentee_strength;
        $mSession -> mentee_improvement_areas = $request->mentee_improvement_areas;
        $mSession -> session_comments = $request->session_comments;
        $mSession -> cme_topic = $request->cme_topic;
        $mSession -> cme_presenter = $request->cme_presenter;
        $mSession -> mdt_participation = $request->mdt_participation;
        $mSession -> session_score = $request->totalScore;
        $mSession -> save();
        $sessionId = $mSession->session_id;

        switch($request->tool_id) {
            case 1: 
                $formIndicators = FormIndicatorDefinitions::clinicalIndicators();
            break;
            case 2: 
                $formIndicators = FormIndicatorDefinitions::laboratoryIndicators();
            break;
            case 3: 
                $formIndicators = FormIndicatorDefinitions::counselingIndicators();
            break;
            case 4: 
                $formIndicators = FormIndicatorDefinitions::nutritionIndicators();
            break;
            case 5: 
                $formIndicators = FormIndicatorDefinitions::pharmacyIndicators();
            break;
        }
        
        foreach($formIndicators as $ind) {
            
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
        return redirect('mentorship-session');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)  {
        
        
        $mentorshipSession = MentorshipSession::find($id);
        $sessionDate = $mentorshipSession->session_date;
        $sessionTool = $mentorshipSession->sessionTool->name;
        $sessionToolId = $mentorshipSession->sessionTool->tool_id;
        $mentor = $mentorshipSession->mentor;//->person->first_name ." ".$mentorshipSession->mentor->person->last_name;
        $mentee = $mentorshipSession->mentee;//->person->first_name ." ".$mentorshipSession->mentee->person->last_name;
        $facility = \DB::table('facility')->where('id', $mentorshipSession->facility)->first();
        $facility = $facility->mfl_code . ": ".$facility->name;
        $selfReportedGap = $mentorshipSession->self_reported_gap;
        $previousSessGap = $mentorshipSession->previous_session_gap;
        $otherGap = $mentorshipSession->other_gap;
        $sessionObjectives = $mentorshipSession->session_objectives;
        $mSessionId = $id;
        $menteeStrength = $mentorshipSession->mentee_strength;
        $improvementAreas = $mentorshipSession->mentee_improvement_areas;
        $comments = $mentorshipSession->session_comments;
        $cmeTopic = $mentorshipSession->cme_topic;
        $cmePresenter = $mentorshipSession->cme_presenter;
        $mdtParticipation = $mentorshipSession->mdt_participation;
        $totalScore = $mentorshipSession->session_score;
        
        //create array to contain scores
        $sessionScores = $mentorshipSession->sessionScore;
        $sessionScore = array();
        foreach ($sessionScores as $score) {
           
            $ind = 'ind_'.$score->indicator_id;
            $comm = 'comm_'.$score->indicator_id;
            $indScore = $score->score;
            $indComment = $score->comment;
            $sessionScore["$ind"] = $indScore;
            $sessionScore["$comm"] = $indComment;
        }
        
        $mentors = Mentor::all();
        $mentees = Mentee::all();
		$counties = \DB::table('county')->get();
        
        switch ($sessionToolId) {
            case 1:
                $viewPage = 'pages.session.tools.viewclinical';
                break;
            case 2:
                $viewPage = 'pages.session.tools.viewlaboratory';
                break;
            case 3:
                $viewPage = 'pages.session.tools.viewcounseling';
                break;
            case 4:
                $viewPage = 'pages.session.tools.viewnutrition';
                break;
            case 5:
                $viewPage = 'pages.session.tools.viewpharmacy';
                break;
        }

        return view($viewPage, 
                    compact('mSessionId','sessionDate', 'sessionTool', 'mentor', 'mentee', 'facility', 'sessionScore','selfReportedGap', 'previousSessGap', 'otherGap', 'sessionObjectives', 'menteeStrength', 'improvementAreas', 'comments','cmeTopic','cmePresenter','mdtParticipation','totalScore','mentors','mentees','counties'));
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function edit(Request $request) {
            
        $m_session_id = $request->m_session_id;        
        $mSession = MentorshipSession::find($m_session_id);
        $mSession -> mentor_id = $request->mentor;
        $mSession -> mentee_id = $request->mentee;
        $mSession -> session_date = date("Y-m-d", strtotime($request->m_date));
        $mSession -> facility = $request->m_facility;
        $mSession -> self_reported_gap = $request->self_reported_gap;
        $mSession -> previous_session_gap = $request->previous_session_gap;
        $mSession -> other_gap = $request->other_gap;
        $mSession -> session_objectives = $request->session_objectives;
        $mSession -> mentee_strength = $request->mentee_strength;
        $mSession -> mentee_improvement_areas = $request->mentee_improvement_areas;
        $mSession -> session_comments = $request->session_comments;
        $mSession -> cme_topic = $request->cme_topic;
        $mSession -> cme_presenter = $request->cme_presenter;
        $mSession -> mdt_participation = $request->mdt_participation;
        $mSession -> session_score = $request->totalScore;
        $mSession -> save();
        $sessionTool = $mSession->session_tool_id;

        switch($sessionTool) {
            case 1: 
                $formIndicators = FormIndicatorDefinitions::clinicalIndicators();
            break;
            case 2: 
                $formIndicators = FormIndicatorDefinitions::laboratoryIndicators();
            break;
            case 3: 
                $formIndicators = FormIndicatorDefinitions::counselingIndicators();
            break;
            case 4: 
                $formIndicators = FormIndicatorDefinitions::nutritionIndicators();
            break;
            case 5: 
                $formIndicators = FormIndicatorDefinitions::pharmacyIndicators();
            break;
        }
        
        foreach($formIndicators as $ind) {
            
            $indNo = explode("_", $ind)[1];
            $indScore = $request->$ind;
            $commentString = 'comm_'.$indNo;
            $comment = $request->$commentString;

            $indicatorScore = MentorshipSessionScore::where(function($query) use ($m_session_id,$indNo) {
                $query->where('session_id', '=', $m_session_id)
                      ->where('indicator_id', '=', $indNo);
            })->first();
           
            $indicatorScore -> score = $indScore;
            $indicatorScore -> comment = $comment;
            $indicatorScore -> save();

        }
        return redirect('mentorship-session');
        
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
}
