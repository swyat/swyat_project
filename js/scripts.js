//var activeElement = null;
//var PrevActiveElement = null;
var changedElement = null;
var currentTime = null;
var timeLimit = null;

function onChange() 
{
    var e = window.event;  
    changedElement = e.srcElement;
    currentTime = Date.now();
    //alert ("currentTime"+currentTime+"\n"+"timeLimit"+timeLimit);
    if (currentTime>timeLimit){
        window.sendDataForValidation();
        timeLimit = 5000+currentTime;
    }
    else{
        alert ('zachecayte 5 sec');
    }
}

window.onload = function(e)
{
    for (var i=0; i<document.forms.length; i++)
    {
        for (var j=0; j<document.forms[i].elements.length; j++)
        {
              document.forms[i].elements[j].onchange = onChange;
        }
    }
     
    
}
function sendDataForValidation()
{
    $.ajax({
        type: "POST",
        url: "http://localhost/project/BadWords/SeachBadWords/",                                //project/init.php",                                //"/project/application/views/chief.php",
        data: 'data='+changedElement.value,
        success: function(msg){ 
            var ob = eval(msg);
            var schethcik = 0;
            var printdata = "";
           
                    for (var i in ob) {
                        if (is_int(i)){
                            schethcik++;
                        }
                    }
                        for (var j=0; j<schethcik; ++j){
                           printdata = printdata + ob[j]+' '; 
                        }  
               
                if ('error' in ob){  
                  alert(ob.error);
                }
                changedElement.value = printdata;               
        }
    });
}
function is_int(value) {
    if (parseInt(value) == value) {
        return true;
    }
    return false;
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
 

      
