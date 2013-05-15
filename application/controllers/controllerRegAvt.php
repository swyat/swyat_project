<?php

/*
 * Контроллер авторизації, реєстрації
 */

/**
 * Виконує фукнції реєстрації нових користувачів та іх подальшу авторизацію.
 *
 * @author swyat <swyatyxa@i.ua>
 */
class ControllerRegAvt extends Controller  {
    
    private $mysqlTable = "korustyvach_info";
  
/**
 *  Конструктор ControllerRegAvt
 */    
    public function __construct(){
        $this ->view = new View();
        session_start();
    }      
/**
 *  Функція @link action_getRegistrstionForm() - перекидає користувача на форму реєстрації 
 */
    public function action_getRegistrstionForm(){
        $this -> view -> generate('RegistView', $data = NULL);  
    }
/**
 * Функція @link action_getEnterForm() - перекидає користувача на форму авторизації    
 */
     public function action_getEnterForm(){
        $this -> view -> generate('EnterView', $data = NULL);  
    }

/**
 * Функція @link action_registration() - створює нового користувача
 */
    public function action_registration(){
      $login = $_POST['login'];
      $password = $_POST['password'];
      $password2 = $_POST['password2'];
    
        $this -> model = new ModelRegAvt();
        $error_mes = $this -> model -> validatorRegAvt($login, $password, $this -> mysqlTable, $password2);

        if($error_mes['login']==1){
            
             $this -> model -> newUser($login, $password, $this -> mysqlTable);
        }             
            $this -> view -> generate('RegistView', $data = $error_mes);
    }
 
/**
 * Функція @link action_avtorization() - авторизує користувача, якщо той був зареєстрований 
 */
    public function action_avtorization(){
        
      $login = $_POST['login'];
      $password = $_POST['password']; 
     
      $this -> model = new ModelRegAvt();
      $errorMes = $this -> model -> validatorRegAvt($login, $password, $this -> mysqlTable);
      if ($errorMes['login'] === TRUE){
            
         $this -> model -> generateCookie($login, $password, $this -> mysqlTable);
         $permissions = $this -> model -> getPermission($login, $password, $this -> mysqlTable);
         $_SESSION["login"] = $login;
         $_SESSION["permissions"] =  $permissions;
      }
      $this -> view -> generate('EnterView', $data = $errorMes);
      
    }
/**
 * Функція @link action_userExit() - розавторизовує користувача, що був авторизований 
 */   
    public function action_userExit(){
        // echo $_COOKIE['hash'];
         setcookie("hash"," ", time()+60*60*24*30, '/');
         echo $_COOKIE['hash'];
         
         unset($_SESSION["login"]);
         unset($_SESSION["permissions"]);
         session_destroy();
         header ("Location: http://localhost/project/ ");
    }    
}
