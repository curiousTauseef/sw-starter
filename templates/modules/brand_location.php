<?php $logoArray = $layout['logo']; ?>
<?php $address = trim($layout['address']); ?>
<?php $phone_number = trim($layout['phone_number']); ?>

<div class="brand-location" translate=no>
    <?php if (is_array($logoArray)) { ?>
        <div class="brand-location__logo">
            <img src="<?php echo $logoArray['url']; ?>">
        </div>
    <?php } ?>

    <?php if (strlen($address) > 0 || strlen($phone_number) > 0) { ?>
    <p>
        <?php echo $layout['address']; ?>

        <?php if (strlen($address) > 0 && strlen($phone_number) > 0) { ?>
            &nbsp;|&nbsp;
        <?php } ?>

        <?php if (strlen($layout['phone_number']) > 0) { ?>
            <a href="tel:<?php echo $layout['phone_number']; ?>"><?php echo $layout['phone_number']; ?></a>
        <?php } ?>
    </p>
    <?php } ?>
</div>
