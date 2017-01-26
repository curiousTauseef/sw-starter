<!-- includes/mobile-header.php  -->
<?php $blog_id = get_current_blog_id(); ?>
<?php $home_url = esc_url(get_bloginfo( 'url' )); ?>

<header class="mobile-header">

    <div class="mobile-header__global-nav-trigger">
        <a href="#"></a>
    </div>

    <?php if ($blog_id != 1) { ?>
        <?php $site_details = get_blog_details($blog_id); ?>
        <a href="<?php echo $home_url; ?>" class="mobile-header__logo mobile-header__logo--location">
            <img src="/content/themes/freehand/dist/images/brandmark-black-red.png" alt="Logo" />
            <?php echo str_replace('Freehand', '', $site_details->blogname) ?>
        </a>
    <?php } else { ?>
        <a href="<?php echo $home_url; ?>" class="mobile-header__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo_freehand.png" alt="Freehand Hotel" />
        </a>
    <?php } ?>

    <a href="#" class="mobile-header__book-now" translate=no>
        <span>BOOK NOW</span>
    </a>

</header>

<div class="mobile-header--shim"></div>
