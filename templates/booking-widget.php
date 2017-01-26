<?php include_once(locate_template('lib/social-list.php')); ?>
<?php $blog_id = get_current_blog_id(); ?>

<section class="booking-widget">
    <h1 class="booking-widget__title">Book Your Stay at <span style="display: inline-block;">the Freehand</span></h1>
    <p class="booking-widget__tagline">We look forward to your visit. See you soon!</p>
    <form class="booking-widget__form" action="<?php echo network_site_url('/'); ?>">
        <div class="booking-widget__form__row">
            <label for="">Destination</label>
            <select class="booking-widget__form__location" name="location" data-placeholder="Pick a Location" required>
                <option></option>
                <option value="chicago" <?php if($blog_id == CHICAGO_SITE_ID) { echo 'selected'; } ?>>Chicago, IL</option>
                <option value="los-angeles" <?php if($blog_id == LOS_ANGELES_SITE_ID) { echo 'selected'; } ?>>Los Angeles, CA</option>
                <option value="miami" <?php if($blog_id == MIAMI_SITE_ID) { echo 'selected'; } ?>>Miami, FL</option>
                <!-- <option value="new-york" <?php if($blog_id == NEW_YORK_SITE_ID) { echo 'selected'; } ?>>New York, NY</option> -->
            </select>
        </div>
        <div class="booking-widget__form__row">
            <label for="">Number of Guests</label>
            <select class="booking-widget__form__guests" data-placeholder="Guests" name="guests" required>
                <option></option>
                <option value="1">ONE</option>
                <option value="2">TWO</option>
                <option value="3">THREE</option>
                <option value="4">FOUR</option>
                <option value="5">FIVE</option>
                <option value="6">SIX</option>
                <option value="6+">SIX +</option>
            </select>
        </div>
        <div class="booking-widget__form__row">
            <label for="arrival_date">Arrival Date</label>
            <input id="arrival_date" class="booking-widget__form__date booking-widget__form__date--arrival" type="date" name="check-in" value="" placeholder="Check In" required>
        </div>
        <div class="booking-widget__form__row">
            <label for="departure_date">Departure Date</label>
            <input id="departure_date" class="booking-widget__form__date booking-widget__form__date--departure" type="date" name="check-out" value="" placeholder="Check Out" required>
        </div>
        <div class="booking-widget__form__submit" translate=no>
            <button type="submit" name="button">CHECK AVAILABILITY</button>
        </div>
        <div class="booking-widget__form__close" translate=no>
            <span>CLOSE PANEL</span>
        </div>       
    </form>
</section>

<div class="booking-widget-trigger" translate=no>
    <div class="booking-widget-trigger__title">
        <span>BOOK A ROOM</span>
    </div>

    <?php $social_list_array = SocialList::create_social_data_array(); ?>
    <?php if (count($social_list_array) > 0) { ?>
        <div class="booking-widget-trigger__social">
            <div class="booking-widget-trigger__social__title">
                <div class="booking-widget-trigger__social__small">LET'S GET</div>
                <div class="booking-widget-trigger__social__big">SOCIAL</div>
            </div>
            <div class="booking-widget-trigger__social__list">
                <ul class="mobile-social-list mobile-social-list--dark">
                    <?php foreach ($social_list_array as $social_key => $social_value) { ?>
                        <li>
                            <a href="<?php echo $social_value ?>" target="_blank">
                                <?php include get_template_directory() . '/assets/images/svg/' . $social_key . '.svg' ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    <?php } ?>

</div>
