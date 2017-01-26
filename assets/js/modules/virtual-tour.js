import 'slick-carousel';
import $ from 'jquery';
import breakpoints from '../helpers/breakpoints';
import enquire from 'enquire.js';
import SimpleModal from 'simple-modal-es6';

function slideIframeHtml(url) {
    return `<div class="virtual-tour__slides__slide">
        <iframe src="${url}" width="100%" height="550"
                frameborder="0" style="border:0" allowfullscreen></iframe>
            <button title="Close (Esc)" type="button" class="smpl-modal__close">
                ×
            </button>
        </div>`;
}

function createSliderNavHtml() {
    return `<nav>
            <div class="virtual-tour__slides__nav--left"><span></span></div>
            <div class="virtual-tour__slides__nav--right"><span></span></div>
        </nav>`;
}

function createSliderHtml(urlsArray) {

    let html = `<div class="virtual-tour__slides">`;
    html += createSliderNavHtml();
    html += urlsArray.map(function(url) {
        return slideIframeHtml(url);
    }).join('');
    html += `</div>`;
    return html;
}

function createVirtualTourSlider($el) {

    let tourEmbedUrls = [];

    $el.find('a').each(function() {
        tourEmbedUrls.push($(this).data('embed-url'));
    });

    return createSliderHtml(tourEmbedUrls);
}

function launchSlider(event) {

    event.preventDefault();

    const slideIndex = $(event.currentTarget).parent('li').index();
    const content = createVirtualTourSlider($('.virtual-tour__nav'));

    SimpleModal.open(content);

    const $getVirtualTourSlides = $('.virtual-tour__slides');
    $getVirtualTourSlides.slick({
        slide: '.virtual-tour__slides__slide',
        arrows: false,
        centerMode: true,
        centerPadding: '20rem',
        dots: false,
        initialSlide: slideIndex
    });

    $getVirtualTourSlides.find('.virtual-tour__slides__nav--right').on('click',
        function() {
        $getVirtualTourSlides.slick('slickNext');
    });

    $getVirtualTourSlides.find('.virtual-tour__slides__nav--left').on('click',
        function() {
        $getVirtualTourSlides.slick('slickPrev');
    });

    $('.smpl-modal__close').on('click', SimpleModal.close);
}

export default {
    init: function() {
        enquire.register(`screen and (min-width: ${breakpoints.sm})`, {
            match: function() {
                $('.virtual-tour__nav').on('click', 'a', launchSlider);
            },
            unmatch: function() {
                $('.virtual-tour__nav').off('click', 'a', launchSlider);
            },
        });
    }
}
