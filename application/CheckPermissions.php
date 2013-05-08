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
 
<<<<<<< HEAD
        private $byDefoultPermission = "guest";
        private $masPermissions = array();
=======
        private $byDefoultPermissions = "guest";
>>>>>>> 6428d6e0b38d1e5f99710c52d0a8a741d5a0e5c2
        
 /**
  * - Конструктор класу @link CheckPermissions. Приймає параметром - ролі доступу.
  * @param string $permissions - Роль доступу ('admin','guest').
  */       
        public function __construct($permissions) {
<<<<<<< HEAD
            if (is_array($permissions)){
                $this -> masPermissions = $permissions;
                //echo "permissions is masiv";
            }
            else{
                if (!is_string($permissions)){
                    new ControllerError("Check your parameters in function __construct()");
                    exit();
                }
                  $this -> byDefoultPermission = $permissions;
                  //echo "permissions is string";
            }
            session_start();
            $this ->validPermissions(); 
                    
                
        }
        
=======
            $this -> byDefoultPermissions = $permissions;
            session_start();
            $this ->validPermissions($permissions);
        }
>>>>>>> 6428d6e0b38d1e5f99710c52d0a8a741d5a0e5c2
  /**
   *    Функція перевірки існування сесії @link $_SESSION["permissions"] 
   * та перевірки рівності її значення певній ролі доступу.
   */      
       private function validPermissions(){
<<<<<<< HEAD
            if (isset($_SESSION["permissions"])){
                   if (!empty($this -> masPermissions)){
                    print_r($this -> masPermissions);
                        if (!$this -> arraySeach($_SESSION["permissions"], $this -> masPermissions)){
                            $this -> ifNoAccess();
                        }
                }
                else{    
                    if ($_SESSION["permissions"] !== $this -> byDefoultPermission){
                        $this -> ifNoAccess();
                    }
                }
            }  
            else{
                $this -> ifNoAccess();
            }
      }
      
      private function ifNoAccess(){
          new ControllerError("You don't have access!!! Contact to webmaster."); 
          exit();
      }
      public function arraySeach ($value, $array){
          foreach ($array as $val){
              if ($val === $value){
                  return TRUE;
              }
          }
          
          
      }
}
=======
           $pattern = $_SESSION["permissions"]; 
           if (!isset($pattern) && ($pattern !== $this -> byDefoultPermissions)){
               new ControllerError("You don't have access!!! Contacting to admin."); 
               exit();
           }
       }
  
}

?>
>>>>>>> 6428d6e0b38d1e5f99710c52d0a8a741d5a0e5c2
