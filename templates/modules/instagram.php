<!-- includes/instagram.php -->

<?php
$instagram_username = !empty($layout['instagram_username']) ? $layout['instagram_username'] : 'thefreehand'  ;
$instagram_posts = array();

$query_args = array (
    'post_type' => 'instagram-posts',
    'posts_per_page' => 16,
    'order' => 'DESC',
    'meta_key' => 'instagram_username',
    'meta_value' => $instagram_username,
    'meta_compare' => '='
);

switch_to_blog(MAIN_SITE_ID);

$instagram_query = new WP_Query( $query_args );

if( $instagram_query->have_posts() ): ?>

    <?php
    $size = 'custom-300x300';
    while ($instagram_query->have_posts()) {
        $instagram_query->the_post();
        $post_id = get_the_ID();
        $instagram_post = new stdClass();
        $instagram_post->link = get_post_meta(  $post_id , 'instagram_link', true);
        // $instagram_post->image = get_the_post_thumbnail_url();
        $instagram_post->image = wp_get_attachment_image_url(  get_post_thumbnail_id($post_id)  , $size );

        $instagram_posts[] = $instagram_post;
    }
    ?>

    <div class="instagram"></div>

    <script type="text/javascript">
        window._instagramPosts = <?php echo json_encode($instagram_posts) ?>;
    </script>

<?php else: ?>

    <!-- No instagram posts found -->

<?php endif; ?>

<?php restore_current_blog(); ?>
