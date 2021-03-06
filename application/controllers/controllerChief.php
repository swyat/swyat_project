<?php

/**
 * Контроллер гостьової книги
 * 
 * Виконує роль моста між моделями і вюшками
 * @author swyat <swyatyxa@i.ua>
 * @version 1.0
 */
include 'application/models/modelSearch.php';
class ControllerChief extends Controller 
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
 * Функція відображення повідомлень
 * 
 * @param int $numPage  - Номер поточної сторінки для виводу повідомлень
 */ 
    public function action_index($numPage = null) {    
         $this -> model = new ModelChief(); 
         $count = $this -> model -> getNumOfMessages();
         $numberPages = 2;
         $numbeMessages = 2;   
         if(!is_null($numPage)){
            if (!preg_match("/^[0-9]+$/", $numPage)){  
                new controllerError("Ne vvodit biliberdy!!!");
                exit();
            } 
         }
         if ($numPage>ceil($count/$numbeMessages)){
             new controllerError("This page not found!!!");
         }
            if (is_null($numPage)){
                $numPage = 1;
            }
                 include 'application/Paginator.php';
                    $obPaginator = new Paginator($count, $numbeMessages, $numberPages, $numPage);
                  //  $obPaginator -> setPaginatorControlIcons('first', 'previous', '++', 'next', 'last');
                    $masUrl = $obPaginator -> createMasUrl();
                    $data2 = $obPaginator -> getPaginator($masUrl);
                    $data = $this -> model -> printMessages($numPage, $numbeMessages);
                    $arrays['data'] = $data;
                    $arrays['data2'] = $data2;
                    $this -> view -> generate('ChiefView', $arrays);      

    }
      
/**
 * Функція видалення повідомлення.
 * 
 * @param type $id Ідентифікаційний номер повідомлення, що видаляється
 */
    public function action_delete_message($id){
     
        new CheckPermissions("admin");
         $this -> model = new ModelChief();
         $this -> model -> deleteMessage($id); 
     }
     
/**
* Функція вибірки та можливості редагування потрібного повідомлення
* 
* @param type $id Ідентифікаційний номер повідомлення, що маємо редагувати
*/   
    public function action_edit_message($id){
        $this -> model = new ModelChief();
        $data = $this -> model -> editMessage($id);
        $this -> view -> generate('EditView', $data);
     }
    
/**
 *   Функція створення нового повідомлення
 */     
    public function action_create_message(){
       
       $this -> model = new ModelChief();
          $name =  $_POST['name'];
          $email = $_POST['email'];
          $topic = $_POST['topic'];
          $lText = $_POST['l_text'];
          $keyWords = $_POST['keyWords'];
          $ObModSeach = new ModelSearch();
        $keyUrl = $ObModSeach -> changePass($keyWords);
        $keyWords =$ObModSeach -> createUrls($keyUrl);
        $this -> model -> createMessage($name, $email, $topic, $lText, $keyWords);
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
          $lText = $_POST['Ul_text'];
         
       $this -> model = new ModelChief();
        $this -> model -> updateMessage($id, $name, $email, $topic, $lText);  
     }
     
/**
 *  Функція заміни скороченого повідомлення на ціле
 */   
    public function action_change_message(){
        $this -> model = new ModelChief();
         $id = $_POST['ident'];
        $this -> model -> changeMessage($id);
     }
     
/**
 * Функція @link showCookie() перевіряє на наявність кука @link $_COOKIE['hash'],
 * що означає - користувач був уже зареєстрований, тому він автоматично авторизуєтся
 * Його файл кукі змінюється, для безпеки кожний раз при попаданні на сайт.
 */     
     public function showCookie(){
         
         if (isset($_COOKIE['hash'])){
            $hash = $_COOKIE['hash'];
           // echo 'before'.$hash;
            $this -> model = new ModelRegAvt();
            $login = $this -> model -> getLogin($hash);
            $newHash = $this -> model -> createHash();
            $this -> model -> updateHash($login, $newHash);      
            setcookie("hash", $newHash, time()+60*60*24*30, '/');
           // echo 'after'.$_COOKIE['hash'];
            $_SESSION['login'] = $login;
         }
     }
}