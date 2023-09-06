<?php
get_header();
?>
<div id="primary" class="page-primary">
    <main id="main" class="default-page" role="main">
        <div class="page-heading">
            <h1><?php
                $at = get_field('alternative_title');
                if ($at) {
                    echo $at;
                } else {
                    the_title();
                }
                ?>
            </h1>
            <p class="desc"><?php echo get_field('page_description'); ?></p>
        </div>
        <div class="page-content">
            <?php the_content(); ?>
        </div>

    </main><!-- #main -->
</div>
<?php
get_footer(); ?>