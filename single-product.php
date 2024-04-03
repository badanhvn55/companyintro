<?php
get_header();
$rootURL = '/wordpress';
?>

<div class="container py-4">
    <div class="row">
        <div class="col-md-12 py-2">
            <h4 class='text-blue font-weight-bold text-ellipsis'>
                <?php
                $product = wc_get_product();
                $terms = wp_get_post_terms( $product->id, 'product_cat' );
                echo $terms[0]->name . ' - ' . $product->name;
                ?>
            </h4>
        </div>
        <div class="col-md-6">
            <div id="produccarouselindicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                <div class="carousel-indicators d-flex flex-row justify-content-around items-center">
                    <?php
                    $attachment_ids = $product->get_gallery_image_ids();
                    for ($i = 0; $i < count($attachment_ids); $i++) :
                        if ($i == 0) :
                    ?>
                            <div data-target="#produccarouselindicators" data-slide-to="<?php echo $i; ?>" class="active">
                                <img class="cursor-pointer" width="100" src="<?php echo wp_get_attachment_url($attachment_ids[$i]); ?>" alt="">
                            </div>
                        <?php else : ?>
                            <div data-target="#produccarouselindicators" data-slide-to="<?php echo $i; ?>" class="">
                                <img class="cursor-pointer" width="100" src="<?php echo wp_get_attachment_url($attachment_ids[$i]); ?>" alt="">
                            </div>
                    <?php
                        endif;
                    endfor;
                    ?>
                </div>
                <div class="carousel-inner bg-gray">
                    <?php
                    foreach ($attachment_ids as $attachment_id) :
                        if ($attachment_ids[0] == $attachment_id) :
                    ?>
                            <div class="carousel-item active">
                                <img style="height: 600px;" class="w-100" src="<?php echo wp_get_attachment_url($attachment_id); ?>" alt="">
                            </div>
                        <?php else : ?>
                            <div class="carousel-item">
                                <img style="height: 600px;" class="w-100" src="<?php echo wp_get_attachment_url($attachment_id); ?>" alt="Second slide">
                            </div>
                    <?php
                        endif;
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="d-flex flex-column gap-2">
                <?php
                if ($product->get_attribute('cach_dung')) :
                ?>
                    <div class="border-bottom">
                        <h4 class='font-weight-bold'>
                            Cách dùng
                        </h4>
                        <p><?php echo $product->get_attribute('cach_dung'); ?></p>
                    </div>
                <?php
                endif;
                if ($product->get_attribute('dac_tri')) :
                ?>
                    <div class="border-bottom">
                        <h4 class='font-weight-bold'>
                            Đặc trị
                        </h4>   
                        <p><?php echo $product->get_attribute('dac_tri'); ?></p>
                    </div>
                <?php
                endif;
                if ($product->get_attribute('loi_ich')) :
                ?>
                    <div>
                        <h4 class='font-weight-bold'>
                            Lợi ích
                        </h4>
                        <p><?php echo $product->get_attribute('loi_ich'); ?></p>
                    </div>
                <?php
                endif;
                ?>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>