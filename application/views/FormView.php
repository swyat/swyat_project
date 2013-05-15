<?php   
         session_start();
         if(isset($_SESSION['login'])){ 
            include 'application/views/ExitView.php';   
         } 
         else {
            include 'application/views/RegAvtView.php';
         }
         include 'application/views/SearchView.php';
         ?>     
       
            <form method ="POST" action ="/project/Chief/create_message/" class ="Formstyle" style ="text-align: center">
                <p class = "Text">Send a new message</p>
                <p class ="Formname" >Enter your name </p><input type ="text" class = "FormFields1" name ="name" required ="required"/>
                <p class ="Formemail" >Enter your email </p><input type ="email" class = "FormFields2" name ="email" />
                <p class ="Formtopic" >Topic </p> <input type ="text" class = "FormFields3" name ="topic"/>
                <p class ="Formmessage" >Message </p><textarea class = "FormFields4" id ="idTextArea" name ="l_text" ></textarea><br/>
                <input type ="button" value ="b" name ="b" onclick ="setTextArea(name)"/>
                <input type ="button" value ="i" name ="i" onclick ="setTextArea(name)"/>
                <input type ="button" value ="u" name ="u" onclick ="setTextArea(name)"/>
                <br/>
                <p class ="Formtopic" >Keywords </p> <input type ="text" class = "FormFields3" name ="keyWords"/></br> 
                <input type ="submit" class = "FormButtons" name ="send" value ="Send"/>
                <input type ="reset" class = "FormButtons" value ="Clear"/>
                <hr/><hr/>
            </form>