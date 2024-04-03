<?php
$rootURL = '/wordpress';
$cat_param = $_GET['category'] ?? 'Thuốc trừ sâu';
$page_param = $_GET['paginate'] ?? 1;
get_header();
?>

<div class="container py-2">
    <div class="row">
        <div class="col-md-12 bg-blue-active py-2 my-4">
            <h3 class="text-uppercase text-white font-weight-bold"><?php echo $cat_param; ?></h3>
        </div>
        <?php
        // Default arguments
        $args = array(
            'status'            => array('publish'),
            // 'type'              => array_merge(array_keys(wc_get_product_types())),
            // 'parent'            => null,
            // 'sku'               => '',
            'category'          => array($cat_param),
            'tag'               => array(),
            // 'limit'             => get_option('posts_per_page'),  // -1 for unlimited
            'limit'             => 12,
            // 'offset'            => null,
            'page'              => $page_param,
            'include'           => array(),
            'exclude'           => array(),
            'orderby'           => 'date',
            'order'             => 'DESC',
            'return'            => 'objects',
            // 'paginate'          => false,
            // 'shipping_class'    => array(),
        );

        // Array of product objects
        $products = wc_get_products($args);

        if (count($products) > 0) {

            // Loop through list of products
            foreach ($products as $product) :

                // Collect product variables
                $product_id   = $product->get_id();
                $product_name = $product->get_name();

        ?>
                <div class="col-md-3 py-2 px-1 border bg-light">
                    <a href="<?php echo get_permalink($product->id); ?>"><img class="w-100" title="<?php echo $product->name; ?>" src="<?php echo wp_get_attachment_url($product->get_image_id()); ?>"></a>
                    <p class="text-ellipsis font-weight-bold pt-2"><a class="text-dark" href="<?php echo get_permalink($product->id); ?>"><?php echo $product->name; ?></a></p>
                    <a href="<?php echo get_permalink($product->id); ?>" class="btn btn-primary rounded-pill py-1 my-0">Xem thêm</a>
                </div>
            <?php

            endforeach;
        } else {
            ?>
            <div class="col-md-12 py-2">
                Không có sản phẩm nào
            </div>
        <?php
        }
        ?>
        <div class="col-md-12 d-flex p-4">
            <ul id="border-pagination" class="p-4">
                <?php
                $paginate_args = array(
                    'status'            => array('publish'),
                    'category'          => array($cat_param),
                    'limit'             => 12,
                    'paginate' => true,
                );
                $paginate_result = wc_get_products($paginate_args);
                for ($i = 0; $i < $paginate_result->max_num_pages; $i++) {
                    $page_number = $i + 1;
                    if ($page_param == $page_number) {
                ?>
                        <li><a class="active" href="<?php echo $rootURL . '/san-pham?category=' . $cat_param . '&paginate=' . $page_number ?>"><?php echo $page_number; ?></a></li>
                    <?php
                    } else {
                    ?>
                        <li><a href="<?php echo $rootURL . '/san-pham?category=' . $cat_param . '&paginate=' . $page_number ?>"><?php echo $page_number; ?></a></li>
                <?php
                    }
                }
                ?>
            </ul>
        </div>
    </div>
</div>

<?php
get_footer();
?>