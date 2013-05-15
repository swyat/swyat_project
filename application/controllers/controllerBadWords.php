<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of controllerBadWords
 *
 * @author Swyat <swyatyxa@i.ua>
 */
include 'application/Validators.php';
class ControllerBadWords extends Validators {
    
  
    public function action_SeachBadWords(){
    $masBadWords = array();   
    $this -> model = new ModelBadWords();
       $masBadWords = $this -> model -> getMasBadWords(); 
       $this -> changeBadWords($masBadWords);
}
}

?>
