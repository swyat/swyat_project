<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Клас із функціями перевірки рівності тексту певному формату
 *
 * @author Swyat <swyatyxa@i.ua> 
 */

class Validators {
    /**
     * @link validTextDec($text) - Функція пошуку відповідності тексту 
     * цьому формату [a-zA-Z0-9]
     * @param string $text - Текст що підлягає порівнянню
     * @return boolean - Повертаэ true, при  рівності тексту цьому формату [a-zA-Z0-9]
     */
    public function validTextDec($text) {
        if (preg_match("/^[a-zA-Z0-9]+$/", $text)) {
            return TRUE;
        } 
        else {
            return FALSE;
        }
    }
    /**
     * @link validTextDec($text) - Функція пошуку відповідності тексту 
     * цьому формату min<текст<max
     * @param string $text - Текст що підлягає порівнянню
     * @param int $min - Мінімальна довжина тексту
     * @param int $max - Максимальна довжина тексту
     * @return boolean - Повертаэ true, при  рівності тексту цьому формату min<текст<max
     */
    public function validMinMaxLength($text, $min, $max) {
        if (strlen($text) > $min && strlen($text) < $max){
            return TRUE;
        } 
        else {
            return FALSE;
        }  
    }

 /**
  * @link changeBadWords($masBadWords) Функція заміни поганого слова на ххххх
  * @param array $masBadWords - Масив із текстом, що ппідлягає заміні поганого слова на ххххх
  * 
  */   
 public function changeBadWords($masBadWords){
  
    $stroka = $_POST['data']; 
    $flag = 0;
    trim($stroka);
        $masiv = explode(" ", $stroka);  
      
        foreach ($masiv as $slovo){  
            if (in_array($slovo, $masBadWords)){
      
                $key = array_search($slovo, $masiv);  
                $masiv[$key] = " xxxxx ";
                $flag = 1;
            }
        }
                if ($flag){
                    $masiv['error'] = "Your bad word was replaced by xxxxx";
                }
                $str = json_encode($masiv);
                echo "($str)";
              
       }  
}