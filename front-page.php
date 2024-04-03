	<?php
	get_header();
	$rootURL = '/wordpress';
	?>

	<div class="container py-4">
		<div class="row">
			<?php

			$taxonomy     = 'product_cat';
			$orderby      = 'name';
			$show_count   = 0;      // 1 for yes, 0 for no
			$pad_counts   = 0;      // 1 for yes, 0 for no
			$hierarchical = 1;      // 1 for yes, 0 for no  
			$title        = '';
			$empty        = 0;

			$args = array(
				'taxonomy'     => $taxonomy,
				'orderby'      => $orderby,
				'show_count'   => $show_count,
				'pad_counts'   => $pad_counts,
				'hierarchical' => $hierarchical,
				'title_li'     => $title,
				'hide_empty'   => $empty
			);
			$all_categories = get_categories($args);
			foreach ($all_categories as $cat) :
				// get the thumbnail id using the queried category term_id
				$thumbnail_id = get_woocommerce_term_meta($cat->term_id, 'thumbnail_id', true);

				// get the image URL
				$image = wp_get_attachment_url($thumbnail_id);
			?>
				<div class="col-md-6 py-2">
					<figure style="height: 600px;" class="snip0023">
						<img style="height: 600px;" class="w-100" src="<?php echo $image; ?>" alt="">
						<div>
							<i class="fa fa-arrow-right" aria-hidden="true"></i>
							<div class="curl"></div>
							<a href="<?php echo $rootURL . '/san-pham?category=' . $cat->name . '&paginate=1' ?>"></a>
						</div>
					</figure>
					<a href="<?php echo $rootURL . '/san-pham?category=' . $cat->name . '&paginate=1' ?>">
						<h4 class="text-blue font-weight-bold text-uppercase text-ellipsis p-2"><?php echo $cat->name; ?></h4>
					</a>
				</div>
			<?php
			endforeach;
			?>
		</div>
	</div>

	<?php
	get_footer();
	?>