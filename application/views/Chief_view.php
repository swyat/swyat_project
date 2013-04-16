<?php 
/**
 * Підключення вюшки {@link form_view.php} з формою створення повідомлення
 */
    include 'application/views/Form_view.php';

    $size = count($data);
    $counter = 1;
    for($i=$size-1; $i>=0; $i--){
	$id = $data[$i][0];
	$name = $data[$i][1];	
	$email = $data[$i][2];	
	$topic = $data[$i][3];
	$text_s = $data[$i][4];	
	
/**
 * Вюшка, що виводить всі коли-небудь написані повідомлення
 */
   ?>     
              <div class = 'Message'> 
              <p class = 'Mesnumb'><?php echo $counter++; ?></p>
  	      <p class = 'Mesname'>Name : <?php echo $name ?></p> 
 	      <p class = 'Mesname'>Email :  <?php echo $email ?></p>
	      <p class = 'Mesname'>Topic :  <?php echo $topic ?><p>
              <p class = 'Mesmessage' >Message: </p><textarea id ="<?php echo $id; ?>" class = 'Textarea' readonly = 'readonly' rows='4' cols='40'><?php echo $text_s; ?></textarea>
	      <div class = 'Div_buttons'>
    <?php                
     if(isset($_SESSION['permissions'])){
         if ($_SESSION['permissions'] === 'admin'){ 
    ?>         
                   
                  <input type = 'button' class = 'Buttons' name = '<?php echo $id; ?>'  value = 'Delete' onclick = 'deleteMessage(name)'/>
                  <input type = 'button' class = 'Buttons' name = '<?php echo $id; ?>'  value = 'Edit' onclick = 'editMessage(name)'/>
   <?php   
         }
    }?>

      <input type = 'button' class = 'Buttons' name = '<?php echo $id; ?>'  value = 'All' onclick ='post(name)' />
      </div>		 
      </div>
      <hr/>
<?php } ?>                  