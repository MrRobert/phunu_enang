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
							<li> 
                    			<a href="#" style="background:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/first_news_img.jpg) no-repeat;width: 100%; height: 92px; display: block; margin-bottom: 8px; background-size: cover;" class="img"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/first_news_img.jpg" alt="Bật mí bí duyết dưỡng da mùa lễ hội cho quý cô trang điểm nhiều " style="display: none;"></a>
                    			<a href="#"> Bật mí bí duyết dưỡng da mùa lễ hội cho quý cô trang điểm nhiều </a> 
                    		</li>
							<li> <a href="#"> Soi tủ đồ “hàng hiệu” bình dân của hoàng tử bé nước Anh</a> </li>
                            <li> <a href="#"> Tính cách nào, chọn nước hoa nấy</a> </li>
                            <li> <a href="#"> Tạo 8 kiểu đầy cảm hứng với tóc bob dài</a> </li>
                            <li> <a href="#"> Mực xào ngũ sắc ngọt giòn cho bữa tối</a> </li>
                            <li> <a href="#"> Cách làm bánh mỳ xoắn ốc thật thơm ngon, xốp mềm</a> </li>
							<li> <a href="#"> Cách làm bánh mỳ xoắn ốc thật thơm ngon, xốp mềm</a> </li>
                             								
						</ul>
					</div>
				</div>
				<div id="centerNews"  class="centerNews col-sm-9 col-md-7 col-lg-7" >
					<div id="feature-post" class="feature-post">
						<a class="fea_pos_img" style="background:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/feature.jpg); background-size: cover;" title="Nhiều người đến sân bay Đà Nẵng đợi tin ông Nguyễn Bá Thanh" href="#">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/feature.jpg" alt="Nhiều người đến sân bay Đà Nẵng đợi tin ông Nguyễn Bá Thanh">				
						</a>
						<h1>
							<a title="Nhiều người đến sân bay Đà Nẵng đợi tin ông Nguyễn Bá Thanh" href="#">
								Nhiều người đến sân bay Đà Nẵng đợi tin ông Nguyễn Bá Thanh	
							</a>
						</h1>
						<p>Để phòng ngừa người dân đổ xô đến sân bay đón ông Nguyễn Bá Thanh chữa bệnh từ Mỹ về, sáng 2-1&nbsp;an ninh khu vực sân bay Đà Nẵng đã được siết chặt.</p>
					</div>
					<div class="related-post">
						<ul class="other-post">
							<li> 
								<a href="#" style="background:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/related_img_1.jpg) no-repeat; background-size: cover;" class="img">
									<img class="img-related-post" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/related_img_1.jpg" alt="725630">
								</a>
								<a href="#"><p> Bất thường ở bộ phận sinh dục bé trai mà mẹ cần chú ý</p></a>
							</li>
							<li> 
								<a href="#" style="background:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/related_img_2.jpg) no-repeat; background-size: cover;" class="img">
									<img class="img-related-post" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/related_img_2.jpg" alt="725630">
								</a>
								<a href="#"><p> Bất thường ở bộ phận sinh dục bé trai mà mẹ cần chú ý</p> </a>
							</li>
							<li> 
								<a href="#" style="background:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/related_img_3.jpg) no-repeat; background-size: cover;" class="img">
									<img class="img-related-post" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/related_img_3.jpg" alt="725630">
								</a>
								<a href="#"><p> Bất thường ở bộ phận sinh dục bé trai mà mẹ cần chú ý</p></a>
							</li>
							
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
					
					<div id="centerNewsContent" class=" col-sm-9 col-md-7 col-lg-7">
						<div id="gotoCenter" class="mainCt">
							<div class="navMainCt cate ">
								<h2 class="title-h2">Mới nhất</h2>
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
							</div>
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