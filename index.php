<?php use Roots\Sage\Layout; ?>
<?php get_template_part('templates/page', 'header'); ?>

<?php function use_custom_content_template($current_post_type) {
    $post_type_templates_array = array('blog', 'press', 'rooms', 'facebook_events');
    return in_array($current_post_type, $post_type_templates_array);
} ?>

<?php if (!have_posts()) : ?>
    <div class="alert alert-warning">
        <?php _e('Sorry, no results were found.', 'sage'); ?>
    </div>
<?php endif; ?>

<?php if( use_custom_content_template(get_post_type()) ): ?>
    <div class="archive">
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('templates/content', get_post_type() ); ?>
        <?php endwhile; ?>
    </div>
<?php else: ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php Layout\sections(); ?>
    <?php endwhile; ?>
<?php endif; ?>
