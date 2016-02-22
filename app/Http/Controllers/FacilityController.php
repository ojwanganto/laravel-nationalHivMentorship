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
        

        return View('pages.reporting.facility');
    }
    
    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  
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
	}
}