<?php
$rootURL = '/wordpress';
$page_param = $_GET['current'] ?? 1;
get_header();
?>

<div class="container py-4">
    <div class="row">
        <?php

        $args = array(
            'paged' => $page_param,
            'post_type' => 'post',
            'orderby'    => 'ID',
            'post_status' => 'publish',
            'order'    => 'DESC',
            'posts_per_page' => 12 // this will retrive all the post that is published 
        );

        $the_query = new WP_Query($args);

        if ($the_query->have_posts()) {
            while ($the_query->have_posts()) {
                $the_query->the_post();
        ?>
                <div class="col-md-4 card-item py-4" title="<?php the_title(); ?>">
                    <a href="<?php echo get_post_permalink(); ?>"><img style="height: 200px;" class="w-100" src="<?php echo get_the_post_thumbnail_url(); ?>"></a>
                    <div class="pt-2"><small><i><i class="fas fa-clock"></i>&nbsp;<?php echo get_the_date(); ?></i></small></div>
                    <p class="font-weight-bold text-ellipsis"><a class="text-dark" href="<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a></p>
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
        <div class="col-md-12 d-flex p-4">
            <ul id="border-pagination">
                <?php
                $paginate_args = array(
                    'status'            => array('publish'),
                    'limit'             => 12,
                    'paginate' => true,
                );
                $paginate_result = wc_get_products($paginate_args);
                for ($i = 0; $i < $the_query->max_num_pages; $i++) {
                    $page_number = $i + 1;
                    if ($page_param == $page_number) {
                ?>
                        <li><a class="active" href="<?php echo $rootURL . '/tin-tuc?current=' . $page_number ?>"><?php echo $page_number; ?></a></li>
                    <?php
                    } else {
                    ?>
                        <li><a href="<?php echo $rootURL . '/tin-tuc?current=' . $page_number ?>"><?php echo $page_number; ?></a></li>
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