<?php get_header();?>

<div class="content">
    <div class="container">
        <div class="content-grids">
<!-- content-main-->
            <div class="col-md-8 content-main">
                <div class="content-grid">
<?php
while( have_posts() ){

    the_post();
?>
                    <div class="content-grid-info">
                        <?php
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                        }
                        ?>
                        <div class="post-info">
                            <h4>
                                <a href="<?= get_permalink(); ?>">
                                    <?= get_the_title(); ?>
                                </a> <?= $post->post_date; ?> / <?= $post->comment_count; ?> Comments
                            </h4>
                            <?php the_content('READ MORE'); ?>
                            <a href="<?= get_permalink(); ?>"><span></span></a>
                        </div>
                    </div>
<?php
}
?>
                </div>
            </div>
<!-- //content-main-->

        </div>
    </div>
</div>

<?php
wp_footer();
?>