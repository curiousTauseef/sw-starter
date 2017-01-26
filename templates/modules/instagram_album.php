<!-- includes/instagram_album.php -->

<?php
$instagram_username = $layout['instagram_username'];
$instagram_posts = array();

$query_args = array (
    'post_type' => 'instagram-posts',
    'posts_per_page' => 9,
    'order' => 'DESC',
);

if ($instagram_username) {
    $query_args['meta_key'] = 'instagram_username';
    $query_args['meta_value'] = $instagram_username;
    $query_args['meta_compare'] = '=';
}

switch_to_blog(MAIN_SITE_ID);

$instagram_query = new WP_Query( $query_args );

if( $instagram_query->have_posts() ): ?>

    <div class="instagram-album">

        <div class="instagram-album__title"><?php echo $layout['title'] ?></div>

        <div class="instagram-album__container">
            <?php while ($instagram_query->have_posts()): ?>
                <?php $instagram_query->the_post(); ?>

                <a href="<?php echo get_post_meta( get_the_ID(), 'instagram_link', true) ?>" class="instagram-album__item"
                   style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>)" target="_blank">
                </a>

            <?php endwhile; ?>
        </div>

        <?php if ($instagram_username): ?>
            <div class="instagram-album__cta-wrapper">
                <a class="instagram-album__cta" href="http://instagram.com/<?php echo $instagram_username ?>"
                target="_blank">View More</a>
            </div>
        <?php endif; ?>

    </div>

<?php else: ?>

    <!-- No instagram posts found -->

<?php endif; ?>

<?php restore_current_blog(); ?>
