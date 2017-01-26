<?php include_once(locate_template('lib/social-list.php')); ?>

<nav class="hotel-property-nav">

    <a href="#" class="hotel-property-nav__mobile__trigger">
        <span>Menu</span>
        <span class="hotel-property-nav__mobile__trigger__arrow hotel-property-nav__mobile__trigger__arrow--down"></span>
    </a>

    <?php
    wp_nav_menu(array(
        'container'      => false,
        'fallback_cb'    => false,
        'menu_class'     => 'hotel-property-nav__list',
        'theme_location' => 'property_navigation',
    ));
    ?>

    <ul class="mobile-social-list">
        <?php foreach ($social_list_array as $social_key => $social_value) { ?>
            <li>
                <a href="<?php echo $social_value ?>" target="_blank">
                    <?php include get_template_directory() . '/assets/images/svg/' . $social_key . '.svg' ?>
                </a>
            </li>
        <?php } ?>
    </ul>
</nav>
