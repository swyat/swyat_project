<?php

/*
 * Контроллер авторизації, реєстрації
 */

/**
 * Виконує фукнції реєстрації нових користувачів та іх подальшу авторизацію.
 *
 * @author swyat <swyatyxa@i.ua>
 */
class Controller_reg_avt extends Controller  {
    private $mysql_database = "fff";
    private $mysql_table = "korustyvach_info";
    private $mysql_host = "localhost";
    private $mysql_username = "swyat";          
    private $mysql_password = "15011992";
    
    public function __construct(){
        $this ->view = new View();
        session_start();
    }      
/**
 *  Функція @link action_getRegistrstionForm() - перекидає користувача на форму реєстрації 
 */
    public function action_getRegistrstionForm(){
        $this -> view -> generate('Regist_view', 'Template_view', $data = NULL);  
    }
/**
 * Функція @link action_getEnterForm() - перекидає користувача на форму авторизації    
 */
     public function action_getEnterForm(){
        $this -> view -> generate('Enter_view', 'Template_view', $data = NULL);  
    }

/**
 * Функція @link action_registration() - створює нового користувача
 */
    public function action_registration(){
      $login = $_POST['login'];
      $password = $_POST['password'];
      $password2 = $_POST['password2'];
    
        $this -> model = new Model_reg_avt($this ->mysql_host, $this ->mysql_username, $this ->mysql_password, $this ->mysql_database);
        $error_mes = $this -> model -> Validator($login, $password, $this -> mysql_table, $password2);

        if($error_mes['login']==1){
             $hash = $this -> model -> seeHash($login, $password, $this -> mysql_table);
             if (!$this -> model -> generateCookie($login, $password, $this -> mysql_table, $hash)){
                 throw new Exception ('Pleese check your cookie on!');
             }
             $this -> model -> newUser($login, $password, $this -> mysql_table);
        }             
            $this -> view -> generate('Regist_view', 'Template_view', $data = $error_mes);
    }
 
/**
 * Функція @link action_avtorization() - авторизує користувача, що був зареєстрований 
 */
    public function action_avtorization(){
        
      $login = $_POST['login'];
      $password = $_POST['password']; 
      
      $this -> model = new Model_reg_avt($this ->mysql_host, $this ->mysql_username, $this ->mysql_password, $this ->mysql_database);
      $error_mes = $this -> model -> Validator($login, $password, $this -> mysql_table);
      if ($error_mes['login'] == 1){
          $_SESSION["login"] = $login;
      }
      $this -> view -> generate('Enter_view', 'Template_view', $data = $error_mes);
      
    }
/**
 * Функція @link action_userExit() - розавторизовує користувача, що був авторизований 
 */   
    public function action_userExit(){
         unset($_SESSION["login"]);
      //   unset($_SESSION["loggedIn"]);
         session_destroy();
         header ("Location: http://localhost/project/ ");
    }
   
    
}

?>
