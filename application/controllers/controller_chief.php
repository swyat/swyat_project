<?php

/**
 * Контроллер гостьової книги
 * 
 * Виконує роль моста між моделями і вюшками
 * @author swyat <swyatyxa@i.ua>
 * @version 1.0
 */

class Controller_chief extends Controller 
{

/**
 *  Конструктор класу {@link Controller_chief}
 * 
 * Створює об'єкт вюшки - {@link View}
 */
    
public function __construct(){
	$this -> view = new View();
    }
     
/**
 * Функція відображення всіх повідомлень
 * 
 * @param type $id Можливість відображення одного повідомлення 
 */
    
    public function action_index($id = null) {    
         $this -> model = new Model_Chief();
         $data = $this -> model -> print_messages($id);
         $this -> view -> generate('Chief_view', 'Template_view', $data);
     }
     
/**
 * Функція видалення повідомлення.
 * 
 * @param type $id Ідентифікаційний номер повідомлення, що видаляється
 */
     
    public function action_delete_message($id){
         $this -> model = new Model_Chief();
         $this -> model -> deleteMessage($id); 
     }
     
/**
* Функція вибірки та можливості редагування потрібного повідомлення
* 
* @param type $id Ідентифікаційний номер повідомлення, що маємо редагувати
*/ 
     
    public function action_edit_message($id){
        $this -> model = new Model_Chief();
        $data = $this -> model -> editMessage($id);
        $this -> view -> generate('Edit_view', 'Template_view', $data);
     }
    
/**
 *   Функція створення нового повідомлення
 */  
     
    public function action_create_message(){
       
       $this -> model = new Model_Chief();
          $name = $_POST['name'];
          $email = $_POST['email'];
          $topic = $_POST['topic'];
          $l_text = $_POST['l_text'];
        $this -> model -> createMessage($name, $email, $topic, $l_text);
     }
/**
 * Функція оновлення інформації редагованого повідомлення.
 * 
 * @param type $id Ідентифікаційний номер повідомлення, що оновлюємо
 */     
     
    public function action_update_message($id){
          $name = $_POST['Uname'];
          $email = $_POST['Uemail'];
          $topic = $_POST['Utopic'];
          $l_text = $_POST['Ul_text'];
         
       $this -> model = new Model_Chief();
        $this -> model -> updateMessage($id, $name, $email, $topic, $l_text);  
     }
     
/**
 *  Функція заміни скороченого повідомлення на ціле
 */
     
    public function action_change_message(){
        $this -> model = new Model_Chief();
         $id = $_POST['ident'];
        $this -> model -> changeMessage($id);
     }
     
     public function showCookie(){
         
         if (isset($_COOKIE['hash'])){
         $hash = $_COOKIE['hash'];   
         $this -> model = new Model_reg_avt();
         $login = $this -> model -> getLogin($hash);
         session_start();
         $_SESSION['login'] = $login;
         }
     }
}


