<!-- includes/location.php -->
<div class="location">

    <?php if(isset($layout['location_map_point']['lat'])): ?>
        <div class="location__col">
            <div class="location__map js-location"
                 data-lat="<?php echo $layout['location_map_point']['lat'] ?>"
                 data-lng="<?php echo $layout['location_map_point']['lng'] ?>"></div>
        </div>
    <?php endif; ?>

    <div class="location__col">
        <h1 class="location__name">
            <?php echo $layout['name'] ?>
        </h1>
        <address class="location__address">
            <?php echo $layout['address'] ?>
        </address>
    </div>

</div>
