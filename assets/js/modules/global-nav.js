import $ from 'jquery';
import enquire from 'enquire.js';
import breakpoints from '../helpers/breakpoints';
import bookingWidget from './booking-widget';

const $globalNav = $('.global-nav');

function makeSticky() {
    bookingWidget.verticalCenterSocial();
    $globalNav.addClass('global-nav--sticky');
}

function unSticky() {
    bookingWidget.unVerticalCenterSocial();
    $globalNav.removeClass('global-nav--sticky');
}

function checkScrollPosition() {
    const scrollTop = $(window).scrollTop();
    const offsetTop = $('.global-nav--shim').offset().top;
    return scrollTop > offsetTop ? makeSticky() : unSticky();
}

function isPermaSticky() {
    return $globalNav.hasClass('global-nav--perma-stick') ? true : false;
}

function updateLanguage(event) {

    let countryCode = event.currentTarget.value;

    // Because there is always an exception...
    switch (countryCode) {
        case 'us':
            countryCode = 'en';
            break;
        case 'cn':
            countryCode = 'zh-CHS';
            break;
        default:

    }
    Microsoft.Translator.Widget
        .Translate(null, countryCode, null, null, null, null, 2000);
    changeCountryFlag(event);
}

function changeCountryFlag(event) {
    const $flag = $('.flag-icon');
    $flag.fadeOut(50, function() {
        $flag.removeClass();
        $flag.addClass('flag-icon flag-icon-' + event.currentTarget.value);
    });
    $flag.fadeIn(50);
}

export default {
    init: function() {

        $('.js-translator select').on('change', updateLanguage);

        // If this module does not exist, plz exit
        if ($globalNav.length < 1 || isPermaSticky()) {
            return;
        }

        enquire.register(`screen and (min-width: ${breakpoints.sm})`, {
            match: function() {
                $(window).on('scroll', checkScrollPosition);
            },
            unmatch: function() {
                $(window).off('scroll', checkScrollPosition);
                $('.js-translator select')
                    .off('change', changeCountryFlag);
            },
        });
    },
    makeSticky: makeSticky,
    unSticky: unSticky
}
