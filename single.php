<?php
$rootURL = '/wordpress';
get_header();
?>

<div class="container py-4">
    <div class="row">
        <div class="col-md-12">
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