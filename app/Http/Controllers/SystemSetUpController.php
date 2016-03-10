<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\DataDictionary;
use App\FacilityList;
use App\County;
use App\SubCounty;
use App\Facility;
use DB;
use Input;
use Validator;
use Redirect;
use Session;

class SystemSetUpController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function setUp() {
        /*
            Clear session_indicator table and populate it with new data
        */
        DB::table('session_indicator')->delete();
        DB::table('session_tool')->delete();
        
        $clinical_indicators = DataDictionary::clinicalIndicators();
        $lab_indicators = DataDictionary::labIndicators();
        $counseling_indicators = DataDictionary::counselingIndicators();
        $nutrition_indicators = DataDictionary::nutritionIndicators();
        $pharmacy_indicators = DataDictionary::pharmacyIndicators();
        $mentorship_tools = DataDictionary::sessionTools();
        
        DB::table('session_indicator')->insert($clinical_indicators);
        DB::table('session_indicator')->insert($counseling_indicators);
        DB::table('session_indicator')->insert($lab_indicators);
        DB::table('session_indicator')->insert($nutrition_indicators);
        DB::table('session_indicator')->insert($pharmacy_indicators);
        DB::table('session_tool')->insert($mentorship_tools);
        
        return redirect('indicator-list');
    }
    
    /**
    * A method that uploads facility list
    *
    */
    
    public function importFacilityFile () {
        return view('pages.setup.facilityImport');
        
    }
    
    public function postFacilityFile () {
        $file = array('image' => Input::file('image'));
        $rules = array('image' => 'required',); 
        $validator = Validator::make($file, $rules);
        if ($validator->fails()) {
             return redirect('/facility-upload')->withErrors([
            'image' => 'Please upload a valid file. Try again?',
        ]);
        }
        else {
            if (Input::file('image')->isValid()) {
                $destinationPath = storage_path('exports'); // upload path
                $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
                $fileName = Input::file('image')->getClientOriginalName();
                Input::file('image')->move($destinationPath, $fileName); 
                Session::flash('success', 'File Uploaded successfully'); 
                return redirect('/facility-upload');
            }
            else {
                Session::flash('error', 'uploaded file is not valid');
                return redirect('/facility-upload');
            }
        }
    }
    
    public function processFacilityFile () {
        ini_set('max_execution_time', 300); 
                
        $filePath = storage_path('exports') . '/eHealthKenyaFacilities.xlsx';
        \Excel::load($filePath, function($reader) {
            $provinces = [];
            $counties = [];
            $subcounties = [];
            $facilities = [];
            
            $results = $reader->get();

            foreach($results as $sheet) {

                foreach($sheet as $row) {
                    
                    
                    $mfl = $row->facility_code;
                    $fname = $row->facility_name;
                    $province = $row->province;
                    $county = $row->county;
                    $subcounty = $row->district;
                    
                    $facilityarr  = ['mfl'=>$mfl, 'facilityname'=>$fname, 'subcounty'=>$subcounty];
                    $subcountyarr = ['subcounty'=>$subcounty, 'county'=>$county];
                    
                    
                    if (!in_array($county, $counties)) {
                        $counties[] = $county;
                    }
                    
                    if (!in_array($subcountyarr, $subcounties)) {
                        $subcounties[] = $subcountyarr;
                    }
                    
                    if (!in_array($facilityarr, $facilities)) {
                        $facilities[] = $facilityarr;
                    }
                }
            
            }
            //insert counties
            //alter table county auto_increment=1;
            foreach ($counties as $county) {
                $countyModel = new County();
                $countyModel->name = $county;
                $countyModel->save();
            }
            $dbCounties = County::all();
                        
            foreach ($subcounties as $sc) {
                $scname = $sc['subcounty'];
                $countyName = $sc['county'];
                $countyId =0;
                foreach ($dbCounties as $dbs) {
                    if ($countyName == $dbs->name) { 
                        $countyId = $dbs->id;
                        break;
                    }
                     //echo $dbs->id.' '. $dbs->name.'<br/>';
                }
                
                $newSubCounty = new SubCounty();
                $newSubCounty->name = $scname;
                $newSubCounty->county_id = $countyId;
                $newSubCounty->save();
                                
            }
            
            $dbSubCounties = SubCounty::all();
             $facilityarr  = ['mfl'=>$mfl, 'facilityname'=>$fname, 'subcounty'=>$subcounty];           
            foreach ($facilities as $f) {
                $mfl = $f['mfl'];
                $fname = $f['facilityname'];
                $scName = $f['subcounty'];
                $scountyId =0;
                foreach ($dbSubCounties as $dbsc) {
                    if ($scName == $dbsc->name) { 
                        $scountyId = $dbsc->id;
                        break;
                    }
                     
                }
                
                $newFacility = new Facility();
                $newFacility->mfl_code = $mfl;
                $newFacility->subcounty_id = $scountyId;
                $newFacility->name = $fname;
                $newFacility->save();
                                
            }
            
        });
        Session::flash('success', 'uploaded file is not valid');
        return redirect('/facility-upload');
    }
}
