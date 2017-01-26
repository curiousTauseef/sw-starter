import 'slick-carousel';

// Finds Y value of given object
function findPos(obj) {
    var curtop = 0;
    if (obj.offsetParent) {
        do {
            curtop += obj.offsetTop;
        } while (obj = obj.offsetParent);
        return [curtop];
    }
}

function toggleMobilePropertyNav(event) {

    event.preventDefault();
    $('.hotel-property-nav ul').toggleClass('hotel-property-nav__list--visible');

    const $arrow = $(this).find('.hotel-property-nav__mobile__trigger__arrow');
    const arrowDownClassName = 'hotel-property-nav__mobile__trigger__arrow--down';
    const arrowUpClassName = 'hotel-property-nav__mobile__trigger__arrow--up';

    if ($arrow.hasClass(arrowDownClassName)) {
        $arrow.removeClass(arrowDownClassName);
        $arrow.addClass(arrowUpClassName);
    } else {
        $arrow.removeClass(arrowUpClassName);
        $arrow.addClass(arrowDownClassName);
    }
}

function initSliderAndSliderNav(slider) {
    const $slider = $(slider);

    const $cinemagraphs = $slider.data('cinemagraphs');
    const $fallback_image = $slider.data('fallback');

    if($cinemagraphs.length > 0){

        const rand_cinamegraph = $cinemagraphs[Math.floor(Math.random() * $cinemagraphs.length)]; 
            
         $slider.css( 'background-image' , (rand_cinamegraph.poster ? `url(${rand_cinamegraph.poster.url})` : '' ) );
        
         var slide = '<video class="hidden-xs visible-sm visible-md visible-lg" poster="' + (rand_cinamegraph.poster ? rand_cinamegraph.poster.url  : '' ) + '" width="100%" preload="auto" loop autoplay muted>'
         + '<source src="' + rand_cinamegraph.movie + '" type="video/mp4">'
         + '</video>';
         


         if(rand_cinamegraph.poster){
             slide = slide + '<div class="visible-xs hidden-sm hidden-md hidden-lg" style="background-image: url('+ rand_cinamegraph.poster.sizes.medium_large +'); background-size: cover;">'
             + '</div>';
            
         }else if($fallback_image){
            slide = slide + '<div class="visible-xs hidden-sm hidden-md hidden-lg" style="background-image: url('+ $fallback_image +'); background-size: cover;">'
             + '</div>';
            
         }
        

        
         $slider.append(slide);
       
    }
    
    if ($slider.length > 0) {
        $slider.addClass('loaded');
    }


    if ($slider.find('> .hero__slider__slide').length <= 1) {
        return false;
    }

    const $sliderNav = $slider.parent().find('.hero__slider-nav');
    const sliderOptions = { arrows: false, dots: false, autoplay: true, autoplaySpeed: 3500,  infinite: true, speed: 500 };
  
    $slider.slick(sliderOptions);

    $sliderNav.on('click', '.hero__slider-nav__prev', function() {
        $slider.slick('slickPrev');
    });

    $sliderNav.on('click', '.hero__slider-nav__next', function() {
        $slider.slick('slickNext');
    });

   
}

export default {
    init: function() {

        $('.hotel-property-nav__mobile__trigger').on('click', toggleMobilePropertyNav);

        const heroSliders = document.getElementsByClassName('hero__slider');
        
        $.each(heroSliders, function(index, slider) {
            initSliderAndSliderNav(slider);
        });

        
    }
}
