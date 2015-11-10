<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\DataDictionary;
use DB;

class SystemSetUpController extends Controller
{
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
}
