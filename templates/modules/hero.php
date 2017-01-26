<?php
$firstSlideUrl = $layout['sliders'][0]['movie'];
$firstIsMp4 = is_url_mp4($firstSlideUrl);
$cinemagraphUrl = false;
$cinemagraphs = array();
$randomIdx = 0;


// find other cinemagraphs
if ($firstIsMp4) {

    foreach ($layout['sliders'] as $slide) {
        if( is_url_mp4($slide['movie']) ) {
            unset($slide['poster']['title']);
            $cinemagraphs[] = $slide;
        }
    }

    // pick random cinemagraph
    $randomIdx = rand(0, count($cinemagraphs) - 1);
    $cinemagraphUrl = $cinemagraphs[$randomIdx];
    $cinemagraphArr = $cinemagraphs[$randomIdx];
}
$cinemagraph_fallback_image = is_array($layout['cinemagraph_fallback_image']) ? $layout['cinemagraph_fallback_image']['sizes']['medium_large'] : ''
?>
<!-- includes/hero.php  -->
<div class="hero">
    <div class="hero__slider" id="hero_slider<?php echo $randomIdx; ?>" data-cinemagraphs='<?php echo json_encode($cinemagraphs); ?>' data-fallback="<?php echo $cinemagraph_fallback_image; ?>">

        <?php if ($firstIsMp4 == false ) { ?>
            <?php if(!empty($layout['sliders'])){ ?>
                <?php foreach ($layout['sliders'] as $slide_key => $slide_value) { ?>
                    <?php $url = isset($slide_value['poster']['sizes']) ? $slide_value['poster']['sizes']['large'] : false;  ?>
                    <?php if ($url) { ?>
                        <div class="hero__slider__slide" style="background-image: url(<?php echo $url; ?>);">
                        </div>
                    <?php } ?>
                <?php } ?>
            <?php }elseif(is_array($layout['cinemagraph_fallback_image'])){ ?>
            <div class="hero__slider__slide" style="background-image: url(<?php echo $cinemagraph_fallback_image; ?>);">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/placeholder/placeholder-140x63.png">
            </div>
        

            <?php } ?>
        <?php } ?>

    </div>

    <?php if (!$firstIsMp4 && $layout['include_slider_next_prev']) { ?>
        <nav class="hero__slider-nav">
            <div class="hero__slider-nav__prev">
                <span></span>
            </div>
            <div class="hero__slider-nav__next">
                <span></span>
            </div>
        </nav>
    <?php } ?>

    <?php if ($layout['include_logo']) { ?>
        <div class="hero__logo">
            <img src="<?php echo $layout['logo']['url']; ?>" alt="<?php echo $layout['logo']['alt'] ?>">
        </div>
    <?php } ?>
</div>
