<!-- includes/staggered_posts.php -->
<?php

/*
 * Expected Post Object = [
 *     [title] => 'Miami Beach',
 *     [tag]   => 'MIA',
 *     [url]   => 'http://localhost:3000/miami'
 *     [image] => Array,
 *     [post] => Array,
 *     ...
 * ]
 */

if (!function_exists('clean_staggered_post')) {
    function clean_staggered_post($post) {
        if (isset($post['post'])) {
            $post_id = $post['post']->ID;
            $gallery = get_field('gallery', $post_id);
            return [
                'title' => '',
                'tag'   => $post['post']->post_title,
                'url'   => get_permalink($post_id),
                'image' => $gallery[0],
                'post'  => $post['post']
            ];
        } else {
            return $post;
        }
    }
}

/*
 * Create Data Structure and helpful variables
 */
$data = $layout['posts'];
foreach ($data as $post_key => $post_value) {
    $data[$post_key] = clean_staggered_post($post_value);
    $data[$post_key]['index'] = $post_key;
}
$chunked_data = array_chunk( $data, ceil(count($data)/2) );
$slider_enabled_class = $layout['content_type'] == 'post' ? 'staggered-posts--slider-enabled' : '';

/*
 * Create three file sizes to use in our two column system
 * Left column should order: 1,2,3,1,2,3...
 * Right column should order: 2,3,1,2,3,1...
 * This weird system of image sizes makes
 * the staggerd system fit together
 */
if (!function_exists('get_image_size')) {
    function get_image_size($chunk_key, $data_key) {
        $image1 = '460x500';
        $image2 = '586x396';
        $image3 = '464x630';
        switch ($chunk_key) {
            case 0:
                switch ($data_key%3) {
                    case 0: return $image1; break;
                    case 1: return $image2; break;
                    case 2: return $image3; break;
                }
                break;
            case 1:
                switch ($data_key%3) {
                    case 0: return $image2; break;
                    case 1: return $image3; break;
                    case 2: return $image1; break;
                }
                break;
            default:
                return $image3; break;
        }
    }
}

if (!function_exists('property_html_template')) {
    function property_html_template($data_value, $image_size) {
        $post_tag_size = strlen($data_value['tag']) > 3 ? 'staggered-posts__post__tag--small' : '';
        $wp_image_size = 'custom-' . $image_size;
        $image = $data_value['image']['mime_type'] == 'image/gif' ? $data_value['image']['url'] : $data_value['image']['sizes'][$wp_image_size];
        $html = '<article class="staggered-posts__post" data-index="' . $data_value['index'] . '">';
        $html .= '<a href="' . $data_value['url'] . '" class="js-click staggered-posts__post__bg-image-wrap" style="background-image: url(' . $image . ');">';
        $html .= '<img src="/content/themes/freehand/dist/images/placeholder/placeholder-' . $image_size . '.png">';
        $html .= '<div class="staggered-posts__post__tag ' . $post_tag_size . '" translate=no>' . $data_value['tag'] . '</div>';
        $html .= '</a>';
        $html .= '<a href="' . $data_value['url'] . '" class="js-click staggered-posts__post__title" translate=no>' . $data_value['title'] . '</a>';
        $html .= '</article>';
        return $html;
    }
} ?>

<div class="staggered-posts">

    <?php if($layout['title']): ?>
        <div class="staggered-posts__title"><?php echo $layout['title'] ?></div>
    <?php endif; ?>

    <?php if($layout['description']): ?>
        <div class="staggered-posts__description"><?php echo $layout['description'] ?></div>
    <?php endif; ?>

    <?php if($layout['booking_cta']): ?>
        <div class="staggered-posts__cta-wrapper">
            <a href class="staggered-posts__cta js-staggered-posts-booking-widget-cta">
                <?php echo $layout['booking_cta'] ?>
            </a>
        </div>
    <?php endif; ?>

    <?php if (is_array($chunked_data)) { ?>
        <div class="staggered-posts--staggered staggered-posts--desktop <?php echo $slider_enabled_class; ?>">
            <?php foreach ($chunked_data as $chunk_key => $chunk_value) { ?>
                <div class="staggered-posts__column">
                    <?php foreach ($chunk_value as $data_key => $data_value) { ?>
                        <?php $image_size = get_image_size($chunk_key, $data_key); ?>
                        <?php echo property_html_template($data_value, $image_size) ?>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    <?php } ?>

    <?php if (is_array($data)) { ?>
        <div class="staggered-posts--staggered staggered-posts--mobile <?php echo $slider_enabled_class; ?>">
            <?php foreach ($data as $data_key => $data_value) { ?>
                <?php $image_size = get_image_size($chunk_key, $data_key); ?>
                <?php echo property_html_template($data_value, $image_size) ?>
            <?php } ?>
        </div>
    <?php } ?>


    <?php if ($layout['content_type'] == 'post' && is_array($data)) { ?>
        <div class="staggered-posts--slider">
            <div class="staggered-posts--slider__nav">
                <a href="#" class="staggered-posts--slider__nav__close">Back <span class="arrow"></span></a>
                <a href="#" class="staggered-posts--slider__nav__next">Next: <span>King</span>  <span class="arrow"></span></a>
            </div>
            <div class="staggered-posts--slider__slides">
                <?php foreach ($data as $data_key => $data_value) {
                    $post_id = $data_value['post']->ID;
                    $layout = $data_value;
                    $layout['heading'] = $data_value['post']->post_title;
                    $layout['content'] = get_field('content', $post_id);
                    $layout['emphasized_links'] = get_field('emphasized_links', $post_id);
                    $layout['primary_images'] = get_field('gallery', $post_id);
                    $layout['secondary_image'] = get_field('secondary_image', $post_id);
                    include 'editorial.php';
                } ?>
            </div>
        </div>
    <?php } ?>
</div>
