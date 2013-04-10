<?php
/**
 * Вюшка, що виводить повідомлення для редагування
 */     
	  echo "<form method ='POST' action = '/project/chief/update_message/update/$data[id]'  >";
	  echo "<p>Name: </p>";
          echo "<textarea name = 'Uname' class = 'Fields' cols = '10' rows = '2' wrap = 'virtual'>$data[name]</textarea><br>";	  
          echo "<p>Email: </p>";
	  echo "<textarea name = 'Uemail' class = 'Fields' cols = '10' rows = '2' wrap = 'virtual'>$data[email]</textarea><br>";	  
          echo "<p>Topic: </p>";
	  echo "<textarea name = 'Utopic' class = 'Fields' cols = '10' rows = '2' wrap = 'virtual'>$data[topic]</textarea><br>";
	  echo "<p>Message: </p>";
	  echo "<textarea name = 'Ul_text' class = 'Fields' cols = '50' rows = '5' wrap = 'virtual'>$data[l_text]</textarea><br>";	  
	  echo "<input type = 'submit' name = 'Ubut'; class = 'Buttons' value = 'Зберегти'/>";
	  echo "</form>";

