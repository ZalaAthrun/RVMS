/*
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
                    // if(response.add){
                    //     history.pushState({}, 'RVMS - Home', base_url+'user/index');
                    // }else{
                    //      display notif
                    // }
                }
            });
        });

    });

    /*
        End of User Management Function
    */