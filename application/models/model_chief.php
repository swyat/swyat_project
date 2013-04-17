<?php

/*
 *Файл у якому розміщується клас моделі.
 */

/**
 * Клас моделі {@link Model_Chief }, що своїми методами 
 * звертається до бази даних.
 *
 * @author swyat <swyatyxa@i.ua>
 */
 class Model_Chief extends Model {
    
     private $mysqlTable = "messages_info";

/**
 * Функція відображення всіх повідомлень
 * 
 * @param type $id Можливість відображення одного повідомлення 
 */
    
    public function printMessages($id)
    {
        $messages = $this ->getData($id);
            if (is_array($messages))
            {
            return $messages;   
            }   
    }
    
/**
 * Функція видалення повідомлення.
 * 
 * @param type $id Ідентифікаційний номер повідомлення, що видаляється
 */  
    
    public function deleteMessage($id)
    {
     if (is_numeric($id))
     {
         if(!mysql_query("DELETE FROM $this->mysqlTable WHERE id =$id"))
         {
          new controllerError("Can't delete this message");
         }
     } 
         $url = "http://localhost/project";
         header("Location: $url");               
    }
    
    /**
    * Функція вибірки даних для редагування потрібного повідомлення
    * 
    * @param type $id Ідентифікаційний номер повідомлення, що маємо редагувати
    * @return $message Повертає асоціативний масив із відмовідними полями,
    *  що можуть редагуватися користувачем
    */
    
    public function editMessage($id)
    {  
        $message = $this -> getData($id); 
        if(is_array($message))
        {
            return $message;
        }
    }
    
/**
 *   Функція внесення полів нового повідомлення в базу даних
 */ 
    
    public function createMessage($name, $email, $topic, $lText)
    {
      
       $s_text = substr($lText, 0, 60).'...';      
        
       if (!mysql_query("INSERT INTO $this->mysqlTable (name, email, topic, s_text, l_text, c_time)
          VALUES('$name','$email','$topic','$s_text','$lText',NOW())"))
       {
           new controllerError("Can't create this message");
       }  
            $url = "http://localhost/project";
           header("Location: $url");      
       
     }
     
/**
 * Функція вибірки даних із таблиці бази даних
 * 
 * @param type $id ідентифікаційний номер повідомлення,
 *  що має сформувати масив, який поверне функція. 
 * @return $data_array Повертає масив із вибраними всіма повідомленнями
 * або одним повідомленням, взалежності від наявноста аргумента {@link $id}
 */     
        public function getData($id){
            $dataArray = array();
            $select = mysql_query ("SELECT * FROM $this->mysqlTable");
	    $count =mysql_num_rows($select);
            $fields = 7;
           
         if (is_numeric($id)){
            while ($f = mysql_fetch_array($select)){
                if ($id == $f['id']){
                    $dataArray = array ('id'=>$f['id'], 'name'=>$f['name'], 'email'=>$f['email'], 'topic'=>$f['topic'],'l_text'=>$f['l_text'] );
		    break;
                }
            }
         }
	    else{
		for ($i=0; $i<$count; $i++){ 
                    $f = mysql_fetch_array($select);
	            for ($j=0; $j<$fields; $j++){
			$dataArray[$i][$j] = $f[$j];
		    }
		}
            }
            if (is_array($dataArray)){
                return $dataArray;
            }
      }  
         
/**
 * Функція оновлення інформації редагованого повідомлення.
 * 
 * @param type $id Ідентифікаційний номер повідомлення, що оновлюємо
 */
         
     public function updateMessage($id, $name, $email, $topic, $l_text){
   
         $shortText = substr($l_text, 0, 60).'...';
         
       if(is_numeric($id)){ 
            if (mysql_query("UPDATE $this->mysqlTable SET name='$name', email='$email', topic='$topic', s_text='$shortText', l_text ='$lText', e_time='NOW()' WHERE id='$id'")){
                $url = "http://localhost/project";
                header("Location: $url"); 
            }
       }
       else{
             new controllerError("Can't update this message");
       }
     }
  
/**
 *  @param $id - Ідентифікатор потрібного повідомлення 
 *  Функція заміни скороченого повідомлення на ціле
 */ 
     
     public function changeMessage($id){
         
          
          if (isset($id)){
           $message = $this ->getData($id);  
           $longText = $message['l_text'];
           echo  $longText;
         }
     }
     
}