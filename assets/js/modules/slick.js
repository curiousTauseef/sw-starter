import 'slick-carousel';
// SlickSlider is a base class
class SlickSlider {

    init(slider, variables ){

        if(slider === 0 ){

            return false;
      
        }
        const $slider = $(slider);
        
        var options = { arrows: false, dots: false, autoplay: true, autoplaySpeed: 3500,  infinite: true, speed: 500 };

        $.extend( options, variables ); 

        $slider.on('init', (slick)=>{ $(slick.target).addClass('loaded') });

        $slider.slick(options);  

    }
}
export default SlickSlider;
 

