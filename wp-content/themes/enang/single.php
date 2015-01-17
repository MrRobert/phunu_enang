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
		<div id="mainNews" class="container">
			<div id="containerTopRow" class="row">
				<div id="mainTop">
					<div id="bannerTop" class="hidden-xs">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/banner-top.jpg" alt="banner top"/>
					</div>
				</div>
				<div id="colleftDetail" class=" col-md-9 col-lg-9">
                     <?php if (have_posts()) {  //echo getPostViews(get_the_ID());?>		
                  			<?php while (have_posts()) : the_post();?>
                                    <article class="newsCenter" id="post-733565">
                						<div class="autNewsCt row">
                							<div class="top-box-article"> 
                								<span class="ctnAutCt col-md-10 col-sm-10 col-xs-9 col-lg-5"> 
                									<h4> 
                										<a href="<?php esc_url(the_permalink())?>"><?php the_title();?></a>
                									</h4>  
                								</span>
                								<a class="date-post" ><?php the_date('H:i  d/m/Y'); ?></a> 
                								<div class="icon-list-btn col-lg-4">
                									<ul class="list-tool">
                										<li> 
                											<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php esc_url(the_permalink())?>&amp;display=popup&amp;ref=plugin" title="Facebook">
                												<img class="icon-faces" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/transparent.png">
                											</a>
                										</li>
                										<li> 
                											<a target="_blank" href="https://plus.google.com/share?url=<?php esc_url(the_permalink())?>" title="google plus">
                												<img class="icon-googles" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/transparent.png">
                											</a>
                										</li>
                										<li> 
                											<a href="mailto:ducchinhbk@gmail.com" title="">
                											<img class="icon-mail" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/transparent.png">
                											</a>
                										</li>
                										<li> 
                											<a onclick="window.print();" title="">
                											<img class="icon-print" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/transparent.png">
                											</a>
                										</li>
                									</ul>
                								</div>
                							</div>
                							<div class="bottom-box-article">
                    							<?php the_content(); ?>
                							</div>
                							
                						</div>
                					</article>
                            <?php setPostViews(get_the_ID()); ?>
                            
                            <div class="like-share-con">
    						<p class="like_button">
    							<span class="btn-qt">
    								<a href="javascript:;" title="quan tâm" class="tto_object_like_btn">quan tâm</a>
    								<span class="sl"><span></span>2</span>
    							</span>
    						</p>
    						<div class="like_share" style="width: 100%;float: left; margin-bottom: 55px; border: 1px solid #ddd;padding: 5px;">
                            	<div class="like" style="float:left; width:80px;">
                                		<div class="fb-like" data-href="<?php echo esc_url(get_the_permalink())?>" data-layout="box_count" data-action="like" data-show-faces="true" data-share="false"></div>
                            	</div>
                            	<div class="share" style="text-align:right; width:100%;"> 
                                		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/share_ngay.png" style="margin-bottom: 15px">
                                		<a rel="nofollow" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo esc_url(get_the_permalink())?>">
                                    		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/share_button.png" alt="Share" style="margin-left:2px" title="Share">
                                		</a>
                            	</div>
    						</div>
                            <input type="hidden" id="post_id" name="post_id" value="<?php echo get_the_ID(); ?>"/>
    					</div>
                        <ul class="block-key">
    			             <li>Từ khóa</li>
    						<li>
    				            <a href="http://tuoitre.vn/chu-de/bao-hiem-y-te/7297.html">bảo hiểm y tế</a>
    			             </li>
    						<li>
                				<a href="http://tuoitre.vn/chu-de/bao-hiem-xa-hoi/419781.html">bảo hiểm xã hội</a>
                			</li>
    					</ul>
                          <?php get_template_part('comments'); ?>
                            <?php endwhile; ?>
                     <?php } ?>
					
					
					
				</div>
				<div id="colRightNewsBox" class="hidden-xs hidden-sm col-md-3 col-lg-3">
					<?php get_search_form(true); ?>
                    
					<div class="banner_300x250">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/banner-300x250.jpg" alt="banner 300x250"/>
					</div>
                    <div class="block-related-news">
            			<h2 class="title">
            				<a target="_blank" href="#" title="Ảnh đoạt giải " >Bài viết liên quan</a>
            			</h2>
						<div class="feature-1">
							<a target="_blank" class="thumbs img_80_45" title="Bếp xanh công nghệ - Lê Vấn" href="#">
            					<img src="http://thitruong-img.tuoitre.vn/post/Bếp xanh công nghệ - Lê Vấn_14195663334139.jpg">
            				</a>
							<a target="_blank" title="Bếp xanh công nghệ - Lê Vấn" href="#">
        					   Bếp xanh công nghệ - Lê Vấn
                            </a>
			             </div>	
						<ul class="list-1">
                            <li>
            					<a target="_blank" title="Vũ điệu của biển - Nguyễn Tấn Khâm" href="#">Vũ điệu của biển - Nguyễn Tấn Khâm</a>
            				</li>
                            <li>
            					<a target="_blank" title="Cạm bẫy - Phạm Văn Thành" href="#">Cạm bẫy - Phạm Văn Thành</a>
            				</li>
                            <li>
            					<a target="_blank" title="Nỗi lo còn đó - Lê Minh Quát" href="#">Nỗi lo còn đó - Lê Minh Quát</a>
            				</li>
                            <li>
            					<a target="_blank" title="Hạn chế túi ni lông - Nguyễn Thứ Tính" href="#">Hạn chế túi ni lông - Nguyễn Thứ Tính</a>
            				</li>
                             <li>
            					<a target="_blank" title="Vũ điệu của biển - Nguyễn Tấn Khâm" href="#">Vũ điệu của biển - Nguyễn Tấn Khâm</a>
            				</li>
                            <li>
            					<a target="_blank" title="Cạm bẫy - Phạm Văn Thành" href="#">Cạm bẫy - Phạm Văn Thành</a>
            				</li>
						</ul>
					</div>
                    <div class="block-related-news">
            			<h2 class="title">
            				<a target="_blank" href="#" title="Ảnh đoạt giải " style="color: #74bc48;">Tin tức mới nhất</a>
            			</h2>
						<div class="feature-1">
							<a target="_blank" class="thumbs img_80_45" title="Bếp xanh công nghệ - Lê Vấn" href="#">
            					<img src="http://thitruong-img.tuoitre.vn/post/Bếp xanh công nghệ - Lê Vấn_14195663334139.jpg">
            				</a>
							<a target="_blank" title="Bếp xanh công nghệ - Lê Vấn" href="#">
        					   Bếp xanh công nghệ - Lê Vấn
                            </a>
			             </div>	
						<ul class="list-1">
                            <li>
            					<a target="_blank" title="Vũ điệu của biển - Nguyễn Tấn Khâm" href="#">Vũ điệu của biển - Nguyễn Tấn Khâm</a>
            				</li>
                            <li>
            					<a target="_blank" title="Cạm bẫy - Phạm Văn Thành" href="#">Cạm bẫy - Phạm Văn Thành</a>
            				</li>
                            <li>
            					<a target="_blank" title="Nỗi lo còn đó - Lê Minh Quát" href="#">Nỗi lo còn đó - Lê Minh Quát</a>
            				</li>
                            <li>
            					<a target="_blank" title="Hạn chế túi ni lông - Nguyễn Thứ Tính" href="#">Hạn chế túi ni lông - Nguyễn Thứ Tính</a>
            				</li>
                             <li>
            					<a target="_blank" title="Vũ điệu của biển - Nguyễn Tấn Khâm" href="#">Vũ điệu của biển - Nguyễn Tấn Khâm</a>
            				</li>
                            <li>
            					<a target="_blank" title="Cạm bẫy - Phạm Văn Thành" href="#">Cạm bẫy - Phạm Văn Thành</a>
            				</li>
						</ul>
					</div>
					<div class="banner_300x250">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/banner-300x250.jpg" alt="banner 300x250"/>
					</div>
                    <div class="block-related-news">
            			<h2 class="title">
            				<a target="_blank" href="#" title="Ảnh đoạt giải" style="color: #eb6f70;">Thời trang - làm đẹp</a>
            			</h2>	
						<ul class="list-1">
                            <li>
            					<a target="_blank" title="Vũ điệu của biển - Nguyễn Tấn Khâm" href="#">Vũ điệu của biển - Nguyễn Tấn Khâm</a>
            				</li>
                            <li>
            					<a target="_blank" title="Cạm bẫy - Phạm Văn Thành" href="#">Cạm bẫy - Phạm Văn Thành</a>
            				</li>
                            <li>
            					<a target="_blank" title="Nỗi lo còn đó - Lê Minh Quát" href="#">Nỗi lo còn đó - Lê Minh Quát</a>
            				</li>
                            <li>
            					<a target="_blank" title="Hạn chế túi ni lông - Nguyễn Thứ Tính" href="#">Hạn chế túi ni lông - Nguyễn Thứ Tính</a>
            				</li>
                             <li>
            					<a target="_blank" title="Vũ điệu của biển - Nguyễn Tấn Khâm" href="#">Vũ điệu của biển - Nguyễn Tấn Khâm</a>
            				</li>
                            <li>
            					<a target="_blank" title="Cạm bẫy - Phạm Văn Thành" href="#">Cạm bẫy - Phạm Văn Thành</a>
            				</li>
						</ul>
					</div>
				</div>
				
				
		
			</div>
		</div>
   </div>


<?php get_footer();?>