
<!DOCTYPE html>
<html style="margin-top: 0 !important;">
  <head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title(''); ?></title>
	
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	 <link type="text/css" rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/include/font-awesome-4.2.0/css/font-awesome.css">
	<!--[if IE ]><link type="text/css" media="all" rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/ie.css" /><![endif]-->
	<!--[if lt IE 9]><script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script><![endif]-->
	<!--[if IE 8]><script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/respond.src.js"></script><![endif]-->
	<!--[if !IE]><!-->
    <?php wp_head(); ?>
  </head>

  <body <?php if(is_single()) echo "class='bg-detail'" ;?>>
  <!--Fix Navigation Bar with drop down menu
  ================ -->
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
						</li>
						<li class="goods">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/tam-su"><span class="nav_point"></span>Tâm sự</a>
						</li>
						<li class="interior">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/lam-dep"><span class="nav_point"></span>Làm đẹp</a>
						</li>
						<li class="food">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/me-va-be"><span class="nav_point"></span>Mẹ và bé</a>
						</li>
						<li class="fashion">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/kinh-nghiem-hay"><span class="nav_point"></span>Kinh nghiệm hay</a>
						</li>
						<li class="culture">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/nha-cua"><span class="nav_point"></span>Nhà cửa</a>
						</li>
						<li class="travel hidden-sm">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/thu-gian"><span class="nav_point"></span>Thư giãn</a>
						</li>
						<li class="event hidden-sm">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/mua-sam"><span class="nav_point"></span>Mua sắm</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
    </header>