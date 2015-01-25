
<!DOCTYPE html>
<html style="margin-top: 0 !important;">
  <head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title(''); ?></title>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.min.js"></script>
	 <link type="text/css" rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/include/font-awesome-4.2.0/css/font-awesome.css">
	<!--[if IE ]><link type="text/css" media="all" rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/ie.css" /><![endif]-->
	<!--[if lt IE 9]><script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script><![endif]-->
	<!--[if IE 8]><script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/respond.src.js"></script><![endif]-->
	<!--[if !IE]><!-->
    
    <?php wp_head(); ?>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/main.js"></script>
    <!--script>
		 $(function(){
			var length = $('.navMainCt').offset().top + $('.navMainCt').height();
			//alert(length);
			$(window).scroll(function () {
				if ($(window).scrollTop() > length) {
					$('#sticky-left-sidebar').addClass('sticky');
					$('.navMainCt').addClass('mid-menu-fixed');
					$('#sticky-right-sidebar').addClass('sticky');
				} else {
					$('#sticky-left-sidebar').removeClass('sticky');
					$('.navMainCt').removeClass('mid-menu-fixed');
					$('#sticky-right-sidebar').removeClass('sticky');
				}
			});
		 });
		
</script-->
  </head>

  <body <?php if(is_single()) echo "class='bg-detail'" ;?>>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  <!--Fix Navigation Bar with drop down menu -->
    <header>
		<div class="navcontain navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="logo"/></a>
				</div>
				<div class="navbar-collapse collapse">
					<ul id="nav" class="nav navbar-nav">
						
						<li class="digital">
						   <a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/doc-bao"><span class="nav_point"></span>Đọc báo</a>
	                       <div class="lstEnt">
                               <ul class="ctn_lstNav">
                                   <li class="menu-item">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/tin-nong" >Tin nóng</a>
                                   </li>
                                   <li class="menu-item">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/tin-moi">Tin mới</a>
                                   </li>
                                   <li class="menu-item">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/doi-song">Đời sống</a>
                                   </li>
                                   <li class="menu-item">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/xa-hoi">Xã hội</a>
                                   </li>
                               </ul>
                           </div>
                        </li>
						<li class="goods">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/tam-su"><span class="nav_point"></span>Tâm sự</a>
						    <div class="lstEnt">
                               <ul class="ctn_lstNav">
                                   <li class="menu-item">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/nhat-ky" >Nhật ký</a>
                                   </li>
                                   <li class="menu-item">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/tinh-yeu">Tình yêu</a>
                                   </li>
                                   <li class="menu-item">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/chuyen-cong-viec">Chuyện công việc</a>
                                   </li>
                                   <li class="menu-item">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/hon-nhan-gia-dinh">Hôn nhân & gia đình</a>
                                   </li>
                                   
                               </ul>
                           </div>  
                        </li>
						<li class="interior">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/lam-dep"><span class="nav_point"></span>Làm đẹp</a>
						    <div class="lstEnt">
                               <ul class="ctn_lstNav">
                                   <li class="menu-item">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/lam-dep-lam-dep" >Làm đẹp+</a>
                                   </li>
                                   <li class="menu-item">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/toc-dep">Tóc đẹp</a>
                                   </li>
                                   <li class="menu-item">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/dang-dep">Dáng đẹp</a>
                                   </li>
                                   <li class="menu-item">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/duong-da">Dưỡng da</a>
                                   </li>
                                   <li class="menu-item">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/thoi-trang">Thời trang</a>
                                   </li>
                               </ul>
                           </div>  
                        </li>
						<li class="food">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/me-va-be"><span class="nav_point"></span>Mẹ và bé</a>
	                        <div class="lstEnt">
                               <ul class="ctn_lstNav">
                                   <li class="menu-item">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/ba-bau" >Bà bầu</a>
                                   </li>
                                   <li class="menu-item">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/nuoi-con">Nuôi con</a>
                                   </li>
                                   <li class="menu-item">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/day-con">Dạy con</a>
                                   </li>
                                   <li class="menu-item">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/tin-tuc-cho-me">Tin tức cho mẹ</a>
                                   </li>
                                   <li class="menu-item">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/0-1-tuoi">0-1 tuổi</a>
                                   </li>
                                   <li class="menu-item">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/1-3-tuoi">1-3 tuổi</a>
                                   </li>
                                   <li class="menu-item">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/cau-hoi-thuong-gap">Câu hỏi thường gặp</a>
                                   </li>
                               </ul>
                           </div>  
                        </li>
                        <li class="travel hidden-sm">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/giai-tri"><span class="nav_point"></span>Giải trí</a>
						   <div class="lstEnt">
                               <ul class="ctn_lstNav">
                                   <li class="menu-item">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/cuoi-hai">Cười & hài</a>
                                   </li>
                                   <li class="menu-item">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/do-vui">Đố vui</a>
                                   </li>
                                   <li class="menu-item">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/anh-dep" >Ảnh đẹp</a>
                                   </li>
                                   <li class="menu-item">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/chem-gio">Chém gió</a>
                                   </li>
                               </ul>
                           </div>  
                        </li>
						<li class="fashion">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/kinh-nghiem-hay"><span class="nav_point"></span>Kinh nghiệm hay</a>
						   <div class="lstEnt">
                               <ul class="ctn_lstNav">
                                   <li class="menu-item">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/an-gi-o-dau">Ăn gì & ở đâu</a>
                                   </li>
                                   <li class="menu-item">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/bep-nuong">Bếp & nướng</a>
                                   </li>
                                   <li class="menu-item">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/du-lich-trai-nghiem">Du lịch & trải nghiệm</a>
                                   </li>
                                   <li class="menu-item">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/suc-khoe-doi-song">Sức khỏe & đời sống</a>
                                   </li>
                                   <li class="menu-item">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/gia-dinh-nha-cua">Gia đình & nhà cửa</a>
                                   </li>
                                   <li class="menu-item">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/cong-viec-hoc-tap">Công việc & học tập</a>
                                   </li>
                                   
                               </ul>
                           </div>  
                        </li>
                        <li class="show hidden-sm">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/show-biz"><span class="nav_point"></span>Show biz</a>
						   <div class="lstEnt">
                               <ul class="ctn_lstNav">
                                   <li class="menu-item">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/chuyen-lang-sao">Chuyện làng sao</a>
                                   </li>
                                   <li class="menu-item">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/hau-truong" >Hậu trường</a>
                                   </li>
                                   <li class="menu-item">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/truyen-hinh">Truyền hình</a>
                                   </li>
                                   <li class="menu-item">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/am-nhac">Âm nhạc</a>
                                   </li>
                                   <li class="menu-item">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/phim-hay">Phim hay</a>
                                   </li>
                                   
                               </ul>
                            </div>
                        </li>
                        
						<li class="culture">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/nha-cua"><span class="nav_point"></span>Nhà cửa</a>
						   <div class="lstEnt">
                               <ul class="ctn_lstNav">
                                   <li class="menu-item">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/khong-gian-dep">Không gian đẹp</a>
                                   </li>
                                   <li class="menu-item">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/phong-thuy">Phong thủy</a>
                                   </li>
                                   <li class="menu-item">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/trang-tri-thiet-ke">Trang trí & thiết kế</a>
                                   </li>
                                   
                               </ul>
                            </div>
                        </li>
						
						
                        <li class="event hidden-sm">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/mua-sam"><span class="nav_point"></span>Mua sắm</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
    </header>