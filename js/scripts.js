    /**
     * Функція @link editMessage(parameters) викликає функцію контроллера щодо 
     * редагування повідомлення
     * @param {int} parameters  - Ідентифікатор повідомлення, що має редагуватись.
     */
       function editMessage(parameters)
       {
          var id = encodeURIComponent(parameters);
          window.location.href = 'http://localhost/project/Chief/edit_message/edit/'+id;
       }
       
    /**
     * Функція @link deleteMessage(parameters) викликає функцію контроллера щодо 
     * видалення повідомлення
     * @param {int} parameters  - Ідентифікатор повідомлення, що має видалятись.
     */      
      function deleteMessage(parameters)
      {
         var id = encodeURIComponent(parameters);
         window.location.href = 'http://localhost/project/Chief/delete_message/del/'+id;
      }
    /**
     * Функція @link post(parameters) педедає ajax-ом ідентифікатор повного повідомлення, 
     * а сервер повертає повідомлення, після чого воно виводиться в textarea;
     *  
     */ 
	  function post(parameters)
          {
              var short_text_id = parameters;
              $.ajax({
                  
                type: "POST",
                url: "http://localhost/project/Chief/change_message/",                                //"/project/application/views/chief.php",
                data: 'ident='+short_text_id,
                success: function(msg){
                       
			  $('[id='+short_text_id+']').html(msg);                   
                                      }
                     });
	  }

