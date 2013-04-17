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
   //private $mysql_database = "fff";
   //private $mysql_table = "messages_info";
   //private $mysql_host = "localhost";
   //private $mysql_username = "swyat";          
   //private $mysql_password = "15011992";  
    
   public function __construct($mysql_host, $mysql_username, $mysql_password, $mysql_database )
   {  
     if (!mysql_connect($mysql_host, $mysql_username, $mysql_password)) {
       throw new Exception('Connect error!');    
     }
       mysql_select_db($mysql_database);  
   }
   
    public function getData($id){
        }
}

