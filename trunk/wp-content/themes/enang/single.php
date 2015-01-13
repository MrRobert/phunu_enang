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
                            <?php endwhile; ?>
                     <?php } ?>
					
					
					<div class="like-share-con">
						<p class="like_button">
							<span class="btn-qt">
								<a href="javascript:;" title="quan tâm" class="tto_object_like_btn">quan tâm</a>
									<span class="sl"><span></span>2</span>
							</span>
						</p>
						<div class="like_share" style="width: 100%;float: left; margin-bottom: 55px; border: 1px solid #ddd;padding: 5px;">
                        	<div class="like" style="float:left; width:80px;">
                            		<div class="fb-like fb_iframe_widget" data-href="<?php echo esc_url(get_the_permalink())?>" data-layout="box_count" data-action="like" data-show-faces="true" data-share="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=&amp;href=http%3A%2F%2Fblog.zotadi.com%2F2014%2F11%2F06%2F10-dat-nuoc-co-nhieu-gai-xinh-nhat-the-gioi%2F&amp;layout=box_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=false&amp;show_faces=true"><span style="vertical-align: bottom; width: 55px; height: 61px;"><iframe name="f2bf36dbe8" width="1000px" height="1000px" frameborder="0" allowtransparency="true" scrolling="no" title="fb:like Facebook Social Plugin" src="http://www.facebook.com/v2.0/plugins/like.php?action=like&amp;app_id=&amp;channel=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter%2F7r8gQb8MIqE.js%3Fversion%3D41%23cb%3Df58befc64%26domain%3Dblog.zotadi.com%26origin%3Dhttp%253A%252F%252Fblog.zotadi.com%252Ff290941088%26relation%3Dparent.parent&amp;href=http%3A%2F%2Fblog.zotadi.com%2F2014%2F11%2F06%2F10-dat-nuoc-co-nhieu-gai-xinh-nhat-the-gioi%2F&amp;layout=box_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=false&amp;show_faces=true" style="border: none; visibility: visible; width: 55px; height: 61px;" class=""></iframe></span></div>
                        	</div>
                        	<div class="share" style="text-align:right; width:100%;"> 
                            		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/share_ngay.png" style="margin-bottom: 15px">
                            		<a rel="nofollow" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo esc_url(get_the_permalink())?>">
                                		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/share_button.png" alt="Share" style="margin-left:2px" title="Share">
                            		</a>
                        	</div>
						</div>
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
				
				
		
			</div>
		</div>
   </div>


<?php get_footer();?>