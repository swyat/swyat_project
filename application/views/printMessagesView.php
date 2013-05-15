<?php
$size = count($data);
    $counter = 1;
    for($i=1; $i<$size+1; $i++){                  
	$id = $data[$i]['id'];
	$name = $data[$i]['name'];	
	$email = $data[$i]['email'];	
	$topic = $data[$i]['topic'];
	$text_s = $data[$i]['s_text'];	
	$keyWords = $data[$i]['keyWords'];
	
/**
 * Вюшка, що виводить всі коли-небудь написані повідомлення
 */
   ?>     
           <div class = 'Message'> 
              <p class = 'Mesnumb'><?php echo $counter++; ?></p>
  	      <p class = 'Mesname'>Name : <?php echo $name ?></p> 
 	      <p class = 'Mesname'>Email :  <?php echo $email ?></p>
	      <p class = 'Mesname'>Topic :  <?php echo $topic ?><p>
              <p class = 'Mesmessage' >Message: </p><p id ="<?php echo $id; ?>"><?php echo $text_s; ?></p>
	      <p class = 'Mesname'>Keywords :  <?php echo $keyWords ?><p>
              <div class = 'Div_buttons'>        
              
              <input type = 'button' class = 'Buttons' name = '<?php echo $id; ?>'  value = 'All' onclick ='post(name)' />
              </div>
           </div>
<?php }