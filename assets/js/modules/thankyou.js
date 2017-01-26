'use strict';

import $ from 'jquery';

const successMessage = 'Thank you for contacting us. We’ll get back to you soon.';
const errorMessage = 'A form error has occurred. Please contact the Freehand directly regarding' +
    ' your inquiry.';

const successClasses = 'contact-form__message';
const errorClasses = successClasses + ' contact-form__message--error';

function ThankYou() {
    var $el = $('#thankyouform');

    $('#thankyou_submit').click(function(event) {

        if (($('#thankyou_email_address').val() !== ''
          && validateEmail($('#thankyou_email_address').val()))
          || $('#thankyou_twitter_handle').val() !==  '') {
            $el.hide();
            $('#thankyou_gator').fadeIn();
        }

        return false;
    });

}
function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
export default {
    init: function() {
        ThankYou();
    }
}
