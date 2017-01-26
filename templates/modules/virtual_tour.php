<!-- includes/virtual_tour.php -->
<div class="virtual-tour">
    <nav class="virtual-tour__nav">

        <?php if (strlen($layout['title']) > 0) { ?>
            <div class="virtual-tour__nav__title">
                <?php echo $layout['title']; ?>
            </div>
        <?php } ?>

        <?php if (strlen($layout['subtitle']) > 0) { ?>
            <div class="virtual-tour__nav__subtitle">
                <?php echo $layout['subtitle']; ?>
            </div>
        <?php } ?>

        <?php if (strlen($layout['text']) > 0) { ?>
            <div class="virtual-tour__nav__text">
                <p><?php echo $layout['text']; ?></p>
            </div>
        <?php } ?>

        <ul>
            <?php foreach ($layout['virtual_tour'] as $tour) { ?>
                <li>
                    <a href="<?php echo $tour['link_url'] ?>" target="_blank" data-embed-url="<?php echo $tour['embed_url'] ?>"><?php echo $tour['title'] ?></a>
                </li>
            <?php } ?>
        </ul>

    </nav>

    <?php if (strlen($layout['additional_video']) > 0) { ?>
        <div class="virtual-tour__video-wrap">
            <div class="virtual-tour__video">
                <iframe src="<?php echo $layout['additional_video'] ?>" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
        </div>
    <?php } ?>

</div>
