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
        $this -> view -> generate('ErrorView', $errorForPrinting);
    }
}
