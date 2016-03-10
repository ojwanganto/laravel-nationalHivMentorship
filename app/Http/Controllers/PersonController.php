<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\PersonRequest;
use App\Http\Controllers\Controller;
use App\Person;
use App\Mentor;
use App\Mentee;
#use Illuminate\Support\Facades\Auth;
class PersonController extends Controller
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
         $persons = Person::all();
        return view('pages.person.personhome', compact('persons'));
    }
    
    /**
    * returns only mentors
    */
    public function mentors() {
        $mentors = Mentor::all();
        return view('pages.person.mentorhome', compact('mentors'));
    }
    
    /**
    * returns only mentees
    */
    public function mentees() {
        $mentees = Mentee::all();
        return view('pages.person.menteehome', compact('mentees'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.person.createperson');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonRequest $request)
    {
        $person = new Person();
        $person -> first_name = $request->first_name;
        $person -> middle_name = $request->middle_name;
        $person -> last_name = $request->last_name;
        $person -> gender = $request->gender;
        $person -> cadre = $request->cadre;
        $person -> email = $request->email;
        $person -> phone = $request->phone;
        $person -> facility = $request->facility;
        $person -> save(); 
        $personId = $person->person_id;
        $pRole = $request->role;
        
        if ($pRole == 1) {
            $mentor = new Mentor();
            $mentor->person_id = $personId;
            $mentor->save();
        } else {
            $mentee = new Mentee();
            $mentee->person_id = $personId;
            $mentee->save();
        }
        return redirect('person-home');
       
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
}
