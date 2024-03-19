	<?php
	get_header();
	$rootURL = '/wordpress';
	$thucpham = get_template_directory_uri() . "/asset/images/thuc-pham.png";
	$dichvu = get_template_directory_uri() . "/asset/images/dich-vu.png";
	$chuoigiatri = get_template_directory_uri() . "/asset/images/chuoi-gia-tri.png";
	$cndrd = get_template_directory_uri() . "/asset/images/CNDRĐ.png";
	$nghiencuuvaphattrien = get_template_directory_uri() . "/asset/images/nghien-cuu-va-phat-trien.png";
	$baovethucvat = get_template_directory_uri() . "/asset/images/bao-ve-thuc-vat.png";
	$intro_news = get_template_directory_uri() . "/asset/images/intro-news.png";
	?>

	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<div class="box_products">
					<div class="row">
						<div class="col-md-12">
							<div class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<div class="row">

											<div class="col-md-3">
												<div class="product-item">
													<img class="img-fluid" src="<?php echo $thucpham ?>" />
													<p class="product-title">Thực phẩm</p>
												</div>
											</div>
											<div class="col-md-3">
												<div class="product-item">
													<img class="img-fluid" src="<?php echo $dichvu ?>" />
													<p class="product-title">Dịch vụ</p>
												</div>
											</div>
											<div class="col-md-3">
												<div class="product-item">
													<img class="img-fluid" src="<?php echo $chuoigiatri ?>" />
													<p class="product-title">Chuỗi giá trị</p>
												</div>
											</div>
											<div class="col-md-3">
												<div class="product-item">
													<img class="img-fluid" src="<?php echo $cndrd ?>" />
													<p class="product-title">Cùng nông dân ra đồng</p>
												</div>
											</div>
										</div>
									</div>
									<div class="carousel-item">
										<div class="row">

											<div class="col-md-3">
												<div class="product-item">
													<img class="img-fluid" src="<?php echo $cndrd ?>" />
													<p class="product-title">Cùng nông dân ra đồng</p>
												</div>
											</div>
											<div class="col-md-3">
												<div class="product-item">
													<img class="img-fluid" src="<?php echo $nghiencuuvaphattrien ?>" />
													<p class="product-title">Nghiên cứu và phát triển</p>
												</div>
											</div>
											<div class="col-md-3">
												<div class="product-item">
													<img class="img-fluid" src="<?php echo $baovethucvat ?>" />
													<p class="product-title">Bảo vệ thực vật</p>
												</div>
											</div>
											<div class="col-md-3">
												<div class="product-item">
													<img class="img-fluid" src="<?php echo $thucpham ?>" />
													<p class="product-title">Thực phẩm</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="box_highlight box-d	efault">
					<div class="row">
						<div class="col-md-12">
							<div class="box_newsHome">
								<div class="box_title box-title-default">
									<a href="<?php echo $rootURL . '/tin-tuc' ?>">Tin tức hoạt động</a>
								</div>
								<div class="slide_hinhanh" id="box_newsHome">
									<div class="carousel slide multi-item-carousel" id="theCarousel">
										<div class="carousel-inner row w-100 mx-auto">
											<?php
											$args = array(
												'post_type' => 'post',
												'orderby'    => 'ID',
												'post_status' => 'publish',
												'order'    => 'DESC',
												'posts_per_page' => -1 // this will retrive all the post that is published 
											);
											$the_query = new WP_Query($args);
											$news_index = 0;
											if ($the_query->have_posts()) {
												while ($the_query->have_posts()) {
													$the_query->the_post();
													$categories = get_the_category($post->ID);
													$isExistCategory = count($categories) > 0;
													if (!$isExistCategory) continue; // skip the no category
											?>
													<div class="col-md-4 carousel-item<?php echo $news_index === 0 ? ' active' : ''; ?>">
														<div class="card-item">
															<a href="<?php echo get_post_permalink(); ?>"><img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>"></a>
															<p class="card-title"><a href="<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a></p>
														</div>
													</div>
												<?php
													$news_index++;
												}
											} else {
												?>
												<div class="col-md-4">
													Nothing
												</div>
											<?php
											}
											wp_reset_query();
											?>
										</div>
										<a class="carousel-control-prev" href="#theCarousel" role="button" data-slide="prev">
											<span class="carousel-control-prev-icon text-dark" aria-hidden="true"></span>
											<span class="sr-only">Previous</span>
										</a>
										<a class="carousel-control-next" href="#theCarousel" role="button" data-slide="next">
											<span class="carousel-control-next-icon text-dark" aria-hidden="true"></span>
											<span class="sr-only">Next</span>
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="box_newsHome">
								<div class="box_title box-title-default">
									<a href="<?php echo $rootURL . '/gioi-thieu' ?>">Giới thiệu</a>
								</div>
								<div class="card-item">
									<a href="<?php echo $rootURL . '/gioi-thieu' ?>"><img class="img-fluid" alt="" src="<?php echo $intro_news; ?>"></a>
									<p class="card-title"><a href="<?php echo $rootURL . '/gioi-thieu' ?>">Giới thiệu chung về Công ty CP Quốc Tế Hòa Bình</a></p>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="box_newsHome">
								<div class="box_title box-title-default">
									<a href="#">Phát triển bên vững</a>
								</div>
								<div class="card-item">
									<img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
									<p class="card-title">Special title treatment With supporting text below as a natural lead-in to additional content.
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="box_newsHome">
								<div class="box_title box-title-default">
									<a href="#">Quan hệ cộng đồng</a>
								</div>
								<div class="card-item">
									<img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
									<p class="card-title">Special title treatment With supporting text below as a natural lead-in to additional content.
									</p>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="box_newsHome">
								<div class="box_title box-title-default">
									<a href="#">Media</a>
								</div>
								<div class="card-item">
									<img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
									<p class="card-title">Special title treatment With supporting text below as a natural lead-in to additional content.
									</p>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="box_newsHome">
								<div class="box_title box-title-default">
									<a href="#">Bí kíp nhà nông</a>
								</div>
								<div class="slide_hinhanh">
									<div id="bikipnhanongCarouse" class="carousel slide" data-ride="carousel">
										<div class="carousel-inner">
											<div class="carousel-item active">
												<div class="row">
													<div class="col-md-6 mb-3">
														<div class="card-item">
															<img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
															<p class="card-title">Special title treatment With supporting text below as a natural lead-in to additional content.
															</p>
														</div>
													</div>
													<div class="col-md-6 mb-3">
														<div class="card-item">
															<img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
															<p class="card-title">Special title treatment With supporting text below as a natural lead-in to additional content.
															</p>
														</div>
													</div>

												</div>
											</div>
											<div class="carousel-item">
												<div class="row">

													<div class="col-md-6 mb-3">
														<div class="card-item">
															<img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
															<p class="card-title">Special title treatment With supporting text below as a natural lead-in to additional content.
															</p>
														</div>
													</div>
													<div class="col-md-6 mb-3">
														<div class="card-item">
															<img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
															<p class="card-title">Special title treatment With supporting text below as a natural lead-in to additional content.
															</p>
														</div>
													</div>

												</div>
											</div>
											<div class="carousel-item">
												<div class="row">

													<div class="col-md-6 mb-3">
														<div class="card-item">
															<img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
															<p class="card-title">Special title treatment With supporting text below as a natural lead-in to additional content.
															</p>
														</div>
													</div>
													<div class="col-md-6 mb-3">
														<div class="card-item">
															<img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
															<p class="card-title">Special title treatment With supporting text below as a natural lead-in to additional content.
															</p>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="box_newsHome">
								<div class="box_title box-title-default">
									<a href="#">Thần nông vi hành</a>
								</div>
								<div class="slide_hinhanh">
									<div id="bikipnhanongCarouse" class="carousel slide" data-ride="carousel">
										<div class="carousel-inner">
											<div class="carousel-item active">
												<div class="row">
													<div class="col-md-6 mb-3">
														<div class="card-item">
															<img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
															<p class="card-title">Special title treatment With supporting text below as a natural lead-in to additional content.
															</p>
														</div>
													</div>
													<div class="col-md-6 mb-3">
														<div class="card-item">
															<img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
															<p class="card-title">Special title treatment With supporting text below as a natural lead-in to additional content.
															</p>
														</div>
													</div>

												</div>
											</div>
											<div class="carousel-item">
												<div class="row">

													<div class="col-md-6 mb-3">
														<div class="card-item">
															<img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
															<p class="card-title">Special title treatment With supporting text below as a natural lead-in to additional content.
															</p>
														</div>
													</div>
													<div class="col-md-6 mb-3">
														<div class="card-item">
															<img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
															<p class="card-title">Special title treatment With supporting text below as a natural lead-in to additional content.
															</p>
														</div>
													</div>

												</div>
											</div>
											<div class="carousel-item">
												<div class="row">

													<div class="col-md-6 mb-3">
														<div class="card-item">
															<img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
															<p class="card-title">Special title treatment With supporting text below as a natural lead-in to additional content.
															</p>
														</div>
													</div>
													<div class="col-md-6 mb-3">
														<div class="card-item">
															<img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
															<p class="card-title">Special title treatment With supporting text below as a natural lead-in to additional content.
															</p>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
	get_footer();
	?>

	<script>
		// Developed at agap2
		// Based on:
		// http://www.codeply.com/go/s3I9ivCBYH/multi-carousel-single-slide-bootstrap-4

		$('.multi-item-carousel').on('slide.bs.carousel', function(e) {
			let $e = $(e.relatedTarget),
				itemsPerSlide = 3,
				totalItems = $('.carousel-item', this).length,
				$itemsContainer = $('.carousel-inner', this),
				it = itemsPerSlide - (totalItems - $e.index());
			if (it > 0) {
				for (var i = 0; i < it; i++) {
					$('.carousel-item', this).eq(e.direction == "left" ? i : 0).
					// append slides to the end/beginning
					appendTo($itemsContainer);
				}
			}
		});
	</script>