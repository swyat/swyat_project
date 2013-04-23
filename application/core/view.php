<?php

/**
 * Клас {@link View} є батьком всіх вюшок, що його наслідують
 *
 * @author swyat <swyatyxa@i.ua>
 */
class View 
{
<<<<<<< HEAD
    
=======
 private $templateView = 'TemplateView';   
>>>>>>> 6cd1427f8bd93497df3a0bccc06d79425f39fe1f
/**
 * Функція формування виду сторінок.
 * 
 * @param type $content_view Можливість вкладення допоміжної вюшки
 * @param type $template_view Головна вюшка
 * @param type $data Можливість передачі даних у вюшку
 */        
    public function generate($contentView, $data = NULL, $data2 = NULL)
    {
<<<<<<< HEAD
       $templateView = 'Template_view';
       include 'application/views/'.$templateView.'.php';
=======
       include 'application/views/'.$this -> templateView.'.php';
    }
    
    /**
    * Функція заміни леяота позамовчуванню.
    * 
    * @param type $template Леяот для заміни
    */ 
    
    public function setAnotherTemplateView($template){
        $this -> templateView = $template;
>>>>>>> 6cd1427f8bd93497df3a0bccc06d79425f39fe1f
    }
    
   // public function pushData($contentView, $mas){
   //    include 'application/views/'.$contentView.'.php';
   // }
            
}


