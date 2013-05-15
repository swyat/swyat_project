<form method ="POST" action ="/project/Search/searching" >
   <?php  foreach ($masEl as $el){
       echo $el;
   }
?>
    <input type ="submit" id="submitseach" value ="Search"/></br>
</form>
   <?php
   foreach($masUrl as $url){?> 
     <?php  echo $url;
   }
  // include 'application/views/PaginatorView.php';
   
   include 'application/views/printMessagesView.php';
   
  //   include 'application/views/PaginatorView.php';