var activeElement = null;
var PrevActiveElement = null;


function onFocus() 
{
    var e = window.event;  
    activeElement = e.srcElement; 
    
}

function onBlur() 
{
    PrevActiveElement = activeElement
    parameterid = PrevActiveElement.id;
    activeElement = null;
    window.sendDataForValidation();
}

window.onload = function(e)
{
    for (var i=0; i<document.forms.length; i++)
    {
        for (var j=0; j<document.forms[i].elements.length; j++)
        {
            document.forms[i].elements[j].onfocus = onFocus;
            document.forms[i].elements[j].onblur = onBlur;
        }
    }
     
    
}
function sendDataForValidation()
{
  // alert(PrevActiveElement.value);
    $.ajax({
        type: "POST",
        url: "/project/application/Validators.php",                                //project/init.php",                                //"/project/application/views/chief.php",
        data: 'data='+PrevActiveElement.value,
        success: function(msg){  
            var ob = eval(msg);
           
           var schethcik = 0;
           var printdata = "";
           for (var i in ob) {
             schethcik++
           }
           for (var j=0; j<(schethcik-1); j++){
              printdata = printdata + ob[j]; 
             // alert(printdata);
           }
            //alert(printdata);
            alert(ob.error); 
           // alert(parameterid);
            PrevActiveElement.value = printdata               
        }
    });
}
   
   
   
   
   
   
   
   
   
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
          
function setTextArea(butName){
        
    setTeg($("#idTextArea")[0], butName);    
}           
function setTeg (o, butName) {

    if (document.selection) {
        var s = document.selection.createRange();
        if (s.text) {
            s.text = '<'+butName+'>' + s.text + '</'+butName+'>';
            s.select();
        }
    } else if (typeof o.selectionStart === 'number') {
        var b = '<'+butName+'></'+butName+'>'.length,
        value = o.value,
        start = o.selectionStart,
        end = o.selectionEnd,
        len = end - start;
        o.value = value.substring(0, start) + '<'+butName+'>' + value.substring(start, end) + '</'+butName+'>' + value.substring(end);
        o.setSelectionRange(start + len + b, start + len + b);
    }
}

      
