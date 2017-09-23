/*
    SPA - Script for RVMS
*/
    $(document).ready(function(){
        /*
            Login Function
        */
    
        $('body').on('click', '#login-submit', function() { 
            var loginForm = $('#login-form').serialize();
            $.ajax({
                url : $('#login-form').attr('action'),
                type : "POST",
                data : loginForm,
                mimeType : "multipart/form-data",
                cache : false,
                processData : false,
                success : function(data){
                    alert(data.status);
                }
            });

        });
        

        /*
            End Login Function
        */
    });