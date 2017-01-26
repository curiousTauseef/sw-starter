<form class="contact-form js-contact-form">

    <?php wp_nonce_field('submit_event_inquiry_modal_form'); ?>

    <div class="contact-form__wrapper">

        <div class="contact-form__row">
            <div>
                <select name="location" required>
                    <?php if(count($layout['locations']) > 1): ?>
                        <option value=""></option>
                    <?php endif; ?>
                    <?php foreach($layout['locations'] as $location): ?>
                        <?php
                        // strip @domain info so this form can't be used for nefarious purposes
                        $email = $location['recipient_email'];
                        $email_without_domain = Contact_Form_Handler::strip_at_domain_from_email($email);
                        ?>
                        <option value="<?php echo $email_without_domain; ?>">
                            <?php echo $location['name'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

    </div>

    <div class="contact-form__two-col-wrapper">

        <div class="contact-form__wrapper__col">

            <div class="contact-form__row">
                <div><input type="text" name="subject" value="" placeholder="Subject"></div>
            </div>

            <div class="contact-form__row">
                <div><input type="text" name="name" value="" placeholder="Full Name"></div>
            </div>

        </div>

        <div class="contact-form__wrapper__col">

            <div class="contact-form__row">
                <div><input type="text" name="phone" value="" placeholder="Phone Number"></div>
            </div>

            <div class="contact-form__row">
                <div><input type="email" name="email" value="" placeholder="Email Address" required></div>
            </div>

        </div>

    </div>

    <div class="contact-form__wrapper">

        <div class="contact-form__row">
            <div class="no-border"><textarea type="text" name="comments" value="" placeholder="Comments/Requests" rows="3"></textarea></div>
        </div>

    </div>

    <div class="contact-form__actions">
        <button type="submit" name="submit" class="contact-form__submit">Submit</button>
    </div>

</form>
