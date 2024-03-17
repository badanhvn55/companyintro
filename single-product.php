<?php
get_header();
$rootURL = '/wordpress';
?>

<div class="container product">
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
                                ?>
                                    <li><a href="#"><?php echo $cat->name; ?></a>
                                    <?php
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
                <div class="col-md-12">
                    <h5 class='product-name'><?php the_title(); ?></h5>
                </div>
                <div class="col-md-6">
                    <?php
                    $product = wc_get_product();
                    $attachment_ids = $product->get_gallery_image_ids();
                    ?>
                    <div class="product__images">
                        <img src="<?php echo wp_get_attachment_url($attachment_ids[0]); ?>" class="product__main-image" id="main-image" />

                        <div class="product__slider-wrap">
                            <div class="product__slider">
                                <?php
                                foreach ($attachment_ids as $attachment_id) {
                                    if ($attachment_ids[0] == $attachment_id) :
                                ?>
                                        <img src="<?php echo wp_get_attachment_url($attachment_id); ?>" class="product__image product__image--active" />
                                    <?php else : ?>
                                        <img src="<?php echo wp_get_attachment_url($attachment_id); ?>" class="product__image" />
                                <?php
                                    endif;
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <p class="font-weight-bold text-uppercase">Đặc tính</p>
                    <table>
                        <tr>
                            <th>Hoạt chất</th>
                            <td><?php echo $product->get_attribute('hoat_chat'); ?></td>
                        </tr>
                        <tr>
                            <th>Quy cách</th>
                            <td><?php echo $product->get_attribute('quy_cach'); ?></td>
                        </tr>
                        <tr>
                            <th>Kích thước</th>
                            <td><?php echo $product->get_attribute('kich_thuoc'); ?></td>
                        </tr>
                        <tr>
                            <th>Chất liệu</th>
                            <td><?php echo $product->get_attribute('chat_lieu'); ?></td>
                        </tr>
                    </table>
                    <div class="description mt-3">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<script>
    const mainImage = document.getElementById("main-image");
    const images = document.querySelectorAll(".product__image");

    images.forEach((image) => {
        image.addEventListener("click", (event) => {
            mainImage.src = event.target.src;

            document
                .querySelector(".product__image--active")
                .classList.remove("product__image--active");

            event.target.classList.add("product__image--active");
        });
    });
</script>

<?php
get_footer();
?>