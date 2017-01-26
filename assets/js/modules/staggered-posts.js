import 'slick-carousel';
import $ from 'jquery';
import editorial from './editorial';
import bookingWidget from './booking-widget';

const slickOptions = {
    arrows: false,
    dots: false,
    swipe: false,
};

function postIndex(target) {
    return $(target).parents('.staggered-posts__post').data('index');
}

function $getParentElement(target) {
    return $(target).parents('.staggered-posts');
}

function $getSlideWrapper($el) {
    return $el.find('.staggered-posts--slider');
}

function $getSlider($el) {
    return $el.find('.staggered-posts--slider__slides');
}

function $getStaggeredPostsDesktop($el) {
    return $el.find('.staggered-posts--desktop');
}

function $getStaggeredPostsMobile($el) {
    return $el.find('.staggered-posts--mobile');
}

function $getStaggeredPostsStaggered($el) {
    return $el.find('.staggered-posts--staggered');
}

function closePostsSlider(event) {

    event.preventDefault();
    const $el = $getParentElement(event.currentTarget);
    const $staggeredPostsStaggered= $getStaggeredPostsDesktop($el);
    const $slideWrapper = $getSlideWrapper($el);
    const $slider = $getSlider($el);

    $staggeredPostsStaggered.css({'opacity': 0, 'display': 'block'});
    //$slideWrapper.css({'display': 'none'});
    
    $slideWrapper.removeClass('visible');

    $slider.slick('destroy');
    $staggeredPostsStaggered.css({'opacity': 1});
}

function openPostsSlider(event) {
   

    event.preventDefault();
    const $el = $getParentElement(event.currentTarget);
    const $staggeredPostsStaggered= $getStaggeredPostsStaggered($el);
    const $slideWrapper = $getSlideWrapper($el);
    const $slider = $getSlider($el);
    const nextSlideIndex = postIndex(event.currentTarget) + 1;

    $staggeredPostsStaggered.css({'display': 'none'});
   
    $slideWrapper.addClass('visible');

    slickOptions.initialSlide = postIndex(event.currentTarget);
    editorial.reinitSliders();
    $slider.slick(slickOptions);
 
    updateNextTitle(nextSlideIndex, $slider);

    $('html, body').animate({
        scrollTop: $el.parent().offset().top
    }, 100);

    $slider.on('afterChange', function(slick, currentSlide) {

        function isStaggeredSlider($targetSlider) {
            return $targetSlider.hasClass('staggered-posts--slider__slides');
        }

        if (isStaggeredSlider($(slick.target))) {
            const nextSlideIndex = currentSlide.currentSlide + 1;
            updateNextTitle(nextSlideIndex, $(slick.currentTarget));
        }
    });

}

function updateNextTitle(nextSlideIndex, $currentSlider) {
    const nextTitle = $currentSlider
        .find(`[data-slick-index="${nextSlideIndex}"] .editorial__title`).text().trim();

    $('.staggered-posts--slider__nav__next span:first-child').html(nextTitle);
}

function slideToNext(event) {
    event.preventDefault();
    const $el = $getParentElement(event.currentTarget);
    const $slider = $getSlider($el);
    $slider.slick('slickNext');
}

function shouldNotInitSliderEvents() {
    return $('.staggered-posts--slider').length === 0
}

function openBookingWidget(event) {
    event.preventDefault();
    bookingWidget.open();
}

function nullAction(event){
    event.preventDefault();
    return false;  
}
export default {
    init: function() {

        const bookingWidgetCta = document.querySelector('.js-staggered-posts-booking-widget-cta');

        if (bookingWidgetCta) {
            bookingWidgetCta.addEventListener('click', openBookingWidget);
        }

        if (!shouldNotInitSliderEvents()) {

            $('.staggered-posts--slider__nav__next').on('click', slideToNext);

            $('.staggered-posts--slider__nav__close').on('click', closePostsSlider);

            $('.staggered-posts--staggered.staggered-posts--slider-enabled')
                .on('click', 'a', openPostsSlider);
        }

     
    }
}
