<?php

/**
 * Контроллер що опрацьовує помилки 
 *
 * @author swyat <swyatyxa@i.ua>
 */

class ControllerError extends Controller {
    public function __construct($Error) {
        $this -> view = new View();
        $this -> view -> generate('Error_view', 'Template_view', $Error);
        exit();  
    }
}


?>