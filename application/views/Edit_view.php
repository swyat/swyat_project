	  <form method ='POST' action = '/project/Chief/update_message/update/<?php echo $data['id'] ?>'>
	  <p>Name: </p>
          <textarea name = 'Uname' class = 'Fields' cols = '10' rows = '2' ><?php echo $data['name'] ?></textarea><br>	  
          <p>Email: </p>
	  <textarea name = 'Uemail' class = 'Fields' cols = '10' rows = '2' ><?php echo $data['email']; ?></textarea><br>	  
          <p>Topic: </p>
	  <textarea name = 'Utopic' class = 'Fields' cols = '10' rows = '2' ><?php echo $data['topic']; ?></textarea><br>
	  <p>Message: </p>
	  <textarea name = 'Ul_text' class = 'Fields' cols = '50' rows = '5' ><?php echo $data['l_text']; ?></textarea><br>	  
	  <input type = 'submit' name = 'Ubut' class = 'Buttons' value = 'Зберегти'/>
	  </form>

