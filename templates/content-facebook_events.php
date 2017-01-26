<?php use Roots\Sage\Layout; ?>

<?php get_template_part('page', 'header'); ?>

<?php include 'modules/hotel_property_nav.php'; ?>

<?php
$event_image = get_fbe_field('image_url');
$location = get_fbe_field('location');
$event_start_date = get_fbe_date('event_starts','M j, Y');
$event_start_time = get_fbe_date('start_time','g:i a');
$event_end_date = get_fbe_date('event_ends','M j, Y');
$event_end_time = get_fbe_date('end_time','g:ia');
$fb_link = get_fbe_field('fb_event_uri');
$tickets = get_fbe_field('ticket_uri');
$venue_name = get_fbe_field( 'venue_name');
?>

<section class="single--post single--post--facebook-events">
    <div class="single--post__inner">

        <div class="blog__nav">
            <div class="blog__nav__title">
                <a href="<?php echo get_site_url(); ?>/events-activities/">Upcoming Events</a>
            </div>
        </div>

        <div class="single--post__inner__padded">
            <div class="single--post__image">

                <?php if ($fb_link):?><a href="<?php echo $fb_link; ?>" target="_blank"><?php endif; ?>
                    <img src="<?php echo $event_image ?>">
                <?php if ($fb_link):?></a><?php endif; ?>

                <time datetime="<?php get_post_time('c', true); ?>">
                    <div class="single--post__image__day"><?php echo get_fbe_date('event_starts','j'); ?></div>
                    <div class="single--post__image__month"><?php echo get_fbe_date('event_starts','M'); ?></div>
                </time>
            </div>
            <h1 class="single--post__title">
                <?php echo get_the_title(); ?>
            </h1>
            <h5 class="single--post__subtitle">
                <?php
                echo $event_start_date;
                if($event_start_time){ echo ' @ '.$event_start_time; }
                if($event_end_date){ echo '&nbsp;&mdash;&nbsp;&nbsp;'. $event_end_date; }
                if($event_end_time){ echo ' @ '.$event_end_time; }
                ?>
            </h5>

            <p class="single--post__location">
                <b><?php echo $venue_name ?></b><br>
                <b><?php echo $location ?></b>
            </p>

            <div class="single--post__content">
                <?php the_content(); ?>

                <?php if($tickets):?>
                    <p><b><a href="<?php echo $tickets; ?>" target="_blank">Get Tickets</a></b>
                <?php endif; ?>
            </div>

            <?php if ($fb_link):?>
                <a href="<?php echo $fb_link; ?>" target="_blank"
                   class="single--post__content__facebook-button">RSVP on Facebook</a>
            <?php endif; ?>

        </div>

    </div>
</section>

<?php include 'modules/instagram.php'; ?>
