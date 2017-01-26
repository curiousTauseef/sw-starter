'use strict';

import $ from 'jquery';
import enquire from 'enquire.js';
import { breakpointsMax } from '../helpers/breakpoints';

const $body = $('body');
const hideClass = 'mobile-translator-hidden';
const hideOffset = 250;
var languageSelect2;

function checkScrollPosition() {
    const scrollTop = $(window).scrollTop();
    const offsetTop = hideOffset;
    return scrollTop > offsetTop ? hideTranslator() : showTranslator();
}

function hideTranslator() {
    $body.addClass(hideClass);
}

function showTranslator() {
    $body.removeClass(hideClass);
}

export default {
    init: function() {

        languageSelect2 = $('.mobile-translator__select').select2({
            minimumResultsForSearch: Infinity,
            width: '100%',
            placeholder: 'Language'
        });

        $('.js-open-mobile-translator').on('click', function() {
            languageSelect2.select2('open');
        });

        enquire.register(`screen and (max-width: ${breakpointsMax.sm})`, {
            match: function() {
                $(window).on('scroll', checkScrollPosition);
            },
            unmatch: function() {
                $(window).off('scroll', checkScrollPosition);
            },
        });

    }
}
