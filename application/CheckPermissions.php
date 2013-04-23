<?php

/*
 * Файл із класом CheckPermissions
 */

/**
 * Клас доступу до функціоналу guests-book
 *
 * @author swyat <swyatyxa@i.ua>
 */
    class CheckPermissions  {
 
        private $byDefoultPermissions = "guest";
        
 /**
  * - Конструктор класу @link CheckPermissions. Приймає параметром - ролі доступу.
  * @param string $permissions - Роль доступу ('admin','guest').
  */       
        public function __construct($permissions) {
            $this -> byDefoultPermissions = $permissions;
            session_start();
            $this ->validPermissions($permissions);
        }
  /**
   *    Функція перевірки існування сесії @link $_SESSION["permissions"] 
   * та перевірки рівності її значення певній ролі доступу.
   */      
       private function validPermissions(){
           $pattern = $_SESSION["permissions"]; 
           if (!isset($pattern) && ($pattern !== $this -> byDefoultPermissions)){
               new ControllerError("You don't have access!!! Contacting to admin."); 
               exit();
           }
       }
  
}

?>
