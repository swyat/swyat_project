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
        
                 echo "<div class = 'Message'>";   
                 echo "<p class = 'Mesnumb'>".($counter++)."</p>"; 
		 echo "<p class = 'Mesname'>Name : ".$name."</p>"; 
		 echo "<p class = 'Mesname'>Email : ".$email."</p>";
		 echo "<p class = 'Mesname'>Topic : ".$topic."</p>";
		 echo "<p class = 'Mesmessage' >Message: </p><textarea id = '$id' class = 'Textarea' readonly = 'readonly' rows='4' cols='40'>".$text_s."</textarea>";
		 echo "<div class = 'Div_buttons'>";
		 echo "<input type = 'button' class = 'Buttons' name = '$id'  value = 'Delete' onclick = 'deleteMessage(name)'/>";
                 echo "<input type = 'button' class = 'Buttons' name = '$id'  value = 'Edit' onclick = 'editMessage(name)'/>";
		 echo "<input type = 'button' class = 'Buttons' name = '$id'  value = 'All' onclick ='post($id)' />";
		 echo "</div>";		 
		 echo "</div>";
		 echo "<hr/>";
    }
  
