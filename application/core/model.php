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
    private $mysql_database = "fff";
    private $mysql_host = "localhost";
    private $mysql_username = "swyat";          
    private $mysql_password = "15011992";
    
   public function __construct()
   {  
     if (!mysql_connect($this -> mysql_host, $this -> mysql_username, $this -> mysql_password)) {
       new controllerError('Connect error!');    
     }
       mysql_select_db($this -> mysql_database);  
   }
    public function getData($id){
        }
}

