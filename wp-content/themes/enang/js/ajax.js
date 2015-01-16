
$(document).ready(function() {
    
    //var cate_slug = 'doc-bao'; //default active home middle category is doc-bao
    $('#ctnNavCt li .sa_div').click(function(e){
        e.preventDefault();
        
            var setpos = $('#mainTop').offset().top;
            $('html, body').animate({
                scrollTop: setpos
            }, 10);
            
           $('#ctnNavCt li .sa_div').removeClass('active');
           $(this).addClass('active');
          
           
           $('#contentBox').find('.activeBox').remove();//remove activeBox
           
           var cate_slug = $(this).parent().find('.cate_slug').val();//get category slug 
           
           switch(cate_slug){
                case 'doc-bao':
                    var content = '<div id="docbao-tabs" class="activeBox nang_wtt"> <input class="page cate_slug_box" type="hidden" value="doc-bao"/> </div>';
                    $('#contentBox').append(content);
                    break;
                case 'tam-su':
                    var content = '<div id="tamsu-tabs" class="activeBox nang_wtt"> <input class="page cate_slug_box" type="hidden" value="tam-su"/> </div>';
                    $('#contentBox').append(content);
                    break;
                case 'lam-dep':
                    var content = '<div id="lamdep-tabs" class="activeBox nang_wtt"> <input class="page cate_slug_box" type="hidden" value="lam-dep"/> </div>';
                    $('#contentBox').append(content);
                    break;
                case 'me-va-be':
                    var content = '<div id="mevabe-tabs" class="activeBox nang_wtt"> <input class="page cate_slug_box" type="hidden" value="me-va-be"/> </div>';
                    $('#contentBox').append(content);
                    break;
                case 'giai-tri':
                    var content = '<div id="giaitri-tabs" class="activeBox nang_wtt"> <input class="page cate_slug_box" type="hidden" value="giai-tr"/> </div>';
                    $('#contentBox').append(content);
                    break;
                default:
                    break;
           }
           
           
           var temp_date_1 = '';
           var current_date_1 = '';
           if($('.lastpost_date:last').length <= 0)
           {
                current_date_1 = '2020-12-12';
           }
           else
           {
                current_date_1 = $('.lastpost_date:last').val();
           }
           
           if($('.activeBox').length > 0 )
           {    console.log(current_date_1);
                $('#loadmoreajaxloader').show();
                   $.ajax({
                       type : 'POST',
                       data : {'action' : 'home_get_cate_new_posts', 'cate_slug': cate_slug},
                       url : AJAX.url,
                       success : function (output){
                         $('#contentBox').find('.activeBox').append(output);
                         $('#loadmoreajaxloader').hide();          
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
            var length = $('.navMainCt').offset().top + $('.navMainCt').height();
            $(window).scroll(function() {
                
                if ($(window).scrollTop() > length) {
					$('#sticky-left-sidebar').addClass('sticky');
					$('.navMainCt').addClass('mid-menu-fixed');
					$('#sticky-right-sidebar').addClass('sticky');
				} else {
					$('#sticky-left-sidebar').removeClass('sticky');
					$('.navMainCt').removeClass('mid-menu-fixed');
					$('#sticky-right-sidebar').removeClass('sticky');
				}
                
                if($(window).scrollTop() + $(window).height() > $(document).height()-100 && $('#no_news').length <= 0) {
                    
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
        var check_finish_response = 0;//check whether ajax response finished load
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