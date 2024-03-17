<?php
$cat_param = (get_query_var('cat')) ? get_query_var('cat') : -1;
$page_param = (get_query_var('product_data')) ? get_query_var('product_data') : 1;
$rootURL = '/wordpress';
get_header();
?>

<div class="container product-list">
    <div class="row">
        <div class="col-md-12">
            <div class="link-address">
                <a href="<?php echo $rootURL; ?>">Trang chủ</a>
                <span>></span>
                <a href="<?php echo $rootURL; ?>/san-pham">Sản phẩm</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box_sidebar">
                <div class="sidebar_content">
                    <div class="box_menuLeft" id="box_menuLeft">
                        <div id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories" style="transform: translate(0px, 0px);">
                            <ul class="product-categories">
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
                                foreach ($all_categories as $cat) {
                                    if ($cat->name == 'Chưa phân loại') continue; // skip the no category
                                    if ($cat_param == $cat->term_id) {
                                ?>
                                        <li class='active'><a href="<?php echo $rootURL; ?>/san-pham/?cat=<?php echo $cat->term_id; ?>"><?php echo $cat->name; ?></a>
                                        <?php
                                    } else {
                                        ?>
                                        <li><a href="<?php echo $rootURL; ?>/san-pham/?cat=<?php echo $cat->term_id; ?>"><?php echo $cat->name; ?></a>
                                    <?php
                                    }
                                }
                                    ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="row">
                <?php
                $posts_per_page = 9;
                $args1 = array(
                    'post_type'      => 'product',
                    'post_status'           => 'publish',
                    'posts_per_page' => $posts_per_page,
                    'offset' => $page_param,
                );

                $args2 = $cat_param == -1 ? array() : array(
                    'tax_query'             => array(
                        array(
                            'taxonomy'      => 'product_cat',
                            'field' => 'term_id', //This is optional, as it defaults to 'term_id'
                            'terms'         => $cat_param,
                            'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
                        ),
                    )
                );

                $loop = new WP_Query(array_merge($args1, $args2));

                while ($loop->have_posts()) : $loop->the_post();
                    global $product;
                ?>
                    <div class="col-md-4 product-item">
                        <a href="<?php echo get_post_permalink(); ?>"><img class="product-image img-fluid" title="<?php the_title(); ?>" src="<?php echo wp_get_attachment_url($product->get_image_id()); ?>"></a>
                        <p class="product-name"><a href="<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a></p>
                    </div>
                <?php
                endwhile;

                // wp_reset_query();
                ?>
            </div>
            <div class="row">
                <ul id="border-pagination">
                    <?php
                    $args = array(
                        'limit' => 4,
                        'page' => $page_param,
                    );
                    $results = wc_get_products($args);
                    for ($i = 0; $i < 5; $i++) {
                        if ($page_param == $i) {
                    ?>
                            <li><a class="active" href="<?php echo $rootURL . '/san-pham?cat=' . $cat_param . '&product_data=' . $i ?>"><?php echo $i + 1; ?></a></li>
                        <?php
                        } else {
                        ?>
                            <li><a href="<?php echo $rootURL . '/san-pham?cat=' . $cat_param . '&product_data=' . $i ?>"><?php echo $i + 1; ?></a></li>
                    <?php
                        }
                    }
                    ?>
                </ul>
            </div>

            <?php // Get products with extra info about the results.
            // $offset = 1;
            // $args = array(
            //     'limit' => 4,
            //     'offset' => $page_param,
            // );
            // $results = wc_get_products($args);
            // echo $results->total . ' products found\n';
            // echo 'Page 1 of ' . $results->max_num_pages . '\n';
            // echo 'First product id is: ' . $results->products[0]->get_id() . '\n';
            ?>
        </div>
    </div>
</div>

<?php
get_footer();
?>