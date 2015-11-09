<?php

use Illuminate\Database\Seeder;

class MentorshipIndicatorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('session_indicator')->delete();
 
        $clinical_indicators = array(
            ['name' => 'Appearance & demeanor', 'description' => 'Appearance & demeanor'],
            ['name' => 'Patient-centered', 'description' => 'Patient-centered'],
            ['name' => 'Time management', 'description' => 'Time management'],
            ['name' => 'Communication', 'description' => 'Communication'],
            ['name' => 'Review of patient file', 'description' => 'Review of patient file'],
            ['name' => 'Vitals Recording, interpreting and Triage', 'description' => 'Vitals Recording, interpreting and Triage'],  
            ['name' => 'Appropriate history taking', 'description' => 'Appropriate history taking'],
            ['name' => 'Physical exam (routine & targeted)', 'description' => 'Physical exam (routine & targeted)'],
            ['name' => 'Diagnosis/differential diagnosis (based on history, physical, investigations); WHO staging', 'description' => 'Diagnosis/differential diagnosis (based on history, physical, investigations); WHO staging'],
            ['name' => 'Correct management of OIs', 'description' => 'Correct management of OIs'],
            ['name' => 'TB screening, diagnosis, treatment & prevention', 'description' => 'TB screening, diagnosis, treatment & prevention'],
            ['name' => 'Decision-making on ART eligibility', 'description' => 'Decision-making on ART eligibility'],
            ['name' => 'Correct prescription of ARVs', 'description' => 'Correct prescription of ARVs'],
            ['name' => 'Monitoring of ARV therapy', 'description' => 'Monitoring of ARV therapy'],
            ['name' => 'Identification & management of treatment failure', 'description' => 'Identification & management of treatment failure'],
            ['name' => 'Identification & management of ARV ADRs', 'description' => 'Identification & management of ARV ADRs'],
            ['name' => 'Correct use of prophylactic medications', 'description' => 'Correct use of prophylactic medications'],
            ['name' => 'Assessment of adherence', 'description' => 'Assessment of adherence'],
            ['name' => 'Prevention messages (PHDP)', 'description' => 'Prevention messages (PHDP)'],
            ['name' => 'Proper documentation', 'description' => 'Proper documentation'],
            ['name' => 'Referrals & linkages to other services', 'description' => 'Referrals & linkages to other services'],
        );

        DB::table('session_indicator')->insert($clinical_indicators);
    }
}


