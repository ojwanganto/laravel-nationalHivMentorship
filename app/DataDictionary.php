<?php

namespace App;

class DataDictionary
{
    public static function clinicalIndicators () {
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
        return $clinical_indicators;
    }
    
    public static function counselingIndicators () {
        $counseling_indicators = array(
                ['name' => 'Relationship building', 'description' => 'Relationship building'],
                ['name' => 'Utilization of counselling skills', 'description' => 'Utilization of counselling skills'],  
                ['name' => 'Client assessment', 'description' => 'Client assessment'],
                ['name' => 'Addresses identified needs', 'description' => 'Addresses identified needs'],
                ['name' => 'Support client to choose best options', 'description' => 'Support client to choose best options'],
                ['name' => 'Developing an action plan', 'description' => 'Developing an action plan'],
                ['name' => 'Reassure, referral & appropriate linkages', 'description' => 'Reassure, referral & appropriate linkages'],

            );
        return $counseling_indicators;
    }
    
    public static function labIndicators () {
        $lab_indicators = array(
                ['name' => 'Correct use of commodity control tools', 'description' => 'Correct use of commodity control tools'],
                ['name' => 'Correct forecasting', 'description' => 'Correct forecasting'],  
                ['name' => 'Utilization of daily QC logs & results used for decision making', 'description' => 'Utilization of daily QC logs & results used for decision making'],
                ['name' => 'Bench decontamination', 'description' => 'Bench decontamination'],
                ['name' => 'Equipment maintenance', 'description' => 'Equipment maintenance'],
                ['name' => 'Quality control & quality assurance documentation', 'description' => 'Quality control & quality assurance documentation'],
                ['name' => 'Proper patient identification & review of request form', 'description' => 'Proper patient identification & review of request form'],
                ['name' => 'Patient welcomed & made comfortable', 'description' => 'Patient welcomed & made comfortable'],
                ['name' => 'Clarifies with patient what to expect', 'description' => 'Clarifies with patient what to expect'],
                ['name' => 'Use of available SOPs & job aids ', 'description' => 'Use of available SOPs & job aids '],
                ['name' => 'General sample collection preparation', 'description' => 'General sample collection preparation'],
                ['name' => 'Sample collection procedure', 'description' => 'Sample collection procedure'],
                ['name' => 'Referral of sample if required', 'description' => 'Referral of sample if required'],
                ['name' => 'Sample received & recorded', 'description' => 'Sample received & recorded'],
                ['name' => 'Sample preparation for testing', 'description' => 'Sample preparation for testing'],
                ['name' => 'Analytical SOPs & job aids used', 'description' => 'Analytical SOPs & job aids used'],
                ['name' => 'Testing procedures', 'description' => 'Testing procedures'],
                ['name' => 'Results interpretation', 'description' => 'Results interpretation'],
                ['name' => 'Results documentation', 'description' => 'Results documentation'],
                ['name' => 'Results TAT', 'description' => 'Results TAT'],
                ['name' => 'Results review', 'description' => 'Results review'],
                ['name' => 'Out of range and critical values results prioritized', 'description' => 'Out of range and critical values results prioritized'],
                ['name' => 'Results dispatch procedures followed', 'description' => 'Results dispatch procedures followed'],
                ['name' => 'Bio-safety protocols used', 'description' => 'Bio-safety protocols used'],
                ['name' => 'Correct waste segregation and disposal', 'description' => 'Correct waste segregation and disposal'],
                ['name' => 'Decontamination of biological waste before disposal', 'description' => 'Decontamination of biological waste before disposal'],

            );
        return $lab_indicators;
    }
    
    public static function nutritionIndicators () {
        $nutrition_indicators = array(
                ['name' => 'Anthropometric assessment', 'description' => 'Anthropometric assessment'],
                ['name' => 'Biochemical assessment', 'description' => 'Biochemical assessment'],  
                ['name' => 'Clinical assessment', 'description' => 'Clinical assessment'],
                ['name' => 'Dietary assessment', 'description' => 'Dietary assessment'],
                ['name' => 'Functional assessment', 'description' => 'Functional assessment'],
                ['name' => 'Classification of nutritional status', 'description' => 'Classification of nutritional status'],
                ['name' => 'Management of nutritional status', 'description' => 'Management of nutritional status'],
                ['name' => 'Uses the 8 critical nutrition practices', 'description' => 'Uses the 8 critical nutrition practices'],
                ['name' => 'Breastfeeding, replacement feeding, complementary feeding (AFASS)', 'description' => 'Breastfeeding, replacement feeding, complementary feeding (AFASS)'],
                ['name' => 'Therapeutic & supplementary feeds', 'description' => 'Therapeutic & supplementary feeds'],
                ['name' => 'Quantification, ordering, receiving, storage & dispensing', 'description' => 'Quantification, ordering, receiving, storage & dispensing'],
                ['name' => 'Documentation completeness, accuracy & timeliness', 'description' => 'Documentation completeness, accuracy & timeliness'],

            );
        return $nutrition_indicators;
    }
    
    public static function pharmacyIndicators() {
         $pharmacy_indicators = array(
                ['name' => 'Prescription processing: validation, checking for drug interactions, dose verification, appropriate formulations, appropriate quantities', 'description' => 'Prescription processing: validation, checking for drug interactions, dose verification, appropriate formulations, appropriate quantities'],
                ['name' => 'Good dispensing practices', 'description' => 'Good dispensing practices'],  
                ['name' => 'Medication use counselling', 'description' => 'Medication use counselling'],
                ['name' => 'Documentation: updating client records; updating consumption data', 'description' => 'Documentation: updating client records; updating consumption data'],
                ['name' => 'Detection of ADRs', 'description' => 'Detection of ADRs'],
                ['name' => 'Proper past medication history taking', 'description' => 'Proper past medication history taking'],
                ['name' => 'Management of ADRs', 'description' => 'Management of ADRs'],
                ['name' => 'Reporting: Good knowledge on reporting forms, how, where and when to report', 'description' => 'Reporting: Good knowledge on reporting forms, how, where and when to report'],
                ['name' => 'Quantification for resupply', 'description' => 'Quantification for resupply'],
                ['name' => 'Requesting commodities ', 'description' => 'Requesting commodities '],
                ['name' => 'Receiving commodities', 'description' => 'Receiving commodities'],
                ['name' => 'Storing commodities', 'description' => 'Storing commodities'],
                ['name' => 'Issuing commodities (inter and intra)', 'description' => 'Issuing commodities (inter and intra)'],

            );
        return $pharmacy_indicators;
    }
    
    public static function sessionTools() {
        $session_tools = array(
            ['name' => 'Clinical', 'description' => 'Clinical', 'cadre' => 'Clinical'],
            ['name' => 'Laboratory', 'description' => 'Laboratory', 'cadre' => 'Laboratory'],
            ['name' => 'Counseling', 'description' => 'Counseling', 'cadre' => 'Counseling'],
            ['name' => 'Nutrition', 'description' => 'Nutrition', 'cadre' => 'Nutrition'],
            ['name' => 'Pharmacy', 'description' => 'Pharmacy', 'cadre' => 'Pharmacy'],    
        );
        return $session_tools;
    }
}
