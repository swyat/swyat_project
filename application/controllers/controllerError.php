<?php

/**
 * Контроллер що опрацьовує помилки 
 *
 * @author swyat <swyatyxa@i.ua>
 */

class ControllerError extends Controller {
    public function __construct($Error) {
        $this -> view = new View();
<<<<<<< HEAD
        $this -> view -> generate('Error_view', $Error);
        exit();  
=======
        $this -> view -> generate('ErrorView', $Error);
>>>>>>> 6cd1427f8bd93497df3a0bccc06d79425f39fe1f
    }
}


?>
