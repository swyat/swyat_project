<?php
/**
 *  Файл ініціює завантаження програми,
 *  получаючи всі необхідні модулі 
 * @author Swyat <swyatyxa@i.ua>
 * @version 1.0
 */

/**
 * Перші три рядка підключають файли ядра
 */
     
require_once 'core/controller.php';  
require_once 'core/model.php';         // підключити allow_url_open
require_once 'core/view.php';
     
/**  
 *   @see core/route Підключає файл з класом маршрутизатора
 */
     require_once 'core/route.php';
     
/**
 * Запуск маршрутизатора статичним методом 
 * @uses Route::start() 
 */
     Route::start();                        

