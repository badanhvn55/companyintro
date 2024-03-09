<?php
wp_footer();

$bg_footer = get_template_directory_uri() . "/asset/images/bg-footer.jpg";
$footer_slide1 = get_template_directory_uri() . "/asset/images/footer-slide1.jpg";
$footer_slide2 = get_template_directory_uri() . "/asset/images/footer-slide2.jpg";
$footer_slide3 = get_template_directory_uri() . "/asset/images/footer-slide3.jpg";
$footer_slide4 = get_template_directory_uri() . "/asset/images/footer-slide4.jpg";

?>

<div class="box_footer" style="background-image: url(<?php echo $bg_footer ?>);">
	<div class="container">
		<div class="row footer-top">
			<div class="col-xs-12 footer-link">
				<div class="menuBottom">
					<ul id="menu-bottom-menu">
						<li><a href="/lien-he">Liên hệ</a></li>
						<li>|</li>
						<li><a href="/diem-tu-van-3C/74">Điểm tư vấn 3 cùng</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="box_address">
					<div id="wp_editor_widget-3" class="widget WP_Editor_Widget">
						<div class="row">
							<div class="col-sm-4 space connect">
								<p class="title">Bạn cần hỗ trợ?</p>
								<p class="thunnghiem">
									<span><a href="/lien-he">
											<i class="fas fa-user-tie"></i>&nbsp; Hỗ trợ trực tuyến</a></span>
								</p>
								<p class="thunnghiem">
									<span><a>
											<i class="fas fa-envelope"></i>&nbsp; support@loctroi.vn</a></span>
								</p>
								<p class="thunnghiem">
									<span><a>
											<i class="fas fa-phone"></i>&nbsp; 1900 56 56 23 (2000 đồng/phút)</a></span>

								</p>
							</div>
							<div class="col-sm-3 space connect">
								<p class="title">Kết nối với chúng tôi</p>
								<p class="thunnghiem">
									<span><a title="facebook" href="https://www.facebook.com/loctroiag" target="_blank">
											<i class="fab fa-facebook-f"></i>
											&nbsp; Facebook
										</a></span>
								</p>
								<p class="thunnghiem">
									<span><a title="youtube" href="https://www.youtube.com/channel/UCvo8anYXStHCK6uShyujZxA?view_as=subscriber" target="_blank">
											<i class="fab fa-youtube"></i>
											&nbsp; Youtube</a></span>
								</p>
								<p class="thunnghiem">
									<span><a href="https://www.instagram.com/loctroigroup/" title="instagram" target="_blank">
											<i class="fab fa-instagram"></i>
											&nbsp; Instagram</a></span>
								</p>
							</div>
							<div class="col-sm-5 space footer-upper" style="float: right;">
								<p class="title"><span><a href="/thu-vien-anh" style="color: white; cursor: pointer">Thư viện ảnh</a></span></p>
								<div class="thumbs-outer clearfix">
									<div class="row">
										<div class="col-xs-3" style="padding-right: 5px; padding-left: 15px">
											<figure class="image" style="width:90px;height:90px"><a href="<?php echo $footer_slide1 ?>" data-fancybox=""><img class="clsalbum" src="<?php echo $footer_slide1 ?>" width="90"></a></figure>
										</div>
										<div class="col-xs-3" style="padding-right: 5px; padding-left: 15px">
											<figure class="image" style="width:90px;height:90px"><a href="<?php echo $footer_slide2 ?>" data-fancybox=""><img class="clsalbum" src="<?php echo $footer_slide2 ?>" width="90"></a></figure>
										</div>
										<div class="col-xs-3" style="padding-right: 5px; padding-left: 15px">
											<figure class="image" style="width:90px;height:90px"><a href="<?php echo $footer_slide3 ?>" data-fancybox=""><img class="clsalbum" src="<?php echo $footer_slide3 ?>" width="90"></a></figure>
										</div>
										<div class="col-xs-3" style="padding-right: 5px; padding-left: 15px">
											<figure class="image" style="width:90px;height:90px"><a href="<?php echo $footer_slide4 ?>" data-fancybox=""><img class="clsalbum" src="<?php echo $footer_slide4 ?>" width="90"></a></figure>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<span>© 2018. All right reserved: loctroi.vn</span>
		</div>
	</div>
</div>

<!-- Bootstrap Javascript -->
<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="js/main.js"></script> -->

</body>

</html>