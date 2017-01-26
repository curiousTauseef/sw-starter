<!-- includes/posts.php  -->
<?php

$post_type = $layout['select_post_type'];
$category_slug = $layout['blog_category_slug'];
$number_of_posts = $layout['number_of_posts_to_show'] == '*'
    ? '-1' : $layout['number_of_posts_to_show'];
$archive_link = get_post_type_archive_link($post_type);

if ($post_type == 'blog') {
    switch_to_blog(1);
}

$args = array(
    'post_type' => $post_type,
    'posts_per_page' => $number_of_posts,
);

if ($post_type == 'blog' && $category_slug) {
    $args['tax_query'] = array(
        array(
            'taxonomy' => 'blog_categories',
            'field'    => 'slug',
            'terms'    => $category_slug,
        ),
    );
}

$the_query = new WP_Query($args);
$data = $the_query->posts;
$placeholder_img = get_template_directory_uri() . '/dist/images/placeholder/placeholder-brandmark-300x300.jpg';

foreach ($data as $data_key => $data_value) {
    $data[$data_key]->permalink = get_permalink($data_value->ID);
    $data[$data_key]->terms = get_the_terms($data_value->ID, 'blog_categories');
    $img_url = has_post_thumbnail($data_value->ID)
        ? wp_get_attachment_image_src(get_post_thumbnail_id($data_value->ID), 'custom-300x300')[0]
        : $placeholder_img;
    $data[$data_key]->img_url = count($img_url) > 0 ? $img_url : $placeholder_img;
}

if ($post_type == 'blog') {
    restore_current_blog();
}
?>

<div class="posts posts--<?php echo !empty($layout['color_theme']) ?  $layout['color_theme'] : 'dark'; ?>">

    <?php if ($layout['title']) { ?>
        <div class="posts__title">
            <?php if($layout['link_title_to_posts_archive']): ?>
                <a href="<?php echo $archive_link ?>" class="posts__title__link">
                    <?php echo $layout['title'] ?>
                </a>
            <?php else: ?>
                <?php echo $layout['title'] ?>
            <?php endif; ?>
        </div>
    <?php } ?>

    <div class="posts__row">
        <?php foreach ($data as $data_key => $data_value) { ?>
            <article class="posts__row__item">
                <a href="<?php echo $data_value->permalink ?>">
                    <?php if (is_array($data_value->terms)) { ?>
                        <h5 class="posts__row__item__surtitle">
                            <?php echo $data_value->terms[0]->name ?>
                        </h5>
                    <?php } ?>
                    <div class="posts__row__item__image">
                        <img src="<?php echo $data_value->img_url; ?>" />
                    </div>
                    <h1 class="posts__row__item__title">
                        <?php echo $data_value->post_title ?>
                    </h1>
                </a>
            </article>
        <?php } ?>
    </div>

    <?php if (is_array($layout['ctas'])) { ?>
        <?php foreach ($layout['ctas'] as $cta_key => $cta_value) { ?>
            <?php $link_target = $cta_value['open_in_new_window'] ? '_blank' : '_self'; ?>
            <div class="posts__cta">
                <a href="<?php echo $cta_value['url'] ?>" class="posts__cta__btn" target="<?php echo $link_target ?>">
                    <?php echo $cta_value['text'] ?>
                </a>
            </div>
        <?php } ?>
    <?php } ?>
</div>
