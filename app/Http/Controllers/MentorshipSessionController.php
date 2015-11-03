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
        return view('pages.session.paginatedsession');
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
        $mSession = new MentorshipSession();
        $mSession -> mentor_id = 1;
        $mSession -> mentee_id = 1;
        $mSession -> session_tool_id = 1;
        $mSession -> facility = "Nairobi";
        $mSession -> save();
        $sessionId = $mSession->session_id;
      
        $indicators = array(
            'ind_1',
            'ind_2',
            'ind_3',
            'ind_4',
            'ind_5'
        );

        foreach($indicators as $ind) {
            
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
           
            echo $ind.' :'.$request->$ind;
            echo " Comment: ". $comment ."<br/>";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
