import 'slick-carousel';
import $ from 'jquery';
import breakpoints from '../helpers/breakpoints';
import enquire from 'enquire.js';

const $instafeed = $('.instagram');
const breakpointSmMax = parseInt(breakpoints.sm, 10) - 1 + 'px';
const breakpointMdMin = breakpoints.sm;

function $getMobileInstagramSliders() {
    return $('.instagram--mobile__slider');
}

function destroyMobileIntsagramSliders() {
    $getMobileInstagramSliders().slick('unslick');
}

function initMobileInstagramSlider() {
    $getMobileInstagramSliders().each(function(key, el) {
        const $instaMobiSlider = $(el);
        $instaMobiSlider.slick({
            dots: false,
            arrows: false,
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true
        }).on('swipe', function(event, slick, direction) {
            sliderOtherSlider($instaMobiSlider, direction);
        });
    });
}

function sliderOtherSlider($thisSlider, direction) {
    $getMobileInstagramSliders().each(function(key, _el) {
        if (_el != $thisSlider.get(0)) {
            const otherDirection = (direction == 'left')
                ? 'slickPrev' : 'slickNext';
            $(_el).slick(otherDirection);
        }
    });
}

function setDynamicInstagramTitleSize() {
    // I should arguably be beaten for this function.
    // It's a waste of resources, but it takes care of things really well!
    // MagicNumber number is based on the idea that at 750px,
    // the font should be about 3rem (Hart May, 2016)
    const magicNumber = 0.00390625;
    const windowWidth = $(window).width();
    const minWindowWidth = parseInt(breakpoints.sm.replace('px',''), 10);
    const desiredFontSize = $(window).width() > minWindowWidth
        ? (windowWidth * magicNumber) + 'rem' : '';

    $('.instagram__item__title').css({
        'font-size': desiredFontSize
    });
}

function instagramItemHtml(key, data, insertTitleInGrid) {
    let html = ``;
    if (key === 7 && insertTitleInGrid) {
        html += `<article class="instagram__item">`;
        html += `<h1 class="instagram__item__title">@thefreehand</h1>`;
        html += `<h5 class="instagram__item__surtitle">#freehandliving</h5>`;
        html += `</article>`;
    }
    html += `<article class="instagram__item">`;
    html += `<a href="${data.link}" target="_blank">`;
    html += `<img src="${data.image}" alt="" />`;
    html += `</a>`;
    html += `</article>`;
    return html;
}

function createDesktopHtml(data) {
    if (!data) return false;

    return data.map(function(item, key) {
        return instagramItemHtml(key, item, true);
    }).join('');
}

function createMobileSliderHtml(data) {
    return data.map(function(item, key) {
        return instagramItemHtml(key, item, false);
    }).join('');
}

function createMobileHtml(data) {
    if (!data) return false;

    const slicePoint = data.length / 2;
    let chunkedData = [
        data.slice(0, slicePoint),
        data.slice(slicePoint)
    ];

    let html = `<div class="instagram--mobile__slider">`;
    html += createMobileSliderHtml(chunkedData[0]);
    html += `</div>`;
    html += `<div class="instagram__item instagram__item--full-width">`;
    html += `<h1 class="instagram__item__title">@thefreehand</h1>`;
    html += `</div>`;
    html += `<div class="instagram--mobile__slider">`;
    html += createMobileSliderHtml(chunkedData[1]);
    html += `</div>`;

    return html;
}

function registerEnquireJs(data) {

    enquire.register(`screen and (max-width: ${breakpointSmMax})`, {
        match: function() {
            insertHtml($instafeed, createMobileHtml(data));
            initMobileInstagramSlider();
        },
        unmatch: function() {
            destroyMobileIntsagramSliders();
        }
    });
    enquire.register(`screen and (min-width: ${breakpointMdMin})`, {
        match: function() {
            insertHtml($instafeed, createDesktopHtml(data));
            $(window).on('resize', setDynamicInstagramTitleSize)
                .trigger('resize');
        },
        unmatch: function() {
            $(window).off('resize', setDynamicInstagramTitleSize);
        }
    });
}

function insertHtml($el, html) {
    $el.html(html);
}

export default {
    init: function() {

        const data = window._instagramPosts;

        registerEnquireJs(data);

    }
}
