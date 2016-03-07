<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacilityList extends \Maatwebsite\Excel\Files\ExcelFile {

    public function getFile() {
        return storage_path('exports') . '/eHealthKenyaFacilities.xlsx';
    }

    public function getFilters() {
        return [
            'chunk'
        ];
    }

}
