<?php

/**
 * Контроллер що опрацьовує помилки 
 *
 * @author swyat <swyatyxa@i.ua>
 */

class ControllerError extends Controller {
    public function __construct($Error) {
        $errorForPrinting = array ($Error);
        $this -> view = new View();
<<<<<<< HEAD
        $this -> view -> generate('ErrorView', $errorForPrinting);
=======
        $this -> view -> generate('ErrorView', $Error);
>>>>>>> 6428d6e0b38d1e5f99710c52d0a8a741d5a0e5c2
    }
}
