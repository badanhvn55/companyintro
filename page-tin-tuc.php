<?php
$rootURL = '/wordpress';
get_header();
?>

<div class="container">
    <div class="row">
        <?php

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
        ?>
                <div class="col-md-4 py-4">
                    <a href="<?php echo get_post_permalink(); ?>"><img class="w-100" src="<?php echo get_the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>"></a>
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

    </div>
</div>

<?php
get_footer();
?>