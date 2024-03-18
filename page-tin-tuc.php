<?php
$cat_param = (get_query_var('cat')) ? get_query_var('cat') : -1;
$rootURL = '/wordpress';
get_header();
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="link-address">
                <a href="<?php echo $rootURL; ?>">Trang chủ</a>
                <span>></span>
                <a href="">Tin tức</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box_sidebar">
                <div class="sidebar_content">
                    <div class="box_menuLeft" id="box_menuLeft">
                        <div id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories" style="transform: translate(0px, 0px);">
                            <ul class="product-categories">
                                <?php
                                $categories = get_categories(array(
                                    'orderby' => 'name',
                                    'parent'  => 0
                                ));
                                foreach ($categories as $category) {
                                    echo '<li><a href="' . $rootURL . '/tin-tuc?cat=' . $category->term_id . '">' . $category->name . '</a></li>';
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <?php

            $args1 = array(
                // 'posts_per_page' => 1,
                // 'cat' => 4,
                // 'paged' => $paged,
                'post_type' => 'post',
                'orderby'    => 'ID',
                'post_status' => 'publish',
                'order'    => 'DESC',
                'posts_per_page' => -1 // this will retrive all the post that is published 
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

            $the_query = new WP_Query(array_merge($args1, $args2));

            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    $categories = get_the_category($post->ID);
                    $isExistCategory = count($categories) > 0;
                    if (!$isExistCategory) continue; // skip the no category
            ?>
                    <div class="row post-item">
                        <div class="col-md-3 post-thumbnail"><a href="<?php echo get_post_permalink(); ?>"><img width="100%" src="<?php echo get_the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>"></a></div>
                        <div class="col-md-7">
                            <p class="post-title"><a href="<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a></p>
                            <small><i class="fas fa-clock"></i>&nbsp;<?php echo get_the_date(); ?></small>
                        </div>
                    </div>
                <?php
                }
            } else {
                ?>
                <div>
                    Không có bài viết nào
                </div>
            <?php
            }
            wp_reset_query();
            ?>

        </div>
    </div>
</div>

<?php
get_footer();
?>