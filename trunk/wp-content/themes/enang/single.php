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
                  			<?php while (have_posts()) : the_post(); ?>
                            <?php $category = get_the_category();   ?>
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
    								<span class="sl"><span></span><?php echo getPostLoves(get_the_ID()); ?></span>
    							</span>
    						</p>
    						<div class="like_share" style="width: 100%;float: left; margin-bottom: 55px; border: 1px solid #ddd;padding: 5px;">
                            	<div class="like" style="float:left; width:80px;">
                                		<div class="fb-like" data-href="<?php echo esc_url(get_the_permalink())?>" data-layout="box_count" data-action="like" data-show-faces="true" data-share="false"></div>
                            	</div>
                            	<div class="share" style="text-align:right; width:100%;"> 
                                		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/share_ngay.png" style="margin-bottom: 15px">
                                		<a rel="nofollow" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo esc_url(get_the_permalink())?>" id="share-btn">
                                    		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/share_button.png" alt="Share" style="margin-left:2px" title="Share">
                                		</a>
                            	</div>
    						</div>
                            <input type="hidden" id="post_id" name="post_id" value="<?php echo get_the_ID(); ?>"/>
    					</div>
                        <ul class="block-key"> <?php $posttags = get_the_tags();?>
    			             <li>Từ khóa</li>
                             <?php if(!empty($posttags)){
                                    foreach( $posttags as $tag){
                             ?>
                                        <li>
                				            <a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a>
                			             </li>
                             <?php           
                                    }
                                }?>
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
            				<a target="_blank" href="<?php echo esc_url(get_category_link($category[0]->cat_ID))?>" title="<?php echo $category[0]->name;?>" >Bài viết liên quan</a>
            			</h2>
                        <?php $postID_exclude = array();
                             $args = array(
                                'category_name'     => $category[0]->slug,
                                'meta_key'           => 'post_views_count',
                               	'posts_per_page'      => 1,
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
                                        
                                        <div class="feature-1">
                							<a target="_blank" class="thumbs img_80_45" title="<?php the_title();?>" href="<?php esc_url(the_permalink())?>">
                            					<img src="<?php echo get_bg_image(get_the_ID()); ?>">
                            				</a>
                							<a target="_blank" title="<?php the_title();?>" href="<?php esc_url(the_permalink())?>">
                        					  <?php the_title();?>
                                            </a>
                			             </div>	
                                        
						      <?php  }} wp_reset_postdata(); ?>
                             
						<ul class="list-1">
                        
                            <?php $postID_exclude = array();
                             $args = array(
                                'category_name'     => $category[0]->slug,
                                'meta_key'           => 'post_views_count',
                                'post__not_in'        =>$postID_exclude,
                               	'posts_per_page'      => 5,
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
                        					<a target="_blank" title="<?php the_title();?>" href="<?php esc_url(the_permalink())?>"><?php the_title();?></a>
                        				</li>
                                        
						      <?php  }} wp_reset_postdata(); ?>
                           
						</ul>
					</div>
                    <div class="block-related-news">
            			<h2 class="title">
            				<a target="_blank" href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/doc-bao" title="Tin tức mới nhất" style="color: #74bc48;">Tin tức mới nhất</a>
            			</h2>
                        <?php $postID_exclude = array();
                             $args = array(
                                'category_name'     => 'doc-bao',
                               	'posts_per_page'      => 1,
                                'orderby'             =>  'date',
                                'order'               => 'DESC', 
                                );
                                        
                                $the_query = new WP_Query($args);
                                // The Loop
                                if ( $the_query->have_posts() ) {
                                	
                                	while ( $the_query->have_posts() ) {
                                		$the_query->the_post();
                                        array_push($postID_exclude,get_the_ID());  
                                        ?>
                                        <div class="feature-1">
                							<a target="_blank" class="thumbs img_80_45" title="<?php the_title();?>" href="<?php esc_url(the_permalink())?>">
                            					<img src="<?php echo get_bg_image(get_the_ID()); ?>">
                            				</a>
                							<a target="_blank" title="<?php the_title();?>" href="<?php esc_url(the_permalink())?>">
                        					  <?php the_title();?>
                                            </a>
                			             </div>	
                                        
						      <?php  }} wp_reset_postdata(); ?>
                        
						
						<ul class="list-1">
                        
                            <?php 
                             $args = array(
                                'category_name'     => 'doc-bao',
                                'post__not_in'        =>$postID_exclude,
                               	'posts_per_page'      => 5,
                                'orderby'             =>  'date',
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
                        					<a target="_blank" title="<?php the_title();?>" href="<?php esc_url(the_permalink())?>"><?php the_title();?></a>
                        				</li>	
                                        
						      <?php  }} wp_reset_postdata(); ?>
                            
						</ul>
					</div>
					<div class="banner_300x250">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/banner-300x250.jpg" alt="banner 300x250"/>
					</div>
                    <div class="block-related-news">
            			<h2 class="title">
            				<a target="_blank" href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/lam-dep" title="Thời trang - làm đẹp" style="color: #eb6f70;">Thời trang - làm đẹp</a>
            			</h2>	
						<ul class="list-1">
                            <?php 
                             $args = array(
                                'category_name'     => 'lam-dep',
                               	'posts_per_page'      => 6,
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
                        					<a target="_blank" title="<?php the_title();?>" href="<?php esc_url(the_permalink())?>"><?php the_title();?></a>
                        				</li>	
                                        
						      <?php  }} wp_reset_postdata(); ?>
                        
						</ul>
					</div>
				</div>
				 <div class="block-related-news">
            			<h2 class="title">
            				<a target="_blank" href="<?php echo esc_url( home_url( '/' ) ); ?>chuyen-muc/me-va-be" title="Mẹ và bé" style="color: #ff8400;">Mẹ và bé</a>
            			</h2>
                        <?php $postID_exclude = array();
                             $args = array(
                                'category_name'     => 'me-va-be',
                               	'posts_per_page'      => 1,
                                );
                                        
                                $the_query = new WP_Query($args);
                                // The Loop
                                if ( $the_query->have_posts() ) {
                                	
                                	while ( $the_query->have_posts() ) {
                                		$the_query->the_post();
                                        array_push($postID_exclude,get_the_ID());  
                                        ?>
                                        <div class="feature-1">
                							<a target="_blank" class="thumbs img_80_45" title="<?php the_title();?>" href="<?php esc_url(the_permalink())?>">
                            					<img src="<?php echo get_bg_image(get_the_ID()); ?>">
                            				</a>
                							<a target="_blank" title="<?php the_title();?>" href="<?php esc_url(the_permalink())?>">
                        					  <?php the_title();?>
                                            </a>
                			             </div>	
                                        
						      <?php  }} wp_reset_postdata(); ?>
                        	
						<ul class="list-1">
                            <?php 
                             $args = array(
                                'category_name'     => 'me-va-be',
                                'post__not_in'        =>$postID_exclude,
                               	'posts_per_page'      => 6,
                                );
                                        
                                $the_query = new WP_Query($args);
                                // The Loop
                                if ( $the_query->have_posts() ) {
                                	
                                	while ( $the_query->have_posts() ) {
                                		$the_query->the_post();
                                        ?>
                                        <li>
                        					<a target="_blank" title="<?php the_title();?>" href="<?php esc_url(the_permalink())?>"><?php the_title();?></a>
                        				</li>	
                                        
						      <?php  }} wp_reset_postdata(); ?>
                            
						</ul>
					</div>
				</div>
				
		
			</div>
		</div>
   </div>


<?php get_footer();?>