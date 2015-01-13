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
					<form class="frm-search" id="search-frm" method="GET" action="#">
						<input name="q" class="txt-search" type="text" placeholder="Nội dung cần tìm..">
						<input class="btn-search" type="submit" value="">
					</form>
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
									<li> 
										<a href="#"> Bật mí bí duyết dưỡng da mùa lễ hội cho quý cô trang điểm nhiều </a> 
									</li>
									<li> <a href="#"> Soi tủ đồ “hàng hiệu” bình dân của hoàng tử bé nước Anh</a> </li>
									<li> <a href="#"> Tính cách nào, chọn nước hoa nấy</a> </li>
									<li> <a href="#"> Tạo 8 kiểu đầy cảm hứng với tóc bob dài</a> </li>
									<li> <a href="#"> Mực xào ngũ sắc ngọt giòn cho bữa tối</a> </li>
									<li> <a href="#"> Cách làm bánh mỳ xoắn ốc thật thơm ngon, xốp mềm</a> </li>
																	
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
									<li> 
										<a href="#">
											<div class="avatar-img"> 
												<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/most_view_img1.jpg" alt="2062727">
											</div>
											<div class="right-list-baiviet">
												<div class="content-baiviet"> Công dụng dầu gấc trong làm đẹp và cách làm nhé</div>
											
											</div> 
										</a>
									</li>
									<li> 
										<a href="#">
											<div class="avatar-img"> 
												<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/most_view_img2.jpg" alt="2062727"/>
											</div>
											<div class="right-list-baiviet">
												<div class="content-baiviet"> Tại sao Đường Tăng vô dụng lại trở thành người lãnh đạo, còn</div>
												
											</div> 
										</a>
									</li>
									<li> 
										<a href="#">
											<div class="avatar-img"> 
												<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/most_view_img3.jpg" alt="2062727">
											</div>
											<div class="right-list-baiviet">
												<div class="content-baiviet"> Công thức lẩu Thái chua cay đây</div>
											
											</div>
										</a>
									</li>
									<li> 
										<a href="#">
											<div class="avatar-img"> 
												<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/most_view_img4.jpg" alt="2062727"/>
											</div>
											<div class="right-list-baiviet">
												<div class="content-baiviet"> Nhận biết 6 kiểu khóc của con để có cách "đối phó"</div>
												
											</div>
										</a>
									</li>
									<li> 
										<a href="#">
											<div class="avatar-img"> 
												<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/most_view_img5.jpg" alt="2062727">
											</div>
											<div class="right-list-baiviet">
												<div class="content-baiviet"> Tâm thư của một phụ nữ lấy chồng để chạy trốn tuổi 27</div>
												
											</div> 
										</a>
									</li>
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