<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\PersonRequest;
use App\Http\Controllers\Controller;
use Input;
class FacilityController extends Controller
{
   
    
    
    public function index()
    {
        

        return View('clinical');
    }
    
    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function autocomplete(Request $request)
    {
        $term = $request->m_facility;
        $data = facility::where('name','LIKE','%' .$term. '%')
            ->take(3)
            ->get();
        $results = array();
        foreach($data as $key-> $v){
            $results[] = ['mfl_code'->$v->mfl_code, 'value'->$v->name];
        }
        
        return response()->json($result);
    }

   
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