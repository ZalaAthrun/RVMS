var base_url = "http://127.0.0.1/RVMS/index.php/";/*
    SPA - Script for RVMS
*/
    /*
        Authentication Function
    */
$(document).ready(function(){
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
                    // $("#main-content").load(base_url+"home/index");
                    window.location.replace(base_url+"home/index");
                    history.pushState({}, 'RVMS - Home', base_url+'home/index');
                }else{
                    // display notif
                }
            }
        });
    });

    $('body').on('click','#logout-link',function(){
        $.ajax({
            url : base_url+'authentication/logout',
            type : "POST",
            cache : false,
            processData : false,
            success : function(data){
                var response = JSON.parse(data);
                if(response.logout){
                    // redirect to logout
                    window.location.replace(base_url+"authentication/index");
                }else{
                    // display notif
                }
            }
        });
    });
});

    /*
        End Authentication Function
    */var base_url = "http://127.0.0.1/RVMS/index.php/";/*
    SPA - Script for RVMS
*/
    /*
        Home Management Function
    */

    $(document).ready(function(){
        $('body').on('click','#home-link',function(){
            $('#main-content').load(base_url+"home/index");
            history.pushState({}, 'RVMS - Home', base_url+'home/index');
        });
    });

    /*
        End of Home Management Function
    *//*
    SPA - Script for RVMS
*/
    /*
        User Management Function
    */
 
    $(document).ready(function(){

        // open user management page
        $('body').on('click','#user-link',function(){
            $('#main-content').load(base_url+"user/index");
            history.pushState({}, 'RVMS - User Management', base_url+'user/index');
        });

        // display user form
        $('body').on('click','#user-add',function(){
            $('#main-content').load(base_url+"user/addForm");
            history.pushState({}, 'RVMS - User Management', base_url+'user/addForm');
        });

        // submit user add form
        $('body').on('click','#user-add-submit',function(){
            var addForm = $('#user-add-form').serialize();
            $.ajax({
                url : base_url+"user/add",
                type : "POST",
                data : addForm,
                mimeType : "multipart/form-data",
                cache : false,
                processData : false,
                success : function(data){
                    var response = JSON.parse(data);
                    if(response.userAdd){
                        history.pushState({}, 'RVMS - Home', base_url+'user/index');
                        alertify.alert("Pengguna Berhasil ditambahkan");
                        $('#main-content').load(base_url+"user/index");
                    }else{
                         //display notif
                    }
                }
            });
        });

        $('body').on('click','#user-remove-button',function(){
            alertify.confirm("Menghapus Pengguna","Apakah anda yakin ingin menghapus pengguna?",
                    function(){
                    // delete confirmed
                        $.ajax({
                            url : base_url+"user/delete/"+$('#user-remove-button').data('userid'),
                            type : "POST",
                            cache : false,
                            success: function(data){
                                var response = JSON.parse(data);
                                if(response.deleteUser){
                                    alertify.alert("Pengguna berhasil dihapus");
                                    history.pushState({}, 'RVMS - Home', base_url+'user/index');
                                    $('#main-content').load(base_url+"user/index");
                                }else{
                                    alertify.alert("Pengguna gagal dihapus");
                                }
                            }
                        });
                    },
                    function(){
                        // cancel delete
                    }
            );
        });

        // reset password
        $('body').on('click','#user-reset-password-button',function(){
            var name = $(this).closest("tr").find("#user-name").text();  
            changePassword(name,$('#user-reset-password-button').data('userid'));
        });

        function changePassword(name=null,id){
            alertify.prompt('Anda akan mengganti kata sandi untuk pengguna '+name,'Kata sandi baru','',
                function(evt,value){
                    var old = value;
                    alertify.prompt("OK");
                },
                function(){
                    
                }
            );
        }

    });

    /*
        End of User Management Function
    */