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
                    var response = JSON.parse(data);
                    if(response.login){
                        // redirect
                    }else{
                        // display notif
                    }
                }
            });

        });
        

        /*
            End Login Function
        */
    });