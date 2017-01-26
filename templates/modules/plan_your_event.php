<form class="plan-your-event js-plan-your-event">

    <?php wp_nonce_field('submit_event_inquiry_modal_form'); ?>

    <div class="plan-your-event__wrapper">

        <div class="plan-your-event__wrapper__col">

            <div class="plan-your-event__row">
                <div><input type="text" name="first_name" value="" placeholder="First Name" required></div>
                <div><input type="text" name="last_name" value="" placeholder="Last Name" required></div>
            </div>

            <div class="plan-your-event__row">
                <div><input type="email" name="email_address" value="" placeholder="Email Address" required></div>
            </div>

            <div class="plan-your-event__row">
                <div>
                    <input id="event_date" class="plan-your-event__date" type="date"
                           name="event_date" value="" placeholder="Event Date">

                </div>
        
                <div>
                    <select name="start_time">
                        <option></option>
                        <?php foreach(Triple_Seat_Form_Handler::$start_times as $time): ?>
                            <option value="<?php echo $time ?>"><?php echo $time ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="plan-your-event__row">
                <div><input type="text" name="event_description" value="" placeholder="Celebration Type"></div>
            </div>

        </div>

        <div class="plan-your-event__wrapper__col">

            <div class="plan-your-event__row">
                <div><input type="text" name="company" value="" placeholder="Company Name"></div>
            </div>

            <div class="plan-your-event__row">
                <div><input type="text" name="phone_number" value="" placeholder="Phone Number"></div>
            </div>

            <div class="plan-your-event__row">

                <div><input type="number" name="guest_count" value="" placeholder="Guests"></div>

                <div>
                    <select name="lead_form_id">
                        <?php if(count($layout['locations']) > 1): ?>
                            <option value=""></option>
                        <?php endif; ?>
                        <?php foreach($layout['locations'] as $location): ?>
                            <option value="<?php echo $location['lead_form_id'] ?>">
                                <?php echo $location['name'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="plan-your-event__row">
                <div><input type="text" name="additional_information" value="" placeholder="Comments/Requests"></div>
            </div>

        </div>

    </div>

    <div class="plan-your-event__actions">
        <button type="submit" name="submit" class="plan-your-event__submit">Submit</button>
    </div>

</form>
