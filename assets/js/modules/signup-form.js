'use strict';

import $ from 'jquery';
import 'jquery-validation';

const formAction = 'submit-exacttarget-form';

const successMessage = 'Thanks for subscribing.';
const errorMessage = 'Sorry! The form submission failed';

const successClasses = 'signup-form__message';
const errorClasses = successClasses + ' signup-form__message--error';

class SignupForm {

    constructor(el) {

        this.el = el;
        this.$el = $(el);

        // Update default required message
        $.extend($.validator.messages, {
            required: 'Field required.'
        });

        this.$el.validate();

        this.validateForm = (event) => {
           
            event.preventDefault();

            if (this.$el.valid()) {
                this.submitForm();
            } else {
                // this.$el.validate will show error messages for us
            }

        };

        this.el.addEventListener('submit', this.validateForm);

    }

    // This keeps the page from being jerky when we remove
    // the form content for a shorter message
    freezeFormHeight() {
        this.$el.css('min-height', this.$el.height());
    }

    formSuccess() {
        this.freezeFormHeight();
        this.$el.html(`<p class="${successClasses}">${successMessage}</p>`);
    }

    formError() {
        this.freezeFormHeight();
        this.$el.html(`<p class="${errorClasses}">${errorMessage}</p>`);
    }

    requestFormSubmission(data) {
        return $.post(ajaxurl, {
            'action' : formAction,
            'data'   : data
        });
    }

    submitForm() {

        const data = {};

        this.$el.serializeArray().map(function(item) {
            data[item.name] = item.value;
        });

        data.submitted_from = location.href;

       

        this.requestFormSubmission(data).then((response) => {
            console.log(response);
            if (response && response == 200) {
                this.formSuccess();
            } else {
                this.formError();
            }

        });

    }

}

export default SignupForm;
