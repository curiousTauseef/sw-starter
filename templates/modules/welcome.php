<!-- includes/welcome.php -->
<div class="welcome">
    <h1 class="welcome__title"><?php echo $layout['title'] ?></h1>
    <h3 class="welcome__subtitle"><?php echo $layout["subtitle"] ?></h3>
    <p><?php echo $layout['text'] ?></p>

    <?php if (is_array($layout['ctas'])) { ?>
    <div class="welcome__ctas">
        <?php foreach ($layout['ctas'] as $cta_key => $cta_value) { ?>
            <?php $target = $cta_value['open_in_new_window'] ? '_blank' : '_self'; ?>
            <a href="<?php echo $cta_value['url'] ?>"
               class="welcome__ctas__cta"
               target="<?php echo $target ?>">
                <?php echo $cta_value['text'] ?>
            </a>
        <?php } ?>
    </div>
    <?php } ?>
</div>
