<!-- includes/single_post.php -->
<?php $single_post_reversed = $layout['place_image_right'] ? 'single-post--reversed' : ''; ?>
<div class="single-post <?php echo $single_post_reversed ?>">

    <?php if (is_array($layout['image'])) { ?>
        <div class="single-post__image">
            <img src="<?php echo $layout['image']['sizes']['custom-600x600'] ?>" alt="image" />
        </div>
    <?php } ?>

    <div class="single-post__content">
        <div class="single-post__content__title">
            <?php echo $layout['title'] ?>
        </div>
        <div class="single-post__content__subtitle">
            <?php echo $layout['subtitle'] ?>
        </div>
        <div class="single-post__content__text">
            <?php echo $layout['content'] ?>
        </div>
        <?php if (is_array($layout['ctas'])) { ?>
            <?php foreach ($layout['ctas'] as $cta_value) { ?>
                <div class="single-post__content__cta">
                    <?php $target = $cta_value['open_in_new_window'] ? '_blank' : '_self'; ?>
                    <a href="<?php echo $cta_value['url'] ?>" target="<?php echo $target ?>">
                        <?php echo $cta_value['cta'] ?>
                    </a>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</div>
