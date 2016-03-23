<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\ServiceProvider;
use App\DataDictionary;
use Input;
use Validator;
use Redirect;
use Session;
use Storage;
class ResourceCenterController extends Controller
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
        return view('pages.resource-center.resource-center');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function uploads()
	{
        return view('pages.resource-center.uploads');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function uploadGuideline() {
		
		
        return view('pages.resource-center.guideline');
        
    }
	public function uploadOthers() {
	
        return view('pages.resource-center.others');
        
    }
	public function uploadManuals() {
        
		return view('pages.resource-center.manuals');
	}
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
   public function postFile () {
        $file = array('guidelinefile' => Input::file('guidelinefile'));
		$docType = Input::get('files');
		  echo $docType;
        $rules = array('guidelinefile' => 'required',); 
        $validator = Validator::make($file, $rules);
        if ($validator->fails()) {
             return redirect('/files-upload')->withErrors([
            'guidelinefile' => 'Please upload a valid file. Try again?',
        ]);
        }
        else {
            if (Input::file('guidelinefile')->isValid()) {
					 if ($docType==1) {
						$destinationPath = storage_path('exports/usermanual');// upload path

					 }
					else if ($docType==2) {
						$destinationPath = storage_path('exports/guidelines');// upload path

					 }
					else if ($docType==3) {
						$destinationPath = storage_path('exports/others');// upload path

					 }
					
						$extension = Input::file('guidelinefile')->getClientOriginalExtension(); // getting image extension
						$fileName = Input::file('guidelinefile')->getClientOriginalName();
						Input::file('guidelinefile')->move($destinationPath, $fileName); 
						Session::flash('success', 'File Uploaded successfully'); 
						return redirect('/files-upload');
					
            }
            else {
                Session::flash('error', 'uploaded file is not valid');
                return redirect('/files-upload');
            }
        }
		  
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
