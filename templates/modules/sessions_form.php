<form class="sessions-form js-sessions-form">

    <?php wp_nonce_field('submit_sessions_form'); ?>

    <div class="sessions-form__wrapper">

        <div class="sessions-form__wrapper__col">

            <div class="sessions-form__row">
                <div><input type="text" name="name" value="" placeholder="Full Name" required></div>
            </div>

            <div class="sessions-form__row">
                <div><input type="email" name="email" value="" placeholder="Email Address" required></div>
            </div>

            <div class="sessions-form__row">
                <div><input type="text" name="phone" value="" placeholder="Phone Number"></div>
            </div>

        </div>

        <div class="sessions-form__wrapper__col">

            <div class="sessions-form__row">
                <div><input type="text" name="address" value="" placeholder="Address"></div>
            </div>

            <div class="sessions-form__row">
                <div><input type="text" name="city" value="" placeholder="City"></div>
                <div><input type="text" name="state" value="" placeholder="State"></div>
                <div><input type="text" name="zip" value="" placeholder="Zip"></div>
            </div>

        </div>

    </div>

    <div class="contact-form__wrapper">

        <div class="contact-form__row">
            <div class="no-border"><textarea name="essay" value="" 
            placeholder="Why are you interested in Freehand Sessions? Please submit (paste) your 200 word essay here." 
            rows="8" required></textarea></div>
        </div>

    </div>

    <div class="sessions-form__actions">
        <button type="submit" name="submit" class="sessions-form__submit">Submit</button>
    </div>

</form>
