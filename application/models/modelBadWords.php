<?php

/**
 * Модель із функціями обробки поганих слів
 *
 * @author swyat <@swyatyxa@i.ua>
 */
class ModelBadWords extends Model {
    /**
     * @var string $mysqlTable - Таблиця із поганими словами
     * @var string $mysqlColum - Назва стовпця таблиці $mysqlTable із поганими словами
     */
    private $mysqlTable = "badwordstable";
    private $mysqlColum = "badWord";
    
    /**Функція @link getMasBadWords() - Робить вибірку всіх поганих слів із таблиці
     * 
     * @return array $masBadWords - Масив із поганими словами;
     */
    public function getMasBadWords(){
        $masBadWords = array();
       
            $result = mysql_query("SELECT $this->mysqlColum FROM $this->mysqlTable");
            while ($data = mysql_fetch_array($result)){
               $masBadWords[] =  $data[$this->mysqlColum];              
            }
            return $masBadWords;
    }
}
