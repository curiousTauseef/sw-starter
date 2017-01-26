'use strict';

import $ from 'jquery';
import 'jquery-validation';
import select2 from 'select2';

const formAction = 'submit_contact_form';

const successMessage = 'Thank you for contacting us. We’ll get back to you soon.';
const errorMessage = 'A form error has occurred. Please contact the Freehand directly regarding' +
    ' your inquiry.';

const successClasses = 'contact-form__message';
const errorClasses = successClasses + ' contact-form__message--error';

class ContactForm {

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

        this.initializeSelectWidgets();

    }

    initializeSelectWidgets() {

        this.$el.find('select[name="location"]').select2({
            minimumResultsForSearch: Infinity,
            width: '100%',
            placeholder: 'Location'
        });

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

            if (response.status && response.status === 200) {
                this.formSuccess();
            } else {
                this.formError();
            }

        });

    }

}

export default ContactForm;
