<?php   
         session_start();
         if(isset($_SESSION['login'])){ 
            include 'application/views/ExitView.php';   
         } 
         else include 'application/views/RegAvtView.php';?>     
            <form method ="POST" action ="/project/Chief/create_message/" class ="Formstyle" style ="text-align: center">
                <p class = "Text">Send a new message</p>
                <p class ="Formname" >Enter your name </p><input id ="name" type ="text" class = "FormFields1" name ="name"  required ="required"/>
                <p class ="Formemail" >Enter your email </p><input  id ="email" type ="email" class = "FormFields2" name ="email" />
                <p class ="Formtopic" >Topic </p> <input id ="topic" type ="text" class = "FormFields3" name ="topic"/>
                <p class ="Formmessage" >Message </p><textarea id ="idTextArea" class = "FormFields4" name ="l_text" ></textarea><br/>
                <input id ="bBut" type ="button" value ="b" name ="b" onclick ="setTextArea(name)"/>
                <input id ="iBut" type ="button" value ="i" name ="i" onclick ="setTextArea(name)"/>
                  <input id ="uBut" type ="button" value ="u" name ="u" onclick ="setTextArea(name)"/>
                <br/>
                <input type ="submit" class = "FormButtons" name ="send" value ="Send"/>
                <input type ="reset" class = "FormButtons" value ="Clear"/>
                <hr/><hr/>
            </form>