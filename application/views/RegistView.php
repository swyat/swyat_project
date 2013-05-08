<div style ="text-align: center">
    <p>Registration</p>
      
<form action ="/project/RegAvt/registration" method ="POST"> 
 <p> Enter your name:</p><input type ="text" id ="login" name ="login"/>
 <p style ="color: red"><?php if ($data["login"]=="1")  echo "login vveden virno"; else echo $data["login"]; ?></p> 
 <p> Enter your password:</p><input type ="password" id ="password" name ="password"/>
 <p> Enter your password twise:</p><input type ="password" name ="password2"/><br/>
 <p style ="color: red"><?php if ($data["login"]=="1"){echo "parol vveden virno";
                               header( 'Refresh: 2; url=http://localhost/project/' );}
                               else echo $data["password"]; ?> </p>
<input type ="submit" name ="ok"/>
</form>
</div>
