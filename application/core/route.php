<?php

/*
 * Файл, що звертається до методів контролерів, які в свою чергу будуть генерувати вид сторінок
 */

/**
 * Файл, звертається до методів контролерів, 
 * які в свою чергу будуть генерувати вид сторінок та 
 * звертатися до потрібних методів, що знаходяться в модельках 
 *
 * @author Swyat <swyatyxa@i.ua>
 */
class Route {

/**
 * Cтатична функція, що підбирає та передає управління контроллеру, 
 * якого виділяє із масиву, створеного із елементів адресного поля.
 */
    static function start(){
/** 
 *  Поля {@link $controller_name $action_name},
 *  що є контроллером та методом моделі позамовчуванню   
 */
        $controller_name = 'chief';
        $action_name = 'index' ;
        $errorController = 'controllerError.php';
/**
 *  Оголошення масиву елементів, що для передачі 
 * аргументів методів у відповідні методи моделі.
 */       
        $arr = array();

        $routes = explode('/', $_SERVER['REQUEST_URI']);       
            if (!empty($routes[2])){
               $controller_name = $routes[2];
            }  
      
                if (!empty($routes[3])){
                   $action_name = $routes[3];
                }
                 
                    if (!empty($routes[4])){
                        $size = count($routes);
                        for($i=4; $i<$size; $i++){   
                           
                            $arr[$routes[$i]] = $routes[++$i];
                        }
                    }
            
                $model_name = 'Model_'.$controller_name;
		$controller_name = 'Controller_'.$controller_name;	
                $action_name = 'action_'.$action_name;
                
          $model_file = strtolower($model_name).'.php';
          
          $model_path = "application/models/".$model_file;
          if (!file_exists($model_path)){
              new controllerError("Connect error. Check name of model file");
            }
            include "application/models/".$model_file;
            
            
          $controller_file = strtolower($controller_name).'.php'; 
          $controller_path = "application/controllers/".$controller_file;
             
            if (!file_exists($controller_path)){
                new controllerError("Connect error. Check name of model file"); 
            }
            include "application/controllers/".$controller_file;
            include "application/controllers/".$errorController;
            $controller = new $controller_name;        
            $action = $action_name;
         
        if ($controller_name == 'Controller_chief'){
            $model_file2 = "model_reg_avt.php";
            include "application/models/".$model_file2;
            $chifOb = new $controller_name;
            $chifOb -> showCookie();
        }
            
        if (!method_exists($controller, $action)){
             new controllerError("Connect error. Check names of controller-methods");
        }
             call_user_func_array(array($controller, $action), $arr);
    }
}