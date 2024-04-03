<?php
$rootURL = '/wordpress';
get_header();
?>

<div class="container py-4">
    <div class="row">
        <div class="col-md-12">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <h4 class="text-ellipsis text-blue">
                        <?php the_title(); ?>
                    </h4>
                    <?php the_content(); ?>
                    <small><i><?php echo get_the_date(); ?></i></small>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php
get_footer();
?>