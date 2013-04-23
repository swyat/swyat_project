<?php

/*
 * Файл у якому розміщується клас моделі.
 */

/**
 * Модель @link Model_reg_avt - Виконує функції перевірки записів, що поступають із форм,
 * та запис їх в базу даних, та читання із бази даних
 *
 * @author swyat <swyatyxa@i.ua>
 */
class Model_reg_avt extends Model {
    
/**
 * Функція @link Validator($login, $password, $mysql_table, $password2 = NULL)
 *  - Перевіряє на відповідність аргументів regex-шаблону, 
 * @param string $login - Є логіном нового користувача
 * @param string $password  - Є паролем нового користувача 
 * @param string $mysql_table - Таблиця, для знаходження одинакових записів, якщо такі є 
 * @param string $password2 - Дублювання пароля, для точності його вводу
 * @return $error_mes  - Масив із повідомленнями про неправильно введені дані.
 */    
    public function Validator($login, $password, $mysql_table, $password2 = NULL){
     
        $error_mes = array();
        if (!preg_match("/^[a-zA-Z0-9]+$/", $login)){
            $error_mes['login'] = "Логін складається тільки з літер англійського алфавіту або цифр";
            $error_mes['password'] = "";
            return $error_mes;
        }
        
            if(strlen($login)<3 || strlen($login)>30){
                $error_mes['login'] = "Логін повинен бути завдовжки 3..30 символів";
               $error_mes['password'] = "";
                return $error_mes;
            }  
                   
        if (!preg_match("/^[a-zA-Z0-9]+$/", $password)){
            $error_mes['password'] = "Пароль складається тільки з літер англійського алфавіту або цифр";
            $error_mes['login'] = "";
            return $error_mes;
        }
            if(strlen($password)<3 || strlen($password)>30){
                $error_mes['password'] = "Пароль повинен бути завдовжки 3..30 символів";
                $error_mes['login'] = "";
                return $error_mes;
            }
           if (!is_null($password2)){
               if($this -> twinSeach('login', $login, $mysql_table)){
                    $error_mes['login'] = "Такий логін уже існує";
                    $error_mes['password'] = "";
                    return $error_mes;
               }
                    if ($password != $password2){
                        $error_mes['password'] = "Паролі є різними";
                        $error_mes['login'] = "";
                        return $error_mes;
                    }
            
                        if($this -> twinSeach('password', $password, $mysql_table)){
                            $error_mes['password'] = "Такий пароль уже існує";
                            $error_mes['login'] = "";
                            return $error_mes;
                        } 
           
            }
            if (is_null($password2)){   
                $result = mysql_query("SELECT * FROM $mysql_table WHERE login='$login' AND password='$password'") or die(" error seach ryadka ");
                $row = mysql_num_rows($result); 
                if ($row == 1){
                    $error_mes['login'] = "1";
                    $error_mes['password'] = ""; 
                    return $error_mes;
                }
                if ($row == 0){
                    $error_mes['login'] = "Name введено неправильно";
                    $error_mes['password'] = "Password введено неправильно"; 
                    return $error_mes;
               }
               
            }  
     else {
        $error_mes['login'] = 1;
        $error_mes['password'] = "";
        return $error_mes;
     }         
    }
/**
 * Функція @link newUser($login, $password, $mysql_table)
 *  - Записує в базу даних нового користувача, 
 * @param string $login - Є логіном нового користувача
 * @param string $password  - Є паролем нового користувача 
 * @param string $mysql_table - Таблиця, для знаходження одинакових записів, якщо такі є
 * @expectedExceptionMessage 'Error inserting new user!!!' - при виникненні помилки  
 * пов язаної із записом в базу
 */  
    public function newUser($login, $password, $mysql_table){
        
        $hash = $this -> createHash();
        if(!mysql_query("INSERT INTO $mysql_table (login, password, code) VALUES ('$login', '$password', '$hash')")){
            throw new Exception('Error inserting new user!!!');
        }
    }
/**
 * Функція @link createHash() - Генерує хеш-код користувача
 * 
 * @return $hash - повертає генерований хеш код
 */    
    public function createHash(){
        $hash = substr(md5(uniqid(rand(),true)), 1, 10);
        return $hash;
    }
/**
 * Функція @link twinSeach($name, $data, $mysql_table)
 *  - Функція пошуку одинакових даних в таблиці @link $mytable
 * @param string $name - Є логіном користувача
 * @param string $data  - Є паролем користувача 
 * @param string $mysql_table - Таблиця, з даними про користувача
 * @return $error_mes  - Повертає 1 при успішному виконанні функції
 */         
    public function twinSeach($name, $data, $mysql_table){
       $result=mysql_query("SELECT * FROM $mysql_table WHERE $name like '$data' ") or die(" error seach row ");
       $rows=mysql_num_rows($result);
       if ($rows>1){
           return 1;
       }
    }
/**
 * Функція @link generateCookie($login, $password, $mysql_table, $hash)
 *  - Перевіряє та оновлює унікальний хеш-код користувача та генерує cookie із цим кодом
 * @param string $login - Є логіном користувача
 * @param string $password  - Є паролем користувача 
 * @param string $hash - старий хеш-код користувача
 * @param string $mysql_table - Таблиця, для оновлення хеш-коду користувача
 * @return $error_mes  - Повертає 1 при успішному виконанні функції
 */  
    public function generateCookie($login, $password, $mysql_table, $hash = NULL){
       
                
                $table_hash = $this ->seeHash($login, $password, $mysql_table);
                if ($hash == $table_hash)
                {
                       $newHash = $this -> createHash();
                       echo $newHash;
                       if (!$this -> updateHash($login, $password, $newHash, $mysql_table)){
                           throw new Exception('Error updateHash');
                       }
                       setcookie("hash", $newHash, time()+60*60*24*30);
                       return 1;   
                }
    } 
    
/**
 * Функція @link updateHash($login, $password, $hash, $mysql_table)
 *  - Оновлює унікальний хеш-код користувача
 * @param string $login - Є логіном користувача
 * @param string $password  - Є паролем користувача 
 * @param string $mysql_table - Таблиця, для оновлення хеш-коду користувача
 * @return $error_mes  - Повертає 1 при успішному виконанні функції
 */      
    public function updateHash($login, $password, $hash, $mysql_table){

        if (mysql_query("UPDATE $mysql_table SET code='$hash' WHERE login='$login' AND password='$password'")){
            return 1;
        }
    }
/**
 * Функція @link seeHash($login, $password, $mysql_table)
 *  - Повертає старий хеш-код користувача
 * @param string $login - Є логіном користувача
 * @param string $password  - Є паролем користувача 
 * @param string $mysql_table - Таблиця, для оновлення хеш-коду користувача
 * @return $error_mes  - Повертає поле @lick $seach_row['code'] при успішному виконанні функції
 */ 
    public function seeHash($login, $password, $mysql_table){
        $result=mysql_query("SELECT * FROM $mysql_table WHERE login='$login' AND password='$password' ") or die(" error seach row ");
        $seach_row = mysql_fetch_array($result); 
        return $seach_row['code'];
        }
}

?>
