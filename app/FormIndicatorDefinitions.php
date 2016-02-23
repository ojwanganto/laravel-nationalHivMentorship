<?php

namespace App;

class FormIndicatorDefinitions
{
    
    public static function clinicalIndicators () {
        $clinicalindicators = array(
            'ind_1','ind_2','ind_3','ind_4','ind_5','ind_6','ind_7','ind_8','ind_9','ind_10','ind_11','ind_12','ind_13','ind_14',         'ind_15','ind_16','ind_17','ind_18','ind_19','ind_20','ind_21'
            
        );
        return $clinicalindicators;
    }
    
    public static function counselingIndicators () {
         $counselingindicators = array(
            'ind_1','ind_2','ind_3','ind_4','ind_22','ind_23','ind_24','ind_25','ind_26','ind_27','ind_28'
            
        );
        return $counselingindicators;
    }
    
    public static function laboratoryIndicators () {
        $laboratoryindicators = array(
            'ind_1','ind_2','ind_3','ind_4','ind_29','ind_30','ind_31','ind_32','ind_33','ind_34','ind_35','ind_36','ind_37',         'ind_38','ind_39','ind_40','ind_41','ind_42','ind_43','ind_44','ind_45','ind_46','ind_47','ind_48','ind_49','ind_50','ind_51','ind_52','ind_53','ind_54'      
        );
        return $laboratoryindicators;
    }
    
    public static function pharmacyIndicators () {
         $pharmacyindicators = array(
            'ind_1','ind_2','ind_3','ind_4','ind_67','ind_68','ind_69','ind_70','ind_71','ind_72','ind_73','ind_74','ind_75'
            ,'ind_76','ind_77','ind_78','ind_79'    
        );
        return $pharmacyindicators;
    }
    
    public static function nutritionIndicators () {
         $nutritionindicators = array(
            'ind_1','ind_2','ind_3','ind_4','ind_55','ind_56','ind_57','ind_58','ind_59','ind_60','ind_61','ind_62','ind_63',
            'ind_64','ind_65','ind_66'
            
        );
        return $nutritionindicators;
    }  
       
}
