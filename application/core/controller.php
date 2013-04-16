<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Клас Controller є батьком всіх створених підконтролерів, що його наслідують
 *
 * @author Swyat <swyatyxa@i.ua>
 */
class Controller{ 
     public $view;
     public $model;

/**
 *  Конструктор головного контроллера - {@link Controller}
 */
       
        public function __construct(){
            $this ->view = new View();
        }       
}

