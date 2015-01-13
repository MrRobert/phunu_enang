function home_ajax_scroll(){
    if($('#ctnNavCt').length > 0)
    {   alert('run here');
        //check whether ajax response finished load
        var check_finish_response = 0;
        var temp_date = '';
        if( $('#no_news').length <= 0){
            $(window).scroll(function() {
                if($(window).scrollTop() + $(window).height() > $(document).height()-100) {
                    var current_date = $('.lastpost_date:last').val();
                    var cate_slug = $('.cate_slug_box').val();
                    //console.log(cate_id);
                    if(temp_date === current_date)
                    {
                        check_finish_response = 1;
                    }
                    if( check_finish_response == 0)
                    {
                      $('#loadmoreajaxloader').show();
                        $.ajax({
                            type : 'POST',
                            data : {'action' : 'home_get_cate_new_posts','current_date': current_date, 'cate_slug': cate_slug},
                            url : AJAX.url,
                            success : function (output){
                                $('.activeBox').append(output);
                                $('#loadmoreajaxloader').hide();
                                check_finish_response = 0;
                                 
                            },
                            error: function () {
                                 console.log('Co loi xay ra');
                            }
                        });  
                    }    
                    temp_date= current_date;
                   
               }
            });
            
        }
    }
}
jQuery(document).ready(function($) {
    //var cate_slug = 'doc-bao'; //default active home middle category is doc-bao
    
    $('#ctnNavCt li .sa_div').click(function(){
           $('#ctnNavCt li .sa_div').removeClass('active');
           $(this).addClass('active');
          
           //remove activeBox
           $('#contentBox').find('.activeBox').remove();
           
           var current_date = $('.lastpost_date:last').val();
           //get category slug 
           cate_slug = $(this).parent().find('.cate_slug').val();
           switch(cate_slug){
                case 'doc-bao':
                    var content = '<div id="docbao-tabs" class="activeBox nang_wtt"> <input class="page cate_slug_box" type="hidden" value="doc-bao"> </div>';
                    $('#contentBox').append(content);
                    break;
                case 'tam-su':
                    var content = '<div id="tamsu-tabs" class="activeBox nang_wtt"> <input class="page cate_slug_box" type="hidden" value="tam-su"> </div>';
                    $('#contentBox').append(content);
                    break;
                case 'lam-dep':
                    var content = '<div id="lamdep-tabs" class="activeBox nang_wtt"> <input class="page cate_slug_box" type="hidden" value="lam-dep"> </div>';
                    $('#contentBox').append(content);
                    break;
                case 'me-va-be':
                    var content = '<div id="mevabe-tabs" class="activeBox nang_wtt"> <input class="page cate_slug_box" type="hidden" value="me-va-be"> </div>';
                    $('#contentBox').append(content);
                    break;
                case 'giai-tri':
                    var content = '<div id="giaitri-tabs" class="activeBox nang_wtt"> <input class="page cate_slug_box" type="hidden" value="giai-tr"> </div>';
                    $('#contentBox').append(content);
                    break;
                default:
                    break;
           }
           var finish_response = 0; //check ajax respond finished load
           if( $('.lastpost_date').length > 0 ||  $('#no_news').length > 0 ){
                finish_respond = 1;
           }
           if( finish_response == 0)
           {
                $('#loadmoreajaxloader').show();
                   $.ajax({
                       type : 'POST',
                       data : {'action' : 'home_get_cate_new_posts', 'current_date': current_date, 'cate_slug': cate_slug},
                       url : AJAX.url,
                       success : function (output){
                            $('#contentBox').find('.activeBox').append(output);
                            $('#loadmoreajaxloader').hide();
                            finish_response = 0;   
                                     
                       },
                       error: function () {
                            console.log('Co loi xay ra');
                       }
                });
           }
                
           
           
          
          
    });//end click event
    
    //console.log(cate_slug);
    //home_ajax_scroll();
    /*** Process ajax scroll for home page****/
    if($('#ctnNavCt').length > 0)
    {
        var check_finish_response = 0;//check whether ajax response finished load
        var temp_date = '';
        if( $('#no_news').length <= 0){
            $(window).scroll(function() {
                if($(window).scrollTop() + $(window).height() > $(document).height()-100) {
                    var current_date = $('.lastpost_date:last').val();
                    var cate_slug = $('.cate_slug_box').val();
                    //console.log(cate_id);
                    if(temp_date === current_date)
                    {
                        check_finish_response = 1;
                    }
                    if( check_finish_response == 0)
                    {
                      $('#loadmoreajaxloader').show();
                        $.ajax({
                            type : 'POST',
                            data : {'action' : 'home_get_cate_new_posts','current_date': current_date, 'cate_slug': cate_slug},
                            url : AJAX.url,
                            success : function (output){
                                $('.activeBox').append(output);
                                $('#loadmoreajaxloader').hide();
                                check_finish_response = 0;
                                 
                            },
                            error: function () {
                                 console.log('Co loi xay ra');
                            }
                        });  
                    }    
                    temp_date= current_date;
                   
               }
            });
            
        }
    }/*end if*/
    /******end ajax home page**********/
    
    /***Process ajax for category page***/
    if($('#cate_page').length > 0)
    {
        //check whether ajax response finished load
        var check_finish_response = 0;
        var temp_date = '';
        if( $('#no_news').length <= 0){
            $(window).scroll(function() {
                if($(window).scrollTop() + $(window).height() > $(document).height()-100) {
                    var current_date = $('.lastpost_date:last').val();
                    var cate_id = $('#cate_id').val();
                    //console.log(cate_id);
                    if(temp_date === current_date)
                    {
                        check_finish_response = 1;
                    }
                    if( check_finish_response == 0)
                    {
                      $('#loadmoreajaxloader').show();
                        $.ajax({
                            type : 'POST',
                            data : {'action' : 'get_cate_new_posts','current_date': current_date, 'cate_id': cate_id},
                            url : AJAX.url,
                            success : function (output){
                                $('#newest-post').append(output);
                                $('#loadmoreajaxloader').hide();
                                check_finish_response = 0;
                                 
                            },
                            error: function () {
                                 console.log('Co loi xay ra');
                            }
                        });  
                    }    
                    temp_date= current_date;
                   
               }
            });
            
        }
        
    }
    /**********/

    
    
});