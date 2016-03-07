<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\FacilityList;

class FacilityListHandler implements \Maatwebsite\Excel\Files\ImportHandler {

    public function handle(FacilityList $import) {
        // get the results
        $results = $import->get();
        
        // Loop through all sheets
        $results->each(function($sheet) {

        // Loop through all rows
            $sheet->take(20);
            $sheet->each(function($row) {
               echo $row->province. '<br/>';
            });

        });
    }
}
