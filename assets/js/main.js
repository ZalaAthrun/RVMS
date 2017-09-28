/*
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
        */var base_url = "http://127.0.0.1/RVMS/index.php/"; /*
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
    */    /*
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
                    var id = $(this).closest("tr").find("#user-remove-button").data('userid');
                    var row = $(this).closest("tr");
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
                                            row.remove();
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
    */    /*
        Vehicle Management Function
    */
 
    $(document).ready(function(){
                // open vehicle management page
                $('body').on('click','#vehicle-link',function(){
                    $('#main-content').load(base_url+"vehicle/index");
                    history.pushState({}, 'RVMS - Vehicle Management', base_url+'vehicle/index');
                });
        
                // display vehicle form
                $('body').on('click','#vehicle-add',function(){
                    $('#main-content').load(base_url+"vehicle/addForm");
                    history.pushState({}, 'RVMS - Vehicle Management', base_url+'vehicle/addForm');
                });
        
                // submit vehicle add form
                $('body').on('click','#vehicle-add-submit',function(){
                    var addForm = $('#vehicle-add-form').serialize();
                    $.ajax({
                        url : base_url+"vehicle/add",
                        type : "POST",
                        data : addForm,
                        mimeType : "multipart/form-data",
                        cache : false,
                        processData : false,
                        success : function(data){
                            var response = JSON.parse(data);
                            if(response.vehicleAdd){
                                 history.pushState({}, 'RVMS - Vehicle Management', base_url+'vehicle/index');
                                 alertify.alert("Kendaraan berhasil ditambahkan");
                                 $('#main-content').load(base_url+"vehicle/index");
                            }else{
                                 //display notif
                                 alertify.alert("Tidak bisa menambahkan kendaraan");
                            }
                        }
                    });
                });
        
                $('body').on('click','#vehicle-remove-button',function(){
                    var name = $(this).closest("tr").find("#vehicle-name").text();
                    var id = $(this).closest("tr").find("#vehicle-remove-button").data('vehicleid');
                    var row = $(this).closest("tr");
                    alertify.confirm("Konfirmasi Penghapusan Kendaraan","Apakah anda yakin ingin menghapus kendaraan "+ name+ "?",
                            function(){
                            // delete confirmed
                                $.ajax({
                                    url : base_url+"vehicle/delete/"+id,
                                    type : "POST",
                                    cache : false,
                                    success: function(data){
                                        var response = JSON.parse(data);
                                        if(response.deleteVehicle){
                                            alertify.alert("Kendaraan berhasil dihapus");
                                            row.remove();
                                        }else{
                                            alertify.alert("Kendaraan gagal dihapus");
                                        }
                                    }
                                });
                            },
                            function(){
                                // cancel delete
                            }
                    );
                });
        
                // edit vehicle
                $('body').on('click','#vehicle-edit-button',function(){
                     var id = $(this).closest("tr").find("#vehicle-remove-button").data('vehicleid');
                     var name = $(this).closest("tr").find("#vehicle-name").text();
                     $(this).closest("tr").find("#vehicle-name").html("<input type=\"text\" class=\"form-control\" name=\"vehicle-add-name\" id=\"vehicle-add-name\" value=\""+name+"\">");
                     var number = $(this).closest("tr").find("#vehicle-number").text();
                     $(this).closest("tr").find("#vehicle-number").html("<input type=\"text\" class=\"form-control\" name=\"vehicle-add-number\" id=\"vehicle-add-number\" value=\""+number+"\">");
                     var year = $(this).closest("tr").find("#vehicle-year").text();
                     $(this).closest("tr").find("#vehicle-year").html("<input type=\"text\" class=\"form-control\" name=\"vehicle-add-year\" id=\"vehicle-add-year\" value=\""+year+"\">");
                     var rentalrates = $(this).closest("tr").find("#vehicle-rentalrates").text();
                     $(this).closest("tr").find("#vehicle-rentalrates").html("<input type=\"text\" class=\"form-control\" name=\"vehicle-add-rentalrates\" id=\"vehicle-add-rentalrates\" value=\""+rentalrates+"\">");
                     var kilometer = $(this).closest("tr").find("#vehicle-kilometer").text();
                     $(this).closest("tr").find("#vehicle-kilometer").html("<input type=\"text\" class=\"form-control\" name=\"vehicle-add-kilometer\" id=\"vehicle-add-kilometer\" value=\""+kilometer+"\">");      
                     $(this).closest("tr").find("#vehicle-edit").html("<button type=\"button\" class=\"btn btn-primary btn-flat\" id=\"vehicle-save-edit-button\" data-vehicleid=\""+id+"\">Simpan</button>");
                });
                
                // save edit vehicle

                $('body').on('click','#vehicle-save-edit-button',function(){
                    var id = $(this).closest("tr").find("#vehicle-remove-button").data('vehicleid');
                    var name = $(this).closest("tr").find("#vehicle-name > #vehicle-add-name").val();
                    var number = $(this).closest("tr").find("#vehicle-number > #vehicle-add-number").val();
                    var year = $(this).closest("tr").find("#vehicle-year > #vehicle-add-year").val();   
                    var rentalrates = $(this).closest("tr").find("#vehicle-rentalrates > #vehicle-add-rentalrates").val();
                    var kilometer = $(this).closest("tr").find("#vehicle-kilometer > #vehicle-add-kilometer").val();
                    var post_data = {
                        "vehicle-name":name,
                        "vehicle-number":number,
                        "vehicle-year":year,
                        "vehicle-rentalrates":rentalrates,
                        "vehicle-kilometer":kilometer
                    };
                    $.ajax({
                        url : base_url+"vehicle/update/"+id,
                        type : "POST",
                        cache : false,
                        data : post_data,
                        success: function(data){
                            var response = JSON.parse(data);
                            if(response.updateVehicle){
                                alertify.alert("Kendaraan berhasil diubah");
                            }else{
                                alertify.alert("Kendaraan gagal diubah");
                            }
                        }
                    });
                    $(this).closest("tr").find("#vehicle-name").html(name);
                    $(this).closest("tr").find("#vehicle-kilometer").html(kilometer);
                    $(this).closest("tr").find("#vehicle-number").html(number);
                    $(this).closest("tr").find("#vehicle-year").html(year);
                    $(this).closest("tr").find("#vehicle-rentalrates").html(rentalrates);
                    $(this).closest("tr").find("#vehicle-edit").html("<button type=\"button\" class=\"btn btn-success btn-flat\" id=\"vehicle-edit-button\" data-vehicleid=\""+id+"\">Sunting</button>");
                });
        
            });

                /*
        End of Vehicle Management Function
    */