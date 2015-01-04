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
                            <?php $postID_exclude = array(); 
                                    $args = array(
                                    	'posts_per_page'      => 6,
                                        );
                                $the_query = new WP_Query($args);
                                // The Loop
                                if ( $the_query->have_posts() ) {
                                	
                                	while ( $the_query->have_posts() ) {
                                		$the_query->the_post();
                                        array_push($postID_exclude,get_the_ID()); 
                                        ?>
                                        <div class="item active"> 
            								<?php the_post_thumbnail( "featured-slide-img" ); ?> 
            								<div class="carousel-caption"> 
            									<a href="<?php esc_url(the_permalink())?>"><?php the_title();?></a>
            									<br>
            									<div class=" hidden-xs slide_cat_name slide_nang_2_0"><?php echo get_cate_name(get_the_ID()); ?></div>
            								</div>
            								<p class="gradient"></p>
            							</div>
                                        
						      <?php }} wp_reset_postdata(); ?>
                        
							<div class="item active"> 
								<img class="f-image" style="width: 100%" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/slide_img1.jpg" alt="10 phẩm chất mà phụ nữ luôn muốn ở người yêu">
								<div class="carousel-caption"> 
									<a href="#">10 phẩm chất mà phụ nữ luôn muốn ở người yêu</a>
									<br>
									<div class=" hidden-xs slide_cat_name slide_nang_2_0">NÀNG 2.0</div>
								</div>
								<p class="gradient"></p>
							</div>
							<div class="item"> <img class="f-image" style="width: 100%" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/slide_img2.jpg" alt="Toner làm từ dấm táo, cực trắng da, trị mụn, giảm thâm">
								<div class="carousel-caption"> 
									<a href="#">Toner làm từ dấm táo, cực trắng da, trị mụn, giảm thâm</a>
									<br>
									<div class=" hidden-xs slide_cat_name slide_lam_dep">làm đẹp</div>
								</div>
								<p class="gradient"></p>
							</div>
							<div class="item"> <img class="f-image" style="width: 100%" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/slide_img3.jpg" alt="Cánh gà chiên sốt me ngon tuyệt cho ngày cuối tuần">
								<div class="carousel-caption"> 
									<a href="#">Cánh gà chiên sốt me ngon tuyệt cho ngày cuối tuần</a>
									<br>
									<div class=" hidden-xs slide_cat_name slide_kinh_nghiem">Kinh nghiệm</div>
								</div>
								<p class="gradient"></p>
							</div>
							<div class="item"> 
								<img class="f-image" style="width: 100%" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/slide_img4.jpg" alt="Đàn ông ai cũng ngoại tình sao?">
								<div class="carousel-caption"> 
									<a href="#">Đàn ông ai cũng ngoại tình sao?</a>
									<br>
									<div class=" hidden-xs slide_cat_name slide_tam_su">Tâm sự</div>
								</div>
								<p class="gradient"></p>
							</div>
							<div class="item"> 
								<img class="f-image" style="width: 100%" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/slide_img5.jpg" alt="Những câu nói khiến bạn dễ bị đồng nghiệp ghét">
								<div class="carousel-caption"> 
									<a href="#">Những câu nói khiến bạn dễ bị đồng nghiệp ghét</a>
									<br>
									<div class=" hidden-xs slide_cat_name slide_nang_2_0">NÀNG 2.0</div>
								</div>
								<p class="gradient"></p>
							</div>
							<div class="item"> 
								<img class="f-image" style="width: 100%" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/slide_img6.jpg" alt="Bí quyết thời trang xua tan tuổi tác">
								<div class="carousel-caption"> 
									<a href="#">Bí quyết thời trang xua tan tuổi tác</a>
									<br>
									<div class=" hidden-xs slide_cat_name slide_lam_dep">làm đẹp</div>
								</div>
								<p class="gradient"></p>
							</div>
						</div> 
						
					</div><!--end carousel-feature-posts-->
					<div class="other-post-div hidden-xs">
						<ul class="other-post">
							<li> 
								<a href="#">
									<div class="left-other-post"> 
										<img class="img-other-post" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/orther_news_img1.jpg" alt="725630">
										<p class="other-cat-name slide_lam_me">LÀM MẸ</p>
									</div>
									<div class="right-other-post"> Bất thường ở bộ phận sinh dục bé trai mà mẹ cần chú ý</div> 
								</a>
							</li>
							<li> 
								<a href="#">
									<div class="left-other-post"> 
										<img class="img-other-post" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/orther_news_img2.jpg" alt="590665">
										<p class="other-cat-name slide_lam_me">LÀM MẸ</p>
									</div>
									<div class="right-other-post"> Theo dõi chu kỳ rụng trứng</div> 
								</a>
							</li>
							<li> 
								<a href="#">
									<div class="left-other-post"> 
										<img class="img-other-post" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/orther_news_img3.jpg" alt="27357">
										<p class="other-cat-name slide_lam_dep">làm đẹp</p>
									</div>
									<div class="right-other-post"> Thuốc giảm cân- thắc mắc và chia sẻ</div>
								</a>
							</li>
							<li> 
								<a href="#">
									<div class="left-other-post"> 
										<img class="img-other-post" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/orther_news_img4.jpg" alt="731138">
										<p class="other-cat-name slide_nang_2_0">NÀNG 2.0</p>
									</div>
									<div class="right-other-post"> 8 điều các cặp đôi cần thống nhất trước khi kết hôn</div> 
								</a>
							</li>
						</ul>
					</div><!-- end other-post-div-->
				</div><!-- end homecenterNews-->
				
				<div id="homecolLeftNews" class="hidden-xs col-sm-3 hidden-md col-lg-2">
					<div class="news-list">
						<ul>
							<li> 
                    			<a href="#" style="background:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/first_news_img.jpg) no-repeat;width: 100%; height: 92px; display: block; margin-bottom: 8px; background-size: cover;" class="img"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/first_news_img.jpg" alt="Bật mí bí duyết dưỡng da mùa lễ hội cho quý cô trang điểm nhiều " style="display: none;"></a>
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
						<li> 
							<a href="#">
								<div class="cafe-image"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/most_view_img1.jpg" alt="most view"></div>
								<div class="cafe-title"> Xu hướng handmade và sự lên ngôi của máy may</div> </a>
						</li>
						<li> 
							<a href="#">
								<div class="cafe-image"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/most_view_img2.jpg" alt="Điểm hẹn Noel cho các cặp đôi ở Sài Gòn"></div>
								<div class="cafe-title"> Điểm hẹn Noel cho các cặp đôi ở Sài Gòn</div> 
							</a>
						</li>
						<li> 
							<a href="#">
								<div class="cafe-image"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/most_view_img3.jpg" alt="Sân chơi hấp dẫn nhất cho bé tại Sài Gòn dịp cuối năm"></div>
								<div class="cafe-title"> Sân chơi hấp dẫn nhất cho bé tại Sài Gòn dịp</div> 
							</a>
						</li>
						<li>
							<a href="#">
								<div class="cafe-image"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/most_view_img4.jpg" alt="Collagen nào tốt nhất giúp hồi sinh làn da?"></div>
								<div class="cafe-title"> Collagen nào tốt nhất giúp hồi sinh làn da?</div> 
							</a>
							</li>
						<li> 
							<a href="#">
								<div class="cafe-image"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/most_view_img5.jpg" alt="Á Hậu Huyền My đón Giáng sinh sớm cùng các em nhỏ"></div>
								<div class="cafe-title"> Á Hậu Huyền My đón Giáng sinh sớm cùng các em</div> 
							</a>
						</li>
						<li> 
							<a href="#">
								<div class="cafe-image"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/most_view_img6.jpg" alt="6 bước hạ sốt nhanh cho trẻ mẹ cần biết"></div>
								<div class="cafe-title"> 6 bước hạ sốt nhanh cho trẻ mẹ cần biết</div> 
							</a>
						</li>
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
							<h2 class="title-h2">Phản hồi nhiều</h2>
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
					<div class="visible-xs">
						<div id="mobile_category_list" class="row visible-xs">
							<div class="item col-xs-6 clearfix">
								<div id="mobile_btn_rea" class="ctn_cateRea mobile_btn_category">
									<div> 
										<a href="#"> 
											<span>Giải trí</span>
										</a>
									</div>
								</div>
							</div>
							<div class="item col-xs-6 clearfix">
								<div id="mobile_btn_conf" class="ctn_cateConf mobile_btn_category">
									<div> 
										<a href="#"> 
											<span>Tâm sự</span>
										</a>
									</div>
								</div>
							</div>
							<div class="item col-xs-6 clearfix">
								<div id="mobile_btn_bea" class="ctn_cateBea mobile_btn_category">
									<div> 
										<a href="#"> 
											<span>Làm đẹp</span>
										</a>
									</div>
								</div>
							</div>
							<div class="item col-xs-6 clearfix">
								<div id="mobile_btn_mom" class="ctn_cateMom mobile_btn_category">
									<div> 
										<a href="#"> 
											<span>Làm mẹ</span>
										</a>
									</div>
								</div>
							</div>
							<div class="item col-xs-6 clearfix">
								<div id="mobile_btn_exp" class="ctn_cateExp mobile_btn_category">
									<div> 
										<a href="#"> 
											<span>Kinh nghiệm</span>
										</a>
									</div>
								</div>
							</div>
							<div class="item col-xs-6 clearfix">
								<div id="mobile_btn_nang" class="ctn_cateCaf mobile_btn_category">
									<div> 
										<a href="#"> 
											<span>Nàng 2.0</span> 
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
									<li class="orangeNews chooseContentBox" id="giaitri"> 
										<a class="navEnt"><span class="nav_point"></span>Giải trí</a>
										<span class="arrowSubCt" style="display: inline;"></span>
									</li>
									<li class="pinkNews chooseContentBox" id="tamsu"> 
										<a class="navCon" ><span class="nav_point"></span> Tâm sự</a>
										<span class="arrowSubCt" style="display: inline;"></span>
									</li>
									<li class="greenNews chooseContentBox" id="lamdep"> 
										<a class="navBea"><span class="nav_point"></span> Làm đẹp</a>
										<span class="arrowSubCt" style="display: inline;"></span>
									</li>
									<li class="blueNews chooseContentBox" id="kinhnghiem"> 
										<a class="navMum"><span class="nav_point"></span> Kinh nghiệm</a>
										<span class="arrowSubCt" style="display: inline;"></span>
									</li>
									<li class="purpleNews chooseContentBox" id="nang"> 
										<a class="navExp"><span class="nav_point"></span> Nàng</a>
										<span class="arrowSubCt" style="display: inline;"></span>
									</li>
								</ul>
							</div><!-- end navMainCt-->
							<div id="contentBox">
								<div id="nang-tabs_hot_newest" class="activeBox nang_wtt"> 
									<input class="page" type="hidden" value="0"> 
									<article class="newsCenter" id="post-733565">
										<div class="autNewsCt row">
											<div class="top-box-article"> 
												
												<span class="ctnAutCt col-md-10 col-sm-10 col-xs-9 col-lg-5"> 
													<h4> 
														<a href="#">8 lỗi lầm của phụ nữ khi yêu</a>
													</h4>  
												</span>
												<a class="date-post" href="#">Thứ 7, 27.12.14 16:51</a> 
												<div class="icon-list-btn col-lg-4">
													<ul>
														<li> 
															<span title="Cảm ơn"><i class="fa fa-heart"></i></span>
															<br>
															<span class="value-btn">1</span>
														</li>
														<li> 
															<a title="Chia sẻ" class="btn-shareface" data-gtmname="chia-se" rel="nofollow" target="_blank" href="#">
																<span><i class="fa fa-share-alt"></i></span>
																<br>
																<span class="value-btn">29</span>
															</a>
														</li>
														<li> 
															<span title="Bình luận" ><i class="fa fa-comments"></i></span>
															<br>
															<span class="value-btn">0</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="bottom-box-article">
												<a class="link-post-content" href="#">
													<p>Sáng nay dậy sớm và đọc được bài viết “10 tật xấu “kinh hoàng” của đàn ông Việt” của một chị nào đó. Chị khẳng định đàn ông Việt rất tốt tuy nhiên cũng có rất nhiều điểm xấu xuất phát từ suy nghĩ. Tôi đồng ý. Và tôi nhận thấy có nửa này thì…</p> 
												</a>
												<div class="imgArtCt"> 
													<em>
														<a href="#">
														<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/photo_item4.jpg" alt="8 lỗi lầm của phụ nữ khi yêu"></a>
													</em>
												</div>
											</div>
										</div>
									</article>
									<article class="newsCenter" id="post-705956">
										<div class="autNewsCt row">
											<div class="top-box-article">
												<span class="ctnAutCt col-md-10 col-sm-10 col-xs-9 col-lg-5"> 
													<h4> 
														<a href="#">Mẹo tâm lý đơn giản cho cuộc sống dễ dàng hơn</a>
													</h4> 
												</span>
												<a class="date-post" href="#">Thứ 3, 23.12.14 14:00</a>
												<div class="icon-list-btn col-lg-4">
													<ul>
														<li> 
															<span title="Cảm ơn"><i class="fa fa-heart"></i></span>
															<br>
															<span class="value-btn">1</span>
														</li>
														<li> 
															<a title="Chia sẻ" class="btn-shareface" data-gtmname="chia-se" rel="nofollow" target="_blank" href="#">
																<span><i class="fa fa-share-alt"></i></span>
																<br>
																<span class="value-btn">29</span>
															</a>
														</li>
														<li> 
															<span title="Bình luận" ><i class="fa fa-comments"></i></span>
															<br>
															<span class="value-btn">0</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="bottom-box-article">
												<a class="link-post-content" href="">
													<p>Có những điều rất đơn giản nhưng hữu ích tồn tại quanh ta, chẳng hạn như làm sao biết
													người khác có muốn nghe bạn nói hay không, làm sao nhìn người ta mà không bị phát hiện hay 
													làm sao để tán tỉnh người ấy mà không “hạ mình”? Nếu bạn đủ tinh tế…</p> 
												</a>
												<div class="imgArtCt"> 
													<em>
														<a  href="#">
															<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/photo_item1.jpg" alt="8 điều các cặp đôi cần thống nhất trước khi kết hôn">
														</a>
													</em>
												</div>
											</div>
										</div>
									</article>
									<article class="newsCenter" id="post-733234">
										<div class="autNewsCt row">
											<div class="top-box-article"> 
												<span class="ctnAutCt col-md-10 col-sm-10 col-xs-9 col-lg-5"> 
													<h4> 
														<a href="#">10 cách từ chối khéo léo</a>
													</h4>  
												</span>
												<a class="date-post" href="#">Thứ 6, 26.12.14 16:37</a>
												<div class="icon-list-btn col-lg-4">
													<ul>
														<li> 
															<span title="Cảm ơn"><i class="fa fa-heart"></i></span>
															<br>
															<span class="value-btn">1</span>
														</li>
														<li> 
															<a title="Chia sẻ" class="btn-shareface" data-gtmname="chia-se" rel="nofollow" target="_blank" href="#">
																<span><i class="fa fa-share-alt"></i></span>
																<br>
																<span class="value-btn">29</span>
															</a>
														</li>
														<li> 
															<span title="Bình luận" ><i class="fa fa-comments"></i></span>
															<br>
															<span class="value-btn">0</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="bottom-box-article">
												<a class="link-post-content" href="#">
													<p>Trong cuộc sống, chúng ta gặp phải rất nhiều tính huống mà không biết nên từ chối hay xử 
													lý như thế nào. Hôm trước mình vừa đọc được bài chia sẻ này rất hay. Chiều nay có thời gian 
													nên chia sẻ lại cho mọi người cùng đọc..hi Có lẽ tiếng khó nói nhất…</p> 
												</a>
												<div class="imgArtCt"> 
													<em>
														<a href="#">
															<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/photo_item1.jpg" alt="8 điều các cặp đôi cần thống nhất trước khi kết hôn">
														</a>
													</em>
												</div>
											</div>
										</div>
									</article>
									<article class="newsCenter" id="post-141273">
										<div class="autNewsCt row">
											<div class="top-box-article"> 
												<span class="ctnAutCt col-md-10 col-sm-10 col-xs-9 col-lg-5"> 
													<h4> 
														<a href="#">Phải lấy người như ai?</a>
													</h4>
												</span>
												<a class="date-post" href="#">Thứ 3, 11.11.14 09:00</a>
												<div class="icon-list-btn col-lg-4">
													<ul>
														<li> 
															<span title="Cảm ơn"><i class="fa fa-heart"></i></span>
															<br>
															<span class="value-btn">1</span>
														</li>
														<li> 
															<a title="Chia sẻ" class="btn-shareface" data-gtmname="chia-se" rel="nofollow" target="_blank" href="#">
																<span><i class="fa fa-share-alt"></i></span>
																<br>
																<span class="value-btn">29</span>
															</a>
														</li>
														<li> 
															<span title="Bình luận" ><i class="fa fa-comments"></i></span>
															<br>
															<span class="value-btn">0</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="bottom-box-article">
												<a class="link-post-content" href="#">
													<p>Nhà có mỗi một cái TV, mình định ra xem phim kênh HBO thì bị vợ đuổi ra 
													ngồi máy tính, vì vợ đang xem phim Hàn Quốc. Ngồi buồn buồn vào WTT đọc tâm sự 
													của các chị em, người thì bị chồng mắng chửi, người thì bị chồng lạnh nhạt, người thì bị…</p> 
												</a>
												<div class="imgArtCt"> 
													<em>
														<a href="#">
															<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/photo_item1.jpg" alt="8 điều các cặp đôi cần thống nhất trước khi kết hôn">
														</a>
													</em>
												</div>
											</div>
										</div>
									</article>
									<article class="newsCenter" id="post-731604">
										<div class="autNewsCt row">
											<div class="top-box-article"> 
												<span class="ctnAutCt col-md-10 col-sm-10 col-xs-9 col-lg-5"> 
												<h4> 
													<a href="#">Tâm thư của một phụ nữ lấy chồng để chạy trốn tuổi 27</a>
												</h4>  
												</span>
												<a class="date-post" href="#">Thứ 3, 23.12.14 10:28</a> 
												<div class="icon-list-btn col-lg-4">
													<ul>
														<li> 
															<span title="Cảm ơn"><i class="fa fa-heart"></i></span>
															<br>
															<span class="value-btn">1</span>
														</li>
														<li> 
															<a title="Chia sẻ" class="btn-shareface" data-gtmname="chia-se" rel="nofollow" target="_blank" href="#">
																<span><i class="fa fa-share-alt"></i></span>
																<br>
																<span class="value-btn">29</span>
															</a>
														</li>
														<li> 
															<span title="Bình luận" ><i class="fa fa-comments"></i></span>
															<br>
															<span class="value-btn">0</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="bottom-box-article">
												
												<a class="link-post-content" href="#">
													<p>Gửi những cô gái sắp, đang và vừa bước qua tuổi 27 – cái tuổi dễ khiến bạn hoảng 
													hốt và hoang mang khi mang trên mình hai chữ “gái ế” Năm 23 tuổi, hai chữ “gái ế” với 
													tôi lúc ấy chỉ là một cách nói cho vui mồm. Miệng thì than thở với…</p> 
												</a>
												<div class="imgArtCt"> 
													<em>
														<a href="#">
															<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/photo_item3.jpg" alt="Tâm thư của một phụ nữ lấy chồng để chạy trốn tuổi 27">
														</a>
													</em>
												</div>
											</div>
										</div>
									</article>
									<article class="newsCenter" id="post-733063">
										<div class="autNewsCt row">
											<div class="top-box-article"> 
												<span class="ctnAutCt col-md-10 col-sm-10 col-xs-9 col-lg-5"> 
													<h4> 
														<a href="#">35 bí mật làm nên hôn nhân hạnh phúc</a>
													</h4>  
												</span>
												<a class="date-post" href="#">Thứ 6, 26.12.14 11:47</a> 
												<div class="icon-list-btn col-lg-4">
													<ul>
														<li> 
															<span title="Cảm ơn"><i class="fa fa-heart"></i></span>
															<br>
															<span class="value-btn">1</span>
														</li>
														<li> 
															<a title="Chia sẻ" class="btn-shareface" data-gtmname="chia-se" rel="nofollow" target="_blank" href="#">
																<span><i class="fa fa-share-alt"></i></span>
																<br>
																<span class="value-btn">29</span>
															</a>
														</li>
														<li> 
															<span title="Bình luận" ><i class="fa fa-comments"></i></span>
															<br>
															<span class="value-btn">0</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="bottom-box-article">
												
												<a class="link-post-content" href="#">
													<p>Gật đầu đồng ý một lời cầu hôn thì dễ, nhưng giữ gìn hạnh phúc gia đình những 
													năm về sau lại rất khó. Những áp lực công việc, con cái, hai bên nội ngoại như bủa 
													vây cả hai vợ chồng. Có dịp tiếp xúc với nhiều gia đình hạnh phúc, mình luôn hỏi…</p> 
												</a>
												<div class="imgArtCt"> 
													<em>
														<a href="#">
														<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/photo_item2.jpg" alt="35 bí mật làm nên hôn nhân hạnh phúc"></a>
													</em>
												</div>
											</div>
										</div>
									</article>
									<article class="newsCenter" id="post-731138">
										<div class="autNewsCt row">
											<div class="top-box-article"> 
												<span class="ctnAutCt col-md-10 col-sm-10 col-xs-9 col-lg-5"> 
													<h4> 
														<a href="#">8 điều các cặp đôi cần thống nhất trước khi kết hôn</a>
													</h4>  
												</span>
												<a class="date-post" href="#">Thứ 5, 25.12.14 11:00</a> 
												<div class="icon-list-btn col-lg-4">
													<ul>
														<li> 
															<span title="Cảm ơn"><i class="fa fa-heart"></i></span>
															<br>
															<span class="value-btn">1</span>
														</li>
														<li> 
															<a title="Chia sẻ" class="btn-shareface" data-gtmname="chia-se" rel="nofollow" target="_blank" href="#">
																<span><i class="fa fa-share-alt"></i></span>
																<br>
																<span class="value-btn">29</span>
															</a>
														</li>
														<li> 
															<span title="Bình luận" ><i class="fa fa-comments"></i></span>
															<br>
															<span class="value-btn">0</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="bottom-box-article">
												<a class="link-post-content" href="#">
													<p>Sự đồng thuận trong suy nghĩ, quan điểm sẽ giúp đời sống hôn nhân của hai bạn không đi vào ngõ cụt. 
													Thời gian yêu nhau luôn là khoảnh khắc đẹp trong lòng hai người. Nhưng để duy trì được sự kết nối đó 
													trong một thời gian lâu dài sau hôn nhân lại là…</p> 
												</a>
												<div class="imgArtCt"> 
													<em>
														<a href="#">
															<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/photo_item1.jpg" alt="8 điều các cặp đôi cần thống nhất trước khi kết hôn">
														</a>
													</em>
												</div>
											</div>
										</div>
								</article>
								
								<input type="hidden" class="lastpost_date" value="2014-12-25 12:07:34">
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
										<li> 
											<a href="#">
												<div class="avatar-img"> 
													<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/avatar1820576_2.gif" alt="2062727">
												</div>
												<div class="right-list-baiviet">
													<div class="content-baiviet"> Công dụng dầu gấc trong làm đẹp và cách làm nhé</div>
													<div class="bottom-baiviet"> 
														<span class="like-baiviet"><span class="number-baiviet">7618</span> lượt thích</span>
													</div>
												</div> 
											</a>
										</li>
										<li> 
											<a href="#">
												<div class="avatar-img"> 
													<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/avatar209105_1.gif" alt="2062727"/>
												</div>
												<div class="right-list-baiviet">
													<div class="content-baiviet"> Tại sao Đường Tăng vô dụng lại trở thành người lãnh đạo, còn</div>
													<div class="bottom-baiviet">  
														<span class="like-baiviet"><span class="number-baiviet">23675</span> lượt thích</span>
													</div>
												</div> 
											</a>
										</li>
										<li> 
											<a href="#">
												<div class="avatar-img"> 
													<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/avatar492228_7.gif" alt="2062727">
												</div>
												<div class="right-list-baiviet">
													<div class="content-baiviet"> Công thức lẩu Thái chua cay đây</div>
													<div class="bottom-baiviet">  
														<span class="like-baiviet"><span class="number-baiviet">5079</span> lượt thích</span>
													</div>
												</div>
											</a>
										</li>
										<li> 
											<a href="#">
												<div class="avatar-img"> 
													<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/avatar1297320_2.gif" alt="2062727"/>
												</div>
												<div class="right-list-baiviet">
													<div class="content-baiviet"> Nhận biết 6 kiểu khóc của con để có cách "đối phó"</div>
													<div class="bottom-baiviet"> 
														<span class="like-baiviet"><span class="number-baiviet">1078</span> lượt thích</span>
													</div>
												</div>
											</a>
										</li>
										<li> 
											<a href="#">
												<div class="avatar-img"> 
													<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/avatar209105_1.gif" alt="2062727">
												</div>
												<div class="right-list-baiviet">
													<div class="content-baiviet"> Tâm thư của một phụ nữ lấy chồng để chạy trốn tuổi 27</div>
													<div class="bottom-baiviet"> 
														<span class="like-baiviet"><span class="number-baiviet">4966</span> lượt thích</span>
													</div>
												</div> 
											</a>
										</li>
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