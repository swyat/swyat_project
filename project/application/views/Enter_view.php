<div style ="text-align: center">
<p>Avtorization</p>
<form action ="/project/reg_avt/avtorization" method ="POST"> 
 <p> Enter your name:</p><input type ="text" name ="login"/><p><?php $data ?></p>
  <p style ="color: red"><?php if ($data["login"]=="1")  echo "Name введено вірно"; 
                               else echo $data["login"];?></p>
 <p> Enter your password:</p><input type ="password" name ="password"/>
 <p style ="color: red"><?php if ($data["login"]=="1") { echo "Password введено вірно"; 
                                header( 'Refresh: 2; url=http://localhost/project/' );}
                                else echo $data["password"] ?></p>
<input type ="submit" name ="submit"/>
</form>
</div>