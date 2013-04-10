/**
 * 
 */
       function editMessage(parameters)
       {
          var id = encodeURIComponent(parameters);
          window.location.href = 'http://localhost/project/chief/edit_message/edit/'+id;
       }
       
/**
 * 
 */       
      function deleteMessage(parameters)
      {
         var id = encodeURIComponent(parameters);
         window.location.href = 'http://localhost/project/chief/delete_message/del/'+id;
      }
/**
 * 
 */
	  function post(parameters)
          {
              var short_text_id = parameters;
              $.ajax({
                type: "POST",
                url: "http://localhost/project/chief/change_message/",                                //"/project/application/views/chief.php",
                data: 'ident='+short_text_id,
                success: function(msg){
			  $('[id='+short_text_id+']').html(msg);                   
                                      }
                     });
	  }

