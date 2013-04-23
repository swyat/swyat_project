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
<<<<<<< HEAD
        $controllerName = 'chief';
=======
        $controllerName = 'Chief';
>>>>>>> 6cd1427f8bd93497df3a0bccc06d79425f39fe1f
        $actionName = 'index' ;
        $errorController = 'controllerError.php';
        $CheckPermissions = 'CheckPermissions.php';
        include "application/controllers/".$errorController;
        include "application/".$CheckPermissions;
/**
 *  Оголошення масиву елементів, що для передачі 
 * аргументів методів у відповідні методи моделі.
 */       
        $arr = array();

        $routes = explode('/', $_SERVER['REQUEST_URI']);       
            if (!empty($routes[2])){
               $controllerName = $routes[2];
            }  
      
                if (!empty($routes[3])){
                   $actionName = $routes[3];
                }
                 
                    if (!empty($routes[4])){
                        $size = count($routes);
                        for($i=4; $i<$size; $i++){   
                           
                            $arr[$routes[$i]] = $routes[++$i];
                        }
                    }
            
<<<<<<< HEAD
                $modelName = 'Model_'.$controllerName;
		$controllerName = 'Controller_'.$controllerName;	
=======
                $modelName = 'Model'.$controllerName;
		$controllerName = 'controller'.$controllerName;	
>>>>>>> 6cd1427f8bd93497df3a0bccc06d79425f39fe1f
                $actionName = 'action_'.$actionName;
                
          $modelFile = strtolower($modelName).'.php';
          
          $modelPath = "application/models/".$modelFile;
          if (!file_exists($modelPath)){
              new controllerError("Connect error. Check name of model file");
            }
            include "application/models/".$modelFile;
            
            
          $controllerFile = strtolower($controllerName).'.php'; 
          $controllerPath = "application/controllers/".$controllerFile;
             
            if (!file_exists($controllerPath)){
                new controllerError("Connect error. Check name of model file"); 
            }
            include "application/controllers/".$controllerFile;
<<<<<<< HEAD
            include "application/controllers/".$errorController;
            $controller = new $controllerName;        
            $action = $actionName;
         
        if ($controllerName == 'Controller_chief'){
            $modelFile2 = "model_reg_avt.php";
=======
            
            $controller = new $controllerName;        
            $action = $actionName;
            
        if ($controllerName == 'controllerChief'){
            $modelFile2 = "modelRegAvt.php";
>>>>>>> 6cd1427f8bd93497df3a0bccc06d79425f39fe1f
            include "application/models/".$modelFile2;
            $chifOb = new $controllerName;
            $chifOb -> showCookie();
        }
        if (!method_exists($controller, $action)){
             new controllerError("Connect error. Check names of controller-methods");
        }
             call_user_func_array(array($controller, $action), $arr);
    }
}