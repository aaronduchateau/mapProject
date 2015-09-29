$(document.body).on('click', '#submitm' ,function()
{      
   $.ajax({
        url: "//formspree.io/chateauconcept@gmail.com", 
        method: "POST",
        data: {message: $('#messageFormPublic').val(),phone: $('#phoneFormPublic').val(), _replyto: $('#emailFormPublic').val()},
        dataType: "json",
        success: function(data){
          $('.hide-mail').hide(); 
          $('.show-mail').show();
        }
    });
});