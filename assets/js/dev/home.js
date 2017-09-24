/*
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
    */