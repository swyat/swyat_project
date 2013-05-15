<?php
/**
 * Модель із функціями організації пошуку по сайту
 */
    class ModelSearch extends Model{

 /**
  * @link createSearchOptions($masSeach, $searchText) -Функція створення масиву посилань опцій пошуку 
  * @param array $masSeach - Масив із назвами для посилань пошуку
  * @param string $searchText - інформація для пошуку
  * @return string $urlForPrinting - Вихідний масив із посиляннями дла пошуку
  */                
        public function createSearchOptions($masSeach, $searchText){
            $urlForPrinting = array();
            foreach ($masSeach as $url){
            $urlForPrinting[] = "<a href =/project/Search/searching/searchIn/".$url."/value/".$searchText.">".$url."</a>";
            }
            return $urlForPrinting;
        }
  
   /**
    * @link createUrls($masUrl) - Функція створення ключових слів
    * @param array $masUrl - Масив із назвами для ключових слів
    * @return string $urlForPrinting - Масив із ключовими словами
    */
        public function createUrls($masUrl){
            $pattern = "<a href =/project/Search/searching/searchIn/url/value/";
            $urlForPrinting = "";
            foreach ($masUrl as $url){
                $incUrl = $this -> searchTextIncode($url);
                $urlForPrinting =$urlForPrinting.$pattern.$incUrl.">".$url."</a> ";
            }
                return $urlForPrinting;
        }
        
   /**
    * @link searchTextIncode($str) - Функція форматування інформації пошуку
    * @param string $str - Інформація пошуку
    * @return string $incStr - Відформатована інформація
    */
        public function searchTextIncode($str){
            $str = trim($str);
            $trans = array(" " => "+", "+" => "%2aa");
            $incStr = strtr($str, $trans);
            return $incStr;
        }
        
   /**
    * @link searchTextIncode($str) - Функція деформатування інформації пошуку
    * @param string $str - Форматована інформація пошуку
    * @return string $decStr - Інформація після деформатування
    */   
        public function searchTextDecode($str){
            $trans = array("+" => " ", "%2aa" => "+");
            $decStr = strtr($str, $trans);
            return $decStr;
        }
        
    /**
     * @link searchIn($name, $masSeach) - Функція, що повертає стовпчики таблиці, 
     * відповідно до значень вхідного масиву.
     * @param type $name - назва опції пошуку
     * @param type $masSeach - шаблон із назвами опцій пошуку
     * @return string повертає назву стовпця таблиці
     */    
        public function searchIn($name, $masSeach){
           
            switch ($name) {
                
                case $masSeach[0]:    
                    return "l_text";
                    break;
                case $masSeach[1]:    
                    return "name";
                    break;
                case $masSeach[2]:    
                    return "topic";
                    break;
                case $masSeach[3]:    
                    return "keyWords";
                    break;
                default:
                    new controllerError("Bad index of masSeach!!!");
                    break;
            }
        }
     /**
      * @link changePass($stroca) - Функція заміни символу в тексті 
      * на пробіл
      * @param string $stroca - Текст для заміни символів, якщо такі є
      * @return string $keyUrl - Текст з заміненими символами, якщо такі є
      */   
         public function changePass($stroca){
     
            $trans = array("*","_","/",",");
            $pass = " ";
            $stroca = str_replace($trans, $pass, $stroca);
            trim($stroca);
            $keyUrl = explode($pass, $stroca);            
            return $keyUrl;
         }
    }
