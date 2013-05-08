<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Validator
 *
 * @author Swyat <swyatyxa@i.ua> 
 */

class Validators {
    public function validTextDec($text) {
        if (preg_match("/^[a-zA-Z0-9]+$/", $text)) {
            return TRUE;
        } 
        else {
            return FALSE;
        }
    }

    public function validMinMaxLength($text, $min, $max) {
        if (strlen($text) > $min && strlen($text) < $max){
            return TRUE;
        } 
        else {
            return FALSE;
        }  
    }
}
include 'core/model.php';
include 'models/modelRegAvt.php';

$ob = new ModelRegAvt();
$stroka = $_POST['data']; 
        
        trim($stroka);
        $masiv = explode(" ", $stroka);       
        foreach ($masiv as $slovo){  
            if ($ob -> twinSeach('badWord', $slovo, 'badwordstable')){

                $masiv['error'] = "Your badword - ".$slovo." changed xxxxxx";
                $key = array_search($slovo, $masiv);  
                $masiv[$key] = " xxxxx ";

                $str = json_encode($masiv);
            echo "($str)";
            }   
       }  