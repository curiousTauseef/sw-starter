<!-- includes/global-nav.php -->
<?php include_once(locate_template('lib/social-list.php')); ?>

<?php $isPermaSticky = !isset($layout['index']) || $layout['index'] == 0 ? 'global-nav--perma-stick' : ''; ?>
<?php /*$home_url = esc_url(get_bloginfo( 'url' )); */ ?>
<?php $home_url =  network_site_url('/') ?>
<?php switch_to_blog(1); ?>
<?php $global_nav_array = wp_get_nav_menu_items('Global Navigation'); ?>
<?php restore_current_blog(); ?>

<nav class="global-nav <?php echo $isPermaSticky ?>">
    <div>
        <div class="global-nav__wrapper">

            <div class="global-nav__logo">
                <a href="<?php echo $home_url; ?>" class="global-nav__logo__text" translate=no>
                    FREEHAND
                </a>
                <a href="<?php echo $home_url; ?>" class="global-nav__logo__image">
                    <img src="/content/themes/freehand/dist/images/brandmark-black-red.png" alt="Freehand Hotel" />
                </a>
                <img class="global-nav__logo__placeholder" src="/content/themes/freehand/dist/images/placeholder/placeholder-140x63.png" alt="" />
            </div>

            <div class="global-nav__nav" translate=no>
                <?php
                switch_to_blog(1);

                wp_nav_menu(array(
                    'menu' => 'Global Navigation',
                    'container' => false,
                    'menu_class' => 'global-nav__nav'
                ));

                restore_current_blog();
                ?>
            </div>

            <div class="global-nav__language js-translator">

                <div class="flag-icon flag-icon-us"></div>
                <select class="" name="">
                    <option value="" disabled selected>Language</option>
                    <option value="cn">Chinese</option>
                    <option value="us">English</option>
                    <option value="fr">French</option>
                    <option value="de">German</option>
                    <option value="pt">Portuguese</option>
                    <option value="es">Spanish</option>
                </select>
            </div>

        </div>
    </div>

    <ul class="mobile-social-list mobile-social-list--dark">
        <?php $social_list_array = SocialList::create_social_data_array(); ?>
        <?php foreach ($social_list_array as $social_key => $social_value) { ?>
            <li>
                <a href="<?php echo $social_value ?>" target="_blank">
                    <?php include get_template_directory() . '/assets/images/svg/' . $social_key . '.svg' ?>
                </a>
            </li>
        <?php } ?>
    </ul>
</nav>

<div class="global-nav--shim"></div>
