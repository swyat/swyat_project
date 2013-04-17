<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Клас Model є батьком всіх модельок, що його наслідують 
 *
 * @author Swyat <swyatyxa@i.ua>
 */
class Model {
    private $mysqlDatabase = "fff";
    private $mysqlHost = "localhost";
    private $mysqlUsername = "swyat";          
    private $mysqlPassword = "15011992";
    
   public function __construct()
   {  
     if (!mysql_connect($this -> mysqlHost, $this -> mysqlUsername, $this -> mysqlPassword)) {
       new controllerError('Connect error!');    
     }
       mysql_select_db($this -> mysqlDatabase);  
   }
    public function getData($id){
        }
}

