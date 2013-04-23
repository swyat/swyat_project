<?php 
/**
 * Підключення вюшки {@link form_view.php} з формою створення повідомлення
 */

    include 'application/views/FormView.php';
    include 'application/views/PaginatorView.php';?>
 <?php
    $size = count($data);
    $counter = 1;
    for($i=1; $i<$size+1; $i++){                  
	$id = $data[$i]['id'];
	$name = $data[$i]['name'];	
	$email = $data[$i]['email'];	
	$topic = $data[$i]['topic'];
	$text_s = $data[$i]['s_text'];	
	
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
              
              <input type = 'button' class = 'Buttons' name = '<?php echo $id; ?>'  value = 'Delete' onclick = 'deleteMessage(name)'/>
              <input type = 'button' class = 'Buttons' name = '<?php echo $id; ?>'  value = 'Edit' onclick = 'editMessage(name)'/>
              <input type = 'button' class = 'Buttons' name = '<?php echo $id; ?>'  value = 'All' onclick ='post(name)' />
              </div>
              </div>
    
<?php } 
      include 'application/views/PaginatorView.php';?>
