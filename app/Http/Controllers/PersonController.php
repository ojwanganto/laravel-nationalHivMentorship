<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\PersonRequest;
use App\Http\Controllers\Controller;
use App\Person;
#use Illuminate\Support\Facades\Auth;
class PersonController extends Controller
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
         $persons = Person::all();
         #var_dump($persons);
        //return view('pages.person.personlist', @persons); //redirect('/person-create'); 
        return view('pages.person.personlist', compact('persons'));
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
        return redirect('person-list');
       
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
