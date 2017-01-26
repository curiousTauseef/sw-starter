import '../../../node_modules/pickadate/lib/picker.date';
import 'jquery-validation';
import 'slick-carousel';
import $ from 'jquery';
import select2 from 'select2';
import gaTracker from '../helpers/gaTracker';


// Update default required message
$.extend($.validator.messages, {
    required: 'Field required.'
});

function bookingCalendars() {

    const pickadateFormat = 'ddd, mmm dd, yyyy';
    const $arrivalElement = $('input[name="arrival_date"]');
    const $departureElement = $('input[name="departure_date"]');

    const $departurePicker = $departureElement.pickadate({
        min: true,
        format: pickadateFormat,
    });

    const departurePicker = $departurePicker.pickadate('picker');

    const $arrivalPicker = $arrivalElement.pickadate({
        min: true,
        format: pickadateFormat,
        onClose: function() {
            const date = new Date(this.$node[0].value);
            date.setDate(date.getDate() + 1);
            departurePicker.set('min', date);
            if ($departurePicker.val().length == 0) {
                departurePicker.set('select', date);
            }
        }
    });
}

function initSlider(targetClass) {

    const sliderOptions = {
        arrows: false,
        dots: false,
        slide: '.editorial__images__primary__slide'
    };

    const sliders = document.getElementsByClassName(targetClass);

    $.each(sliders, function(index, slider) {

        const $slider = $(slider);

        if ($slider.find('.editorial__images__primary__slide').length <= 1) {
            return;
        }

        $slider.slick(sliderOptions);

        $slider.on('click', '.editorial__images__primary__nav__prev', function() {
            $slider.slick('slickPrev');
        });

        $slider.on('click', '.editorial__images__primary__nav__next', function() {
            $slider.slick('slickNext');
        });
    });
}

// This keeps the page from being jerky when we remove
// the form content for a shorter message
function freezeFormHeight($form) {
    return $form.css('height', $form.height());
}

function formSuccess($form) {
    freezeFormHeight($form);
    const cssClasses = 'editorial__content__form__message';
    $form.html(`<p class="${cssClasses}">Thank you for submitting a
        group booking form.</p>`);
}

function formError($form) {
    freezeFormHeight($form);
    const cssClasses = `editorial__content__form__message
        editorial__content__form__message--error`;
    $form.html(`<p class="${cssClasses}">A form error has occurred.
        Please contact the Freehand directly regarding your inquiry.</p>`);
}

function requestFormSubmission(data) {
    return $.post(ajaxurl, {
        'action' : 'handle_group_booking_form',
        'data'   : data
    });
}

function submitForm($form) {

    const data = {};

    $form.serializeArray().map(function(item) {
        data[item.name] = item.value;
    });

    data.submitted_from = location.href;

    requestFormSubmission(data).then(function(response) {
        // wp_mail is a boolean response. So, if our response
        // is true show success, else show error.
        // parseInt is added because the respone is typeof string
        return parseInt(response, 10) ? formSuccess($form) : formError($form);
    });

    gaTracker().pushEvent('FormSubmit', 'LAGroup', 'Submit', '', '');
}


export default {
    init: function() {

        initSlider('editorial__images__primary');

        bookingCalendars();

        $('.editorial__content__form select').select2({
            minimumResultsForSearch: Infinity,
            width: '100%',
            placeholder: '# of Guests'
        });

        $('.editorial__content__form').validate({
            submitHandler: function(form) {
                submitForm($(form));
            }
        });
    },
    reinitSliders: function() {
        $('.editorial__images__primary').each(function() {
            // Crappy way to reinit slider
            if ($(this).hasClass('slick-slider')) {
                const currentSlide = $(this).slick('slickCurrentSlide');
                $(this).slick('slickGoTo', currentSlide, true);
            }
        });
    }
}
