<?php
get_header();
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="link-address">
                <a href="/wordpress">Trang chủ</a>
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
                                    if ($category->term_id == 1) continue; // skip the no category
                                    echo '<li><a href="/wordpress/tin-tuc/' . $category->term_id . '">' . $category->name . '</a></li>';
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

            $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
            $args = array(
                // 'posts_per_page' => 1,
                // 'cat' => 4,
                // 'paged' => $paged,
                'post_type' => 'post',
                'orderby'    => 'ID',
                'post_status' => 'publish',
                'order'    => 'DESC',
                'posts_per_page' => -1 // this will retrive all the post that is published 
            );
            $the_query = new WP_Query($args);

            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    $categories = get_the_category($post->ID);
                    $isExistCategory = count($categories) > 0;
                    if ($isExistCategory && $categories[0]->term_id == 1) continue; // skip the no category
            ?>
                    <div class="row post-item">
                        <div class="col-md-3"><img width="100%" src="<?php echo get_the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>"></div>
                        <div class="col-md-7">
                            <p class="post-title"><?php the_title(); ?></p>
                            <small><i class="fas fa-clock"></i>&nbsp;<?php the_date(); ?></small>
                        </div>
                    </div>
                <?php
                }
            } else {
                ?>
                <div>
                    {CODE_XU_LY_KHI_KHONG_CO_BAI_VIET}
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