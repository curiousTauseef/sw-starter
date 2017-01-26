<!-- includes/feature.php  -->
<div class="feature">
    <div class="feature__title">
        <?php echo $layout['title'] ?>
    </div>
    <div class="feature__content">
        <div class="feature__content__image">
            <?php if (is_array($layout['image']['sizes'])) { ?>
                <img src="<?php echo $layout['image']['sizes']['custom-600x600'] ?>" alt="<?php echo $layout['image']['alt'] ?>" />
            <?php } ?>
        </div>
        <div class="feature__content__text">
            <h1 class="feature__content__text__title">
                <?php echo $layout['text_title'] ?>
            </h1>
            <p><?php echo $layout['text'] ?></p>
            <div>
                <?php $emphasis_target = $layout['text_emphasis_open_in_new_window'] ? '_blank' : '_self'; ?>
                <a href="<?php echo $layout['text_emphasis_url'] ?>" target="<?php echo $emphasis_target ?>" class="feature__content__text__emphasis">
                    <?php echo $layout['text_emphasis'] ?>
                </a>
                <br>
                <?php if (is_array($layout['ctas'])) { ?>
                    <?php foreach ($layout['ctas'] as $cta_value) { ?>
                        <?php $target = $cta_value['open_in_new_window'] ? '_blank' : '_self'; ?>
                        <a href="<?php echo $cta_value['url'] ?>" target="<?php echo $target ?>" class="feature__content__text__btn">
                            <?php echo $cta_value['cta'] ?>
                        </a>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
