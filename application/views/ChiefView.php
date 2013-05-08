<?php 
/**
 * Підключення вюшки {@link form_view.php} з формою створення повідомлення
 */

    include 'application/views/FormView.php';
<<<<<<< HEAD
    include 'application/views/PaginatorView.php';
 
=======
    include 'application/views/PaginatorView.php';?>
 <?php
>>>>>>> 6428d6e0b38d1e5f99710c52d0a8a741d5a0e5c2
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
<<<<<<< HEAD
              <p class = 'Mesmessage' >Message: </p><p id ="<?php echo $id; ?>"><?php echo $text_s; ?></p>
	      <div class = 'Div_buttons'>        
=======
              <p class = 'Mesmessage' >Message: </p><textarea id ="<?php echo $id; ?>" class = 'Textarea' readonly = 'readonly' rows='4' cols='40'><?php echo $text_s; ?></textarea>
	   <div class = 'Div_buttons'>        
>>>>>>> 6428d6e0b38d1e5f99710c52d0a8a741d5a0e5c2
              
              <input type = 'button' class = 'Buttons' name = '<?php echo $id; ?>'  value = 'Delete' onclick = 'deleteMessage(name)'/>
              <input type = 'button' class = 'Buttons' name = '<?php echo $id; ?>'  value = 'Edit' onclick = 'editMessage(name)'/>
              <input type = 'button' class = 'Buttons' name = '<?php echo $id; ?>'  value = 'All' onclick ='post(name)' />
              </div>
              </div>
    
<?php } 
<<<<<<< HEAD
      include 'application/views/PaginatorView.php';
=======
      include 'application/views/PaginatorView.php';?>
>>>>>>> 6428d6e0b38d1e5f99710c52d0a8a741d5a0e5c2
