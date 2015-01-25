<?php
/**
 * The template for displaying Home page.
 *
 * @file      index.php
 * @package   Enang news
 * @author    Chinh Tran
 * 
 **/
?>
<?php get_header();?>

<div id="main">
		<!--div id="mainTop">
			<div id="bannerTop" class="hidden-xs">
				<img src="images/banner-top.jpg" alt="banner top"/>
			</div>
		</div-->
		<div id="mainNews" class="container">
			<div id="containerTopRow" class="row">
				<div id="homecenterNews"  class="centerNews col-sm-9 col-md-7 col-lg-7" >
					<div id="carousel-feature-posts" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carousel-feature-posts" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-feature-posts" data-slide-to="1" class=""></li>
							<li data-target="#carousel-feature-posts" data-slide-to="2" class=""></li>
							<li data-target="#carousel-feature-posts" data-slide-to="3" class=""></li>
							<li data-target="#carousel-feature-posts" data-slide-to="4" class=""></li>
							<li data-target="#carousel-feature-posts" data-slide-to="5" class=""></li>
						</ol>
						<div class="carousel-inner">
                                
                            <?php $i = 0;
                                $postID_exclude = array(); 
                                    $args = array(
                                        'category__not_in'         => 10,
                                        'meta_key'     => 'post_views_count',
                                        array(
                                			'hour'      => 72,
                                			'compare'   => '<=',
                                		),
                                    	'posts_per_page'      => 6,
                                        'orderby'             =>  'meta_value_num',
                                        'order'               => 'DESC',  
                                     );
                                        
                                $the_query = new WP_Query($args);
                                // The Loop
                                if ( $the_query->have_posts() ) {
                                	
                                	while ( $the_query->have_posts() ) {
                                		$the_query->the_post();
                                        array_push($postID_exclude,get_the_ID());  
                                        ?>
                                        <div class="item <?php if($i <= 0) echo 'active';?>" style="background: url(<?php echo get_bg_image(get_the_ID()); ?>) no-repeat; background-size: cover;"> 
            								<img class="f-image"  src="<?php echo get_bg_image(get_the_ID()); ?>" alt="<?php the_title();?>">
            								<div class="carousel-caption"> 
            									<a href="<?php esc_url(the_permalink())?>"><?php the_title();?></a>
            									<br>
            									<?php echo get_cate_name(get_the_ID())?>
            								</div>
            								<p class="gradient"></p>
            							</div>
                                        
						      <?php $i++; }} wp_reset_postdata(); ?>
                        
							
						</div> 
						
					</div><!--end carousel-feature-posts-->
					<div class="other-post-div hidden-xs">
						<ul class="other-post">
                            <?php 
                                     $args = array(
                                        'category__not_in'         => 10,
                                        'meta_key'     => 'post_views_count',
                                        array(
                                			'hour'      => 72,
                                			'compare'   => '<=',
                                		),
                                    	'posts_per_page'      => 4,
                                        'post__not_in'        =>$postID_exclude,
                                        'orderby'             =>  'meta_value_num',
                                        'order'               => 'DESC',  
                                     );
                                        
                                $the_query = new WP_Query($args);
                                // The Loop
                                if ( $the_query->have_posts() ) {
                                	
                                	while ( $the_query->have_posts() ) {
                                		$the_query->the_post();
                                        array_push($postID_exclude,get_the_ID());  
                                        ?>
                                        <li> 
            								<a href="<?php esc_url(the_permalink())?>">
            									<div class="left-other-post"> 
            										<img class="img-other-post" src="<?php echo get_bg_image(get_the_ID()); ?>" alt="<?php the_title();?>">
            										<?php echo get_cate_name_re(get_the_ID())?>
            									</div>
            									<div class="right-other-post"> <?php the_title();?></div> 
            								</a>
            							</li>
                                        
						      <?php  }} wp_reset_postdata(); ?>
                        
						</ul>
					</div><!-- end other-post-div-->
				</div><!-- end homecenterNews-->
				
				<div id="homecolLeftNews" class="hidden-xs col-sm-3 hidden-md col-lg-2">
					<div class="news-list">
						<ul>
                            <?php   $i = 0;
                                    $args = array(
                                        'category__not_in'         => 10,
                                    	'posts_per_page'      => 6,
                                        'post__not_in'        =>$postID_exclude
                                        );
                                        
                                $the_query = new WP_Query($args);
                                // The Loop
                                if ( $the_query->have_posts() ) {
                                	
                                	while ( $the_query->have_posts() ) {
                                		$the_query->the_post();
                                        array_push($postID_exclude,get_the_ID());  
                                        if($i <= 0){
                                        ?>
                                        <li> 
                                			<a href="<?php esc_url(the_permalink())?>" style="background:url(<?php echo get_bg_image(get_the_ID()); ?>) no-repeat;width: 100%; height: 92px; display: block; margin-bottom: 8px; background-size: cover;" class="img"><img src="<?php echo get_bg_image(get_the_ID()); ?>" alt="<?php the_title();?>" style="display: none;"></a>
                                			<a href="<?php esc_url(the_permalink())?>"> <?php the_title();?></a> 
                                		</li>
                                        
                                        
                                        <?php } else{?>
                                        <li> <a href="<?php esc_url(the_permalink())?>"> <?php the_title();?></a> </li>
                                        
						      <?php  }  $i++; }} wp_reset_postdata(); ?>
                            
						</ul>
					</div>
				</div>
				
				<div id="colRightNewsBox" class="hidden-xs hidden-sm col-md-3 col-lg-3">
					<div class="">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/banner-300x250.jpg" alt="banner 300x250"/>
					</div>
					<div class="">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/banner-300x250.jpg" alt="banner 300x250"/>
					</div>
				</div>
				<div id="cafe-webtretho-news" class="hidden-xs">
					<ul class="cafe-post-news">
                         <?php  $args = array(
                                        'category_name' => 'doc-bao',
                                    	'posts_per_page'      => 6,
                                        'post__not_in'        =>$postID_exclude,
                                        'orderby'             =>  'meta_value_num',
                                        'order'               => 'DESC',  
                                     );
                                        
                                $the_query = new WP_Query($args);
                                // The Loop
                                if ( $the_query->have_posts() ) {
                                	
                                	while ( $the_query->have_posts() ) {
                                		$the_query->the_post();
                                        array_push($postID_exclude,get_the_ID()); 
                                        ?>
                                        <li> 
                							<a href="<?php esc_url(the_permalink())?>">
                								<div class="cafe-image"> <img src="<?php echo get_bg_image(get_the_ID()); ?>" alt="<?php the_title();?>"></div>
                								<div class="cafe-title"> <?php the_title();?></div> </a>
                						</li>
                                       
						      <?php  }} wp_reset_postdata(); ?>
                    
					</ul>
				</div>
				<div id="mainTop">
					<div id="bannerTop" class="hidden-xs">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/banner-top.jpg" alt="banner top"/>
					</div>
				</div>
				<div id="containerNews">
					<div id="colLeftNewsContent" class="hidden-xs col-sm-3 hidden-md col-lg-2" >
						<div id="sticky-left-sidebar">
							<h2 class="title-h2">Chào buổi sáng</h2>
							<div class="news-list">
								<ul>
                                    <?php  $args = array(
                                        'category_name' => 'chao-buoi-sang',
                                    	'posts_per_page'      => 9,
                                        'post__not_in'        =>$postID_exclude,
                                        'orderby'             =>  'date',
                                        'order'               => 'DESC',  
                                     );
                                        
                                $the_query = new WP_Query($args);
                                // The Loop
                                if ( $the_query->have_posts() ) {
                                	
                                	while ( $the_query->have_posts() ) {
                                		$the_query->the_post();
                                        ?>
                                        <li> 
    										<a href="<?php esc_url(the_permalink())?>"> <?php the_title();?> </a> 
    									</li>
                                       
						      <?php  }} wp_reset_postdata(); ?>
                                								
								</ul>
							</div>
						</div>
					</div><!-- end colLeftNewsContent-->
					<div class="visible-xs">
						<div id="mobile_category_list" class="row visible-xs">
							<div class="item col-xs-6 clearfix">
								<div id="mobile_btn_rea" class="ctn_cateRea mobile_btn_category">
									<div> 
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/doc-bao"> 
											<span>Đọc báo</span>
										</a>
									</div>
								</div>
							</div>
							<div class="item col-xs-6 clearfix">
								<div id="mobile_btn_conf" class="ctn_cateConf mobile_btn_category">
									<div> 
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/tam-su"> 
											<span>Tâm sự</span>
										</a>
									</div>
								</div>
							</div>
							<div class="item col-xs-6 clearfix">
								<div id="mobile_btn_bea" class="ctn_cateBea mobile_btn_category">
									<div> 
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/lam-dep"> 
											<span>Làm đẹp</span>
										</a>
									</div>
								</div>
							</div>
							<div class="item col-xs-6 clearfix">
								<div id="mobile_btn_mom" class="ctn_cateMom mobile_btn_category">
									<div> 
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/me-va-be"> 
											<span>Mẹ và bé</span>
										</a>
									</div>
								</div>
							</div>
							<div class="item col-xs-6 clearfix">
								<div id="mobile_btn_exp" class="ctn_cateExp mobile_btn_category">
									<div> 
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/kinh-nghiem-hay"> 
											<span>Kinh nghiệm hay</span>
										</a>
									</div>
								</div>
							</div>
							<div class="item col-xs-6 clearfix">
								<div id="mobile_btn_nang" class="ctn_cateCaf mobile_btn_category">
									<div> 
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/giai-tri"> 
											<span>Giải trí</span> 
										</a>
									</div>
								</div>
							</div>
						
						</div>
					</div><!-- end visible-xs-->
					<div id="centerNewsContent" class=" col-sm-9 col-md-7 col-lg-7">
						<div id="gotoCenter" class="mainCt">
							<div class="navMainCt">
								<ul id="ctnNavCt" class="ctnNavCt">
									<li class="orangeNews chooseContentBox" id="docbao"> 
										<div class="navEnt sa_div active"><span class="nav_point"></span>Đọc báo</div>
                                        <input class="cate_slug" type="hidden" value="doc-bao"/>
										<span class="arrowSubCt" style="display: inline;"></span>
									</li>
									<li class="pinkNews chooseContentBox" id="tamsu"> 
										<div class="navCon sa_div" ><span class="nav_point"></span> Tâm sự</div>
                                        <input class="cate_slug" type="hidden" value="tam-su"/>
										<span class="arrowSubCt" style="display: inline;"></span>
									</li>
									<li class="greenNews chooseContentBox" id="lamdep"> 
										<div class="navBea sa_div"><span class="nav_point"></span> Làm đẹp</div>
                                        <input class="cate_slug" type="hidden" value="lam-dep"/>
										<span class="arrowSubCt" style="display: inline;"></span>
									</li>
									<li class="blueNews chooseContentBox" id="mevabe"> 
										<div class="navMum sa_div"><span class="nav_point"></span> Mẹ và bé</div>
                                        <input class="cate_slug" type="hidden" value="me-va-be"/>
										<span class="arrowSubCt" style="display: inline;"></span>
									</li>
									<li class="purpleNews chooseContentBox" id="giaitri"> 
										<div class="navExp sa_div"><span class="nav_point"></span> Giải trí</div>
										<input class="cate_slug" type="hidden" value="giai-tri"/>
                                        <span class="arrowSubCt" style="display: inline;"></span>
                                        
									</li>
								</ul>
							</div><!-- end navMainCt-->
							<div id="contentBox">
								<div id="docbao-tabs" class="activeBox nang_wtt"> 
									<input class="page cate_slug_box" type="hidden" value="doc-bao"> 
									<?php echo home_get_first_cate_new_posts();?>
				                </div>
							</div><!-- end contentBox-->
						</div><!-- end gotoCenter-->
						<div id="loadmoreajaxloader" style="display: none;"> 
							<img alt="Loading more content" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ajax-loader.gif">
						</div>
					</div><!-- end centerNewsContent-->
					<div id="colRightNews" class="hidden-xs hidden-sm col-md-3 col-lg-3">
						<div id="colRightNewsContainer">
							<div id="sticky-right-sidebar" class="">
								<h2 class="title-h2">Bài viết được yêu thích</h2>
								<div class="baivietyeuthich">
									<ul class="baiviet-list">
                                        <?php 
                                            $args = array(
                                                'meta_key'     => 'post_love_count',
                                                array(
                                        			'hour'      => 72,
                                        			'compare'   => '<=',
                                        		),
                                            	'posts_per_page'      => 6,
                                                'orderby'             =>  'meta_value_num',
                                                'order'               => 'DESC',  
                                             );
                                        
                                            $the_query = new WP_Query($args);
                                            // The Loop
                                            if ( $the_query->have_posts() ) {
                                            	
                                            	while ( $the_query->have_posts() ) {
                                            		$the_query->the_post();
                                                    ?>
                                                    <li> 
            											<a href="<?php esc_url(the_permalink())?>">
            												<div class="avatar-img"> 
            													<img src="<?php echo get_bg_image(get_the_ID()); ?>" alt="<?php the_title();?>">
            												</div>
            												<div class="right-list-baiviet">
            													<div class="content-baiviet"><?php the_title();?></div>
            												
            												</div> 
            											</a>
            										</li>
                                                    
                                                    
            						      <?php }} wp_reset_postdata(); ?>
                                    
									</ul>
								</div>
								<div id="div-gpt-ad-1373285386337-0">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/banner-300x250.jpg" alt="banner 300x250"/>
								</div>
							</div><!-- end sticky-right-sidebar-->
						</div> <!-- end colRightNewsContainer-->
					</div><!-- end colRightNews-->
				</div><!-- end containerNews-->
			</div><!-- end containerTopRow-->
		</div><!-- end mainNews-->
		<span class="sclTopNews hidden-xs" ></span>
   </div><!-- end main-->
   
    <!--script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.min.js"></script-->
    <!-- Optional: Incorporate the Bootstrap JavaScript plugins -->
    <!--script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.js"></script-->
	
  </body>

</html>