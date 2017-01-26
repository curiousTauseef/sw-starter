<!-- includes/editorial.php -->
<?php $editorial_data['images_right'] = isset($layout['position_images_right']) && $layout['position_images_right'] ? 'editorial--images-right' : ''; ?>

<div class="editorial <?php echo $editorial_data['images_right'] ?>">

    <?php if (isset($layout['heading'])) { ?>
        <h1 class="editorial__title">
            <?php echo $layout['heading']; ?>
        </h1>
    <?php } ?>

    <div class="editorial__images">

        <?php if (isset($layout['primary_images']) && is_array($layout['primary_images'])) { ?>
            <div class="editorial__images__primary">
                <?php foreach ($layout['primary_images'] as $image_key => $image_value) { ?>
                    <img src="<?php echo $image_value['sizes']['custom-600x600'] ?>"
                        alt="<?php echo $image_value['alt'] ?>"
                        class="editorial__images__primary__slide"/>
                <?php } ?>

                <?php if (count($layout['primary_images']) > 1) { ?>
                <nav class="editorial__images__primary__nav">
                    <div class="editorial__images__primary__nav__prev">
                        <span></span>
                    </div>
                    <div class="editorial__images__primary__nav__next">
                        <span></span>
                    </div>
                </nav>
                <?php } ?>
            </div>
        <?php } ?>

        <?php if (isset($layout['secondary_image']) && is_array($layout['secondary_image'])) { ?>
            <div class="editorial__images__secondary">
                <img src="<?php echo $layout['secondary_image']['sizes']['custom-600x600'] ?>" alt="<?php echo $layout['secondary_image']['alt'] ?>" />
            </div>
        <?php } ?>
    </div>

    <article class="editorial__content">


        <?php if (isset($layout['surtitle_links']) && is_array($layout['surtitle_links'])) { ?>
        <div class="editorial__content__surtitle-links">
            <?php foreach ($layout['surtitle_links'] as $link_key => $link_value) { ?>
                <?php $target = $link_value['open_in_new_window'] ? '_blank' : '_self'; ?>
                <a href="<?php echo $link_value['url'] ?>" target=<?php echo $target ?>><?php echo $link_value['text'] ?></a>
            <?php } ?>
        </div>
        <?php } ?>

        <?php if (isset($layout['title'])) { ?>
            <h1 class="editorial__content__title">
                <?php echo $layout['title']; ?>
            </h1>
        <?php } ?>

        <?php if (isset($layout['content'])) { ?>
            <?php echo $layout['content']; ?>
        <?php } ?>

        <?php if (isset($layout['emphasized_links']) && is_array($layout['emphasized_links'])) { ?>
            <?php foreach ($layout['emphasized_links'] as $link_value) { ?>
                <a href="<?php echo $link_value['link_url'] ?>" class="editorial__content__cta">
                    <?php echo $link_value['link_text'] ?>
                </a>
            <?php } ?>
        <?php } ?>

        <?php if (isset_truthy($layout, 'include_group_booking_form') && isset_truthy($layout, 'recipient_email')) { ?>
            <form class="editorial__content__form">

                <input type="hidden" name="recipient"
                       value="<?php echo Contact_Form_Handler::strip_at_domain_from_email($layout['recipient_email']) ?>">

                <div class="editorial__content__form__row">
                    <div><input type="text" name="name" value="" placeholder="Full Name" required></div>
                </div>
                <div class="editorial__content__form__row">
                    <div><input type="email" name="email" value="" placeholder="Email Address" required></div>
                </div>
                <div class="editorial__content__form__row">
                    <div><input type="text" name="phone_number" value="" placeholder="Phone Number" required></div>
                    <div>
                        <select name="number_of_guests" required>
                            <option value=""></option>
                            <option value="3">Three</option>
                            <option value="4">Four</option>
                            <option value="5">Five</option>
                            <option value="6">Six</option>
                            <option value="7+">Seven +</option>
                        </select>
                    </div>
                </div>
                <div class="editorial__content__form__row">
                    <div><input type="date" name="arrival_date" value="" placeholder="Check In" required></div>
                    <div><input type="date" name="departure_date" value="" placeholder="Check Out" required></div>
                </div>
                <div class="editorial__content__form__row">
                    <div><input type="text" name="comments" value="" placeholder="Comments / Requests"></div>
                </div>

                <div><button type="submit" name="submit">Submit</button></div>
            </form>
        <?php } ?>

    </article>

    <?php include('_artifacts.php'); ?>
</div>
