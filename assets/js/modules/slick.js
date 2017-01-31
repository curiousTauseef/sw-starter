import 'slick-carousel';
// SlickSlider is a base class
class SlickSlider {

    init(slider){

        if(slider === 0 ){

            return false;
      
        }
        const $slider = $(slider);

        $slider.on('init', (slick)=>{ $(slick.target).addClass('loaded') });

        $slider.slick({ arrows: false, dots: false, autoplay: true, autoplaySpeed: 3500,  infinite: true, speed: 500 });  

    }
}
export default SlickSlider;


