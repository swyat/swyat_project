<?php

/*
 * Файл головного каркасу сторінок
 * Всі сценарії проходять через нього
 */

/**
 * @author Swyat <swyatyxa@i.ua>
 */
   
/**
 * Встановлює значення опції кофігурації 
 * @param static display_errors Назва опції
 * @param 1 Значення опції
 * @return
 *  boolean
 */
    ini_set('display_errors',1);
    /**
     *  Підключення файлу
     *   @see init_load_app.php 
     */ 
    require_once 'application/init_load_app.php';


