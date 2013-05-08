<?php

/**
 * Клас {@link View} є батьком всіх вюшок, що його наслідують
 *
 * @author swyat <swyatyxa@i.ua>
 */
class View 
{
<<<<<<< HEAD
 /**
  *
  * @var string - Layout позамовчуванню
  */
 private $templateView = 'TemplateView'; 
 
=======
 private $templateView = 'TemplateView';   
>>>>>>> 6428d6e0b38d1e5f99710c52d0a8a741d5a0e5c2
/**
 * Функція формування виду сторінок.
 * 
 * @param type $content_view Можливість вкладення допоміжної вюшки
 * @param type $template_view Головна вюшка
 * @param type $data Можливість передачі даних у вюшку
 */        
<<<<<<< HEAD
    public function generate($contentView, array $data = NULL)
    {
        if (!is_null($data)){
            extract($data); 
        }
            include 'application/views/'.$this -> templateView.'.php';
=======
    public function generate($contentView, $data = NULL, $data2 = NULL)
    {
       include 'application/views/'.$this -> templateView.'.php';
>>>>>>> 6428d6e0b38d1e5f99710c52d0a8a741d5a0e5c2
    }
    
    /**
    * Функція заміни леяота позамовчуванню.
    * 
<<<<<<< HEAD
    * @param string $template Леяот для заміни
    */
    public function setAnotherTemplateView($template){
        $this -> templateView = $template;
    }        
=======
    * @param type $template Леяот для заміни
    */ 
    
    public function setAnotherTemplateView($template){
        $this -> templateView = $template;
    }
    
   // public function pushData($contentView, $mas){
   //    include 'application/views/'.$contentView.'.php';
   // }
            
>>>>>>> 6428d6e0b38d1e5f99710c52d0a8a741d5a0e5c2
}


