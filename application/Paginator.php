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
   private $sizeMessages = null;
   private $numberMessages = null;
   private $numberURL = null;
   private $currentPage = null;
   private $pattern = "/project/Chief/index/page/";
   
   private $iconFirst = '<<';
   private $iconPrevious = '<';
   private $iconDot = '...';
   private $iconNext = '>';
   private $iconLast = '>>';
   
   private $keyMasForDot1 = '...1';
   private $keyMasForDot2 = '...2';

   /**
    *  @link __construct - Конструктор класу Paginator.
    * 
    *  @param int $sizeMessages = 100 - Загальна кількість елементів 
    *  @param int $numberMessages = 10 - Кількість елементів на одній сторінці
    *  @param int $numberURL = 2 - Кількість посилань, що відображаються до і після поточної сторінки
    *  @param int $currentPage  - Поточна сторінка
    *  
    */
   public function __construct($sizeMessages = 100, $numberMessages = 10, $numberURL = 2, $currentPage) {
       $this -> sizeMessages = $sizeMessages;            //загальна кількість елементів
       $this -> numberMessages = $numberMessages;        //кількість елементів на одній сторінці
       $this -> numberURL = $numberURL;              //кількість посилань, до і після поточної сторінки
       $this -> currentPage = $currentPage;                //поточна сторінка
   }
   
   public function setPattern($pattern){
       $this -> pattern = $pattern;
   }
   
   public function setPaginatorControlIcons($first, $previous, $iconDot, $next, $last){
    if (!is_int($first)&&(!is_int($previous))&&(!is_int($next))&&(!is_int($last))){
        $this -> iconFirst = $first;
        $this -> iconPrevious = $previous;
        $this -> iconDot = $iconDot;
        $this -> iconNext = $next;
        $this -> iconLast = $last;
    }
    else{
        new ControllerError('Parameters in function setPaginatorControlIcons can t be int!');
        exit();   
    }
   }

   /**
     * @link createMasUrl() - Метод, що відповідає за створення навігації між сторінками з повідомленнями
     * 
     * @return string $masURL - Повертає масив із даними про відображення навігації, 
     * відображення посилань є ключі масиву, а внутрішні переходи є значеннями кожного ключа
     */
   public function createMasUrl(){
       
      $masURL = array();
     
      $numOfPages =ceil($this -> sizeMessages / $this -> numberMessages);
      $numBefore = $this -> currentPage - $this -> numberMessages;
        if ($numBefore < 1){
            $numBefore = 1;
        }
            $numAfter = $this ->currentPage + $this -> numberMessages;
                if ($numAfter > $numOfPages){
                    $numAfter = $numOfPages;
                }
                    if ($numOfPages >=1){
                        $masURL[$this -> iconFirst] = $this -> pattern.'1';
                     
                        if ($this -> currentPage == 1){
                            $masURL[$this -> iconPrevious] = $this -> pattern.($this -> currentPage);
                        }
                        else{
                            $masURL[$this -> iconPrevious] = $this -> pattern.(($this -> currentPage)-1);
                        }
                    }
                    else {
                        $masURL[$this -> iconFirst] = $this -> pattern.'5000';
                        $masURL[$this -> iconPrevious] = $this -> pattern.'5000';
                    }
                        if ($numBefore > 1){
                            $masURL[$this -> keyMasForDot1] = $this -> iconDot;
                        }
                            for($i = $numBefore; $i <= $numAfter; $i++){
                                $masURL[$i] = $this -> pattern.$i;
                            }       
                                if ($numAfter < $numOfPages){
                                    $masURL[$this -> keyMasForDot2] = $this -> iconDot;
                                }
                                    if (($this -> currentPage) < $numOfPages){
                                        $masURL[$this -> iconNext] = $this -> pattern.(($this -> currentPage) + 1);
                                        $masURL[$this -> iconLast] = $this -> pattern.$numOfPages;
                                    }
                                    else {
                                        if ($numOfPages == 0){
                                            $masURL[$this -> iconNext] = $this -> pattern.'5000';
                                            $masURL[$this -> iconLast] = $this -> pattern.'5000';
                                        }
                                        else{
                                            $masURL[$this -> iconNext] = $this -> pattern.$numOfPages;
                                            $masURL[$this -> iconLast] = $this -> pattern.$numOfPages;
                                        }
                                    }
              return $masURL;
   } 
   public function getPaginator($masURL){
       $masPaginator = array();
       $previousNavEl = '<a href = '.$masURL[$this -> iconPrevious].'>'.$this -> iconPrevious.'</a>';
       $firstNavEl = '<a href = '.$masURL[$this -> iconFirst].'>'.$this -> iconFirst.'</a>';
       $dot = $this -> iconDot;
       $nextNavEl = '<a href = '.$masURL[$this -> iconNext].'>'.$this -> iconNext.'</a>';
       $lastNavEl = '<a href = '.$masURL[$this -> iconLast].'>'.$this -> iconLast.'</a>';
       $pagesNavEl;
     
    $masPaginator[$this -> iconFirst] = $firstNavEl; 
    $masPaginator[$this -> iconPrevious] = $previousNavEl;
    
    if (array_key_exists($this -> keyMasForDot1, $masURL)){
        $masPaginator[$dot] = $dot;
    }
    $data = array_keys($masURL);
    foreach($data as $val){
        if (is_int($val)){
            $pagesNavEl = $val;
            $masPaginator[$pagesNavEl] = '<a href = '.$masURL[$pagesNavEl].'>'.$pagesNavEl.'</a>';
        }
    }
    if (array_key_exists($this -> keyMasForDot2, $masURL)){
        $masPaginator[$dot] = $dot;
    }
    $masPaginator[$this -> iconNext] = $nextNavEl;
    $masPaginator[$this -> iconLast] = $lastNavEl;
        return $masPaginator;
   }
   
}