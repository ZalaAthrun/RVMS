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
                    var id = $(this).closest("tr").find("#user-reset-password-button").data('userid');
                    alertify.confirm("Menghapus Pengguna","Apakah anda yakin ingin menghapus pengguna?",
                            function(){
                            // delete confirmed
                                $.ajax({
                                    url : base_url+"user/delete/"+id,
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
                    var id = $(this).closest("tr").find("#user-reset-password-button").data('userid');
                    alertify.prompt("Ubah Password Pengguna "+name,"Isi password baru","",
                        function(evt, value){
                            $.ajax({
                                url : base_url+"user/changePassword/"+id,
                                type : "POST",
                                data : {password : value},
                                cache : false,
                                success : function(data){
                                    var response = JSON.parse(data);
                                    if(response.changePassword){
                                        alertify.alert("Kata sandi "+name+" berhasil di ubah");
                                    }else{
                                        alertify.alert("Kata sandi "+name+" gagal di ubah");
                                    }
                                }
                            });
                        },
                        function(){
        
                        }
                    );
                });
        
            });

                /*
        End of User Management Function
    */