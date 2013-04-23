<?php

/**
 * Файл, де знаходиться пагінатор надісланих повідомлень.
 */

/**
 * Відображає ссилки на сторінки із надісланими повідомленнями.
 *
 * @author swyat <swyatyxa@i.ua>
 */
class Paginator {
   private $sizeMessages = 100;
   private $numberMessages = 10;
   private $numberURL = 3;
   private $numberPage;

   /**
    *  @link __construct - Конструктор класу Paginator.
    * 
    *  @param int $sizeMessages - Загальна кількість елементів 
    *  @param int $numberMessages - Кількість елементів на одній сторінці
    *  @param int $numberURL - Кількість посилань, що відображаються до і після поточної сторінки
    *  @param int $numberPage - Поточна сторінка
    *  
    */
   
   public function __construct($sizeMessages, $numberMessages, $numberURL, $numberPage) {
       $this -> sizeMessages = $sizeMessages;            //загальна кількість елементів
       $this -> numberMessages = $numberMessages;        //кількість елементів на одній сторінці
       $this -> numberURL = $numberURL;              //кількість посилань, до і після поточної сторінки
       $this -> numberPage = $numberPage;                //поточна сторінка
   }
    
    /**
     * @link createMasUrl() - Метод, що відповідає за створення навігації між сторінками з повідомленнями
     * 
     * @return string $masURL - Повертає масив із даними про відображення навігації, 
     * відображення посилань є ключі масиву, а внутрішні переходи є значеннями кожного ключа
     */
   
   public function createMasUrl(){
      $masURL = array();
      $pattern = "/project/Chief/index/page/";
      $numOfPages =ceil($this -> sizeMessages / $this -> numberMessages);
      $numBefore = $this -> numberPage - $this -> numberMessages;
        if ($numBefore < 1){
            $numBefore = 1;
        }
            $numAfter = $this ->numberPage + $this -> numberMessages;
                if ($numAfter > $numOfPages){
                    $numAfter = $numOfPages;
                }
                    if ($numOfPages > 1){
                    $masURL['<<'] = $pattern.'1';  
                        if ($this -> numberPage == 1){
                            $masURL['<'] = $pattern.($this -> numberPage);
                        }
                        else{
                            $masURL['<'] = $pattern.(($this -> numberPage)-1);
                        }
                    }
                        if ($numBefore > 1){
                            $masURL['...1'] = "...";
                        }
                            for($i = $numBefore; $i <= $numAfter; $i++){
                                $masURL[$i] = $pattern.$i;
                            }       
                                if ($numAfter < $numOfPages){
                                    $masURL['...2'] = "...";
                                }
                                    if (($this -> numberPage) < $numOfPages){
                                        $masURL['>'] = $pattern.(($this -> numberPage) + 1);
                                        $masURL['>>'] = $pattern.$numOfPages;
                                    }
                                    else {
                                        $masURL['>'] = $pattern.$numOfPages;
                                        $masURL['>>'] = $pattern.$numOfPages;
                                    }
              return $masURL;
   } 
   
}

?>
