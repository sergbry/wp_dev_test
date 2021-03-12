<?php get_header();?>

<div class="content">
    <div class="container">
        <div class="content-grids">
<!-- content-main-->
            <div class="col-md-8 content-main">
                <div class="content-grid">

<?php if ( is_search()  && !have_posts() ) { ?>
                    <div class="content-grid-info">
                        <div class="post-info">
                            <h4>Search results:</h4>
                            <p>Sorry. There is no content like <b>"<?= get_search_query() ?>"</b> here.</p>
                        </div>
                    </div>
<?php }

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
                                </a> <?= get_the_date(); ?> / <?= $post->comment_count; ?> Comments
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
<!-- content-right-->
            <div class="col-md-4 content-right">
                <?php dynamic_sidebar('right-sidebar'); ?>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
<!-- //content-right-->
        </div>
    </div>
</div>

<?php get_footer(); ?>