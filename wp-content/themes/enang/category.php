<?php
/**
 * The template for displaying category page.
 *
 * @file      category.php
 * @package   Enang news
 * @author    Chinh Tran
 * 
 **/
?>
<?php get_header();?>
<?php  $cat_ID = get_query_var('cat'); $category = get_category( $cat_ID );  ?>

<div id="main">
		<!--div id="mainTop">
			<div id="bannerTop" class="hidden-xs">
				<img src="images/banner-top.jpg" alt="banner top"/>
			</div>
		</div-->
		<div id="mainNews" class="container">
			<div id="containerTopRow" class="row">
				<div id="colLeftNews" class="hidden-xs col-sm-3 hidden-md col-lg-2">
					<div class="news-list">
						<ul>
                            <?php $i = 0;
                                $postID_exclude = array(); 
                                    $args = array(
                                        'cat'            => $cat_ID,
                                    	'posts_per_page' => 7
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
                                        <?php } else {?>
                                            <li> <a href="<?php esc_url(the_permalink())?>"> <?php the_title();?></a> </li>
                                        
						      <?php  } $i++; }} wp_reset_postdata(); ?>
                            
						</ul>
					</div>
				</div>
				<div id="centerNews"  class="centerNews col-sm-9 col-md-7 col-lg-7" >
                    <?php  $args = array(
                                 'cat'            => $cat_ID,
                   	            'posts_per_page'      => 1,
                                'post__not_in'        =>$postID_exclude,
                            );
                                        
                            $the_query = new WP_Query($args);
                            // The Loop
                            if ( $the_query->have_posts() ) {
                                	
                           	    while ( $the_query->have_posts() ) {
                              		$the_query->the_post();
                                    array_push($postID_exclude,get_the_ID());  
                            ?>
                                <div id="feature-post" class="feature-post">
            						<a class="fea_pos_img" style="background:url(<?php echo get_bg_image(get_the_ID()); ?>); background-size: cover;" title="<?php the_title();?>" href="<?php esc_url(the_permalink())?>">
            							<img src="<?php echo get_bg_image(get_the_ID()); ?>" alt="<?php the_title();?>">				
            						</a>
            						<h1>
            							<a title="<?php the_title();?>" href="<?php esc_url(the_permalink())?>">
            							 <?php the_title();?>
            							</a>
            						</h1>
            						<?php the_excerpt()?>
            					</div>
                                     
                                        
                    <?php }} wp_reset_postdata(); ?>
                    
					<div class="related-post">
						<ul class="other-post">
                            <?php  $args = array(
                                'cat'            => $cat_ID,
                   	            'posts_per_page'      => 3,
                                'post__not_in'        =>$postID_exclude,
                            );
                                        
                            $the_query = new WP_Query($args);
                            // The Loop
                            if ( $the_query->have_posts() ) {
                                	
                           	    while ( $the_query->have_posts() ) {
                              		$the_query->the_post();
                                    array_push($postID_exclude,get_the_ID());  
                            ?>
                                <li> 
    								<a href="<?php esc_url(the_permalink())?>" style="background:url(<?php echo get_bg_image(get_the_ID()); ?>) no-repeat; background-size: cover;" class="img">
    									<img class="img-related-post" src="<?php echo get_bg_image(get_the_ID()); ?>" alt="<?php the_title();?>">
    								</a>
    								<a href="<?php esc_url(the_permalink())?>"><p><?php the_title();?></p></a>
    							</li>
                                        
                    <?php }} wp_reset_postdata(); ?>
                    
						</ul>
					</div>
				</div>
				<div id="colRightNewsBox" class="hidden-xs hidden-sm col-md-3 col-lg-3">
					<?php get_search_form(true); ?>
                    
					<div class="banner_300x250">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/banner-300x250.jpg" alt="banner 300x250"/>
					</div>
					<div class="banner_300x250">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/banner-300x250.jpg" alt="banner 300x250"/>
					</div>
				</div>
				<div id="mainTop">
					<div id="bannerTop" class="hidden-xs">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/banner-top.jpg" alt="banner top"/>
					</div>
				</div>
				<div id="containerNews">
					<div id="colLeftNewsContent" class="hidden-xs col-sm-3 hidden-md col-lg-2" >
						<div id="sticky-left-sidebar">
							<h2 class="title-h2">Xem nhiều nhất</h2>
							<div class="news-list">
								<ul>
                                    <?php 
                                            $args = array(
                                                'cat'            => $cat_ID,
                                                'meta_key'     => 'post_views_count',
                                                array(
                                        			'hour'      => 72,
                                        			'compare'   => '<=',
                                        		),
                                            	'posts_per_page'      => 8,
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
                										<a href="<?php esc_url(the_permalink())?>"><?php the_title();?> </a> 
                									</li>
                                                    
            						      <?php }} wp_reset_postdata(); ?>
                                
																	
								</ul>
							</div>
						</div>
					</div><!-- end colLeftNewsContent-->
					
					<div id="centerNewsContent" class=" col-sm-9 col-md-7 col-lg-7">
						<div id="gotoCenter" class="mainCt">
							<div class="navMainCt cate ">
								<h2 class="title-h2" id="cate_page" >Mới nhất</h2>
							</div><!-- end navMainCt-->
							<div id="contentBox">
								<div id="newest-post" class="activeBox nang_wtt"> 
                                    <input class="page" id="cate_id" type="hidden" value="<?php echo $cat_ID; ?>"> 
                                    <input type="hidden" class="lastpost_date" value="<?php echo date('Y-m-d h:i:s');?>">
                                    <?php get_cate_new_first_posts();?>
									
                                   
							     </div>
                                
							</div>
						</div><!-- end gotoCenter-->
						<div id="loadmoreajaxloader"> 
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
				</div><!-- end colRightNewsContainer-->
			</div><!-- end colRightNews-->
		</div><!-- end containerNews-->
	</div><!-- end containerTopRow-->
		
   </div><!-- end mainNews-->
   </div><!-- end main-->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.min.js"></script>
    <!-- Optional: Incorporate the Bootstrap JavaScript plugins -->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.js"></script>
	<script>
		 $(function(){
			var length = $('.navMainCt').offset().top + $('.navMainCt').height();
			//alert(length);
			$(window).bind('scroll', function () {
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
		
</script>
  </body>

</html>