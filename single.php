<?php
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
                                    echo '<li><a href="' . $rootURL . '/tin-tuc/' . $category->term_id . '">' . $category->name . '</a></li>';
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9 post-detail">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="post-title">
                        <?php the_title(); ?>
                    </div>
                    <?php the_content(); ?>
                    <small class="post-created"><?php echo get_the_date(); ?></small>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php
get_footer();
?>