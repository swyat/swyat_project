<?php

/**
 * Контроллер пошуку інформації на сайті
 *
 * @author swyat <swyatyxa@i.ua>
 */
include 'application/models/modelChief.php';

class ControllerSearch extends Controller{
    
/**
 * @var array $masSearch - Загальний шаблон назв кнопок-опцій пошуку
 */    
private $masSeach = array ('message', 'author', 'topic', 'url');
 
/**
 * Функція @link action_searching($name = null, $value = null)- виконує формування
 * виду сторінки пошуку : опції пошуку, поле для задання слова для пошуку 
 * та інформаця що знайшлась.
 * @param string $name - назва кнопки-опції пошуку
 * @param string $value - слово для пошуку
 */
     public function action_searching($name = null, $value = null){
         $this -> model = new ModelSearch();
         $modChiefOb = new ModelChief();      
          
        if (is_null($name) && is_null($value) && isset($_POST['textsearch'])){
            $postValue = $_POST['textsearch'];
            $name = 'message';
            $value = $this -> model -> searchTextIncode($postValue);
        }
        
        $masUrl = $this ->action_createSearchOptions($value);
        $nameOfColumn = $this -> model -> searchIn($name, $this -> masSeach);            
        $decValue = $this -> model -> searchTextDecode($value);
        $masSearchEl = $modChiefOb -> searchingData($nameOfColumn, $decValue);
        $flag = '<input type ="text" value = "'.$decValue.'" name ="textsearch" id ="textseach"/>';         
        
        $arrays['masEl'] = array($flag);
        $arrays['masUrl'] = $masUrl;
        $arrays['data'] = $masSearchEl;
         //$arrays['data2'] = $masPaginator;
        $this -> view -> generate('SearchWithOptions', $arrays);
              }
    
/**
 * Функція @link action_createSearchOptions($value) - Створює кнопки опцій пошуку
 * @param string $value - Cлово для пошуку
 * @return array $urlForPrinting - Масив із кнопками опцій пошуку
 */    
      private function action_createSearchOptions($value){
   
                $textSearch = $value; 
                $urlForPrinting = $this -> model -> createSearchOptions($this -> masSeach, $textSearch);
                return $urlForPrinting;
                
 
     
      }
}

