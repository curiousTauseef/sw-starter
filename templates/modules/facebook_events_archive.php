<?php
global $post;

$post_count = 0;
$posts_per_page = 6;
$events;
$current_date = date("Y-m-d",mktime(0,0,0,date("m"),date("d")-1,date("Y")));

// setup events query
$query_args = array (
    'meta_query'=> array(
        array(
            'key' => 'event_starts_sort_field',
            'compare' => '>',
            'value' => $current_date,
            'type' => 'DATE',
        )
    ),
    'post_type' => 'facebook_events',
    'posts_per_page' => -1,
    'meta_key' => 'event_starts_sort_field',
    'orderby' => 'meta_value',
    'order' => 'ASC'
);

$fbe_query = new WP_Query( $query_args );
?>

<?php if( $fbe_query->have_posts() ): ?>

    <?php
    // output events data as json
    while ( $fbe_query->have_posts() ){
        $fbe_query->the_post();
        $events[$post_count]['id'] = $post_count;
        $events[$post_count]['title'] = get_the_title();
        $events[$post_count]['image'] = get_fbe_field('image_url');
        $events[$post_count]['date'] = get_fbe_date('event_starts','F j');
        $events[$post_count]['permalink'] = get_permalink();
        $post_count++;
    }
    ?>

    <script type="text/javascript">
        window._facebookEvents = <?php echo json_encode($events) ?>;
    </script>

    <?php // output events layout ?>

    <div class="facebook-events-archive">

        <?php if($layout['image']): ?>

            <div class="facebook-events-archive__image"
                 style="background-image: url(<?php echo $layout['image']['url']; ?>);"></div>

        <?php endif; ?>

        <div class="facebook-events-archive__list">

            <div class="facebook-events-archive__list__title">Upcoming<br>Events</div>

            <div class="js-facebook-events-archive">

            </div>

            <div class="facebook-events-archive__list__actions">
                <a href class="facebook-events-archive__list__actions__load-more
                    js-facebook-events-archive-load-more" style="display: none;">
                    More Upcoming Events
                </a>
            </div>

        </div>

    </div>

    <?php wp_reset_query(); ?>

<?php else: ?>

    <!-- No Facebook events found -->

<?php endif; ?>



