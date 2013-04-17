<?php



/**
 * Клас {@link View} є батьком всіх вюшок, що його наслідують
 *
 * @author swyat <swyatyxa@i.ua>
 */
class View 
{
    
  // public $template_view =       // можна задати область позамовчуванню
    
/**
 * Функція формування виду сторінок.
 * 
 * @param type $content_view Можливість вкладення допоміжної вюшки
 * @param type $template_view Головна вюшка
 * @param type $data Можливість передачі даних у вюшку
 */        
    public function generate($content_view, $template_view, $data = null)
    {
        /*
        if (is_array($data))
        {                            //перетворює елементи масива на змінні
            extract($data);
        }
        */
/**
 * Підключення файлу з головною вюшкою
 */
       include 'application/views/'.$template_view.'.php';
    }
}


