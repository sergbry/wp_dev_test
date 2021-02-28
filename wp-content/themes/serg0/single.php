<?php
the_post();
global $post;
$author = $post->post_author;
$author_args = array(
    'class' => 'img-responsive',
);
$author_avatar_img = get_avatar($author,66, 'mystery', '', $author_args);
$comment_args = array(
    'label_submit' => 'SEND',
);

get_header(); ?>
    <div class="single">
        <div class="container">
            <div class="col-md-8 single-main">
                <div class="single-grid">
                    <?php
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                    }
                    the_content();
                    ?>
                </div>
                <ul class="comment-list">
                    <h5 class="post-author_head">Written by <?= get_the_author_posts_link(); ?></h5>
                    <li><?= $author_avatar_img; ?>
                        <div class="desc">
                            <p>View all posts by: <?= get_the_author_posts_link(); ?></p>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                </ul>
                <div class="content-form">
                    <?php comment_form($comment_args); ?>
                </div>
            </div>
            <div class="col-md-4 content-right">
                <?php dynamic_sidebar('right-sidebar'); ?>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
<?php get_footer(); ?>