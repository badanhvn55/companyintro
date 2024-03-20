<?php
$rootURL = '/wordpress';
$cat_param = $_GET['cat'] ?? -1;
$page_param = $_GET['offset'] ?? 1;
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
                // Get products with extra info about the results.
                $limit = 9;
                $args1 = array(
                    'limit' => $limit,
                    'page' => intval($page_param),
                );
                $args2 = $cat_param > -1 ? array(
                    'product_category_id' => array($cat_param),
                ) : array();
                $products = wc_get_products(array_merge($args1, $args2));
                foreach ($products as $product) :
                ?>
                    <div class="col-md-4">
                        <div class="card-item">
                            <a href="<?php echo get_permalink($product->id); ?>"><img class="img-fluid" title="<?php echo $product->name; ?>" src="<?php echo wp_get_attachment_url($product->get_image_id()); ?>"></a>
                            <p class="card-title"><a href="<?php echo get_permalink($product->id); ?>"><?php echo $product->name; ?></a></p>
                        </div>
                    </div>
                <?php
                endforeach;
                ?>
            </div>
            <div class="row">
                <ul id="border-pagination">
                    <?php
                    $paginate_args = array(
                        'limit' => $limit,
                        'paginate' => true,
                    );
                    $paginate_result = wc_get_products($paginate_args);
                    for ($i = 0; $i < $paginate_result->max_num_pages; $i++) {
                        $page_number = $i + 1;
                        if ($page_param == $page_number) {
                    ?>
                            <li><a class="active" href="<?php echo $rootURL . '/san-pham?cat=' . $cat_param . '&offset=' . $page_number ?>"><?php echo $page_number; ?></a></li>
                        <?php
                        } else {
                        ?>
                            <li><a href="<?php echo $rootURL . '/san-pham?cat=' . $cat_param . '&offset=' . $page_number ?>"><?php echo $page_number; ?></a></li>
                    <?php
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>