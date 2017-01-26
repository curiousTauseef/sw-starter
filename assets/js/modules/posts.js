import 'slick-carousel';
import $ from 'jquery';
import breakpoints from '../helpers/breakpoints.js';
import enquire from 'enquire.js';

function $getPostsSlider() {
    return $('.posts__row');
}

export default {
    init: function() {

        // If this module does not exist, plz exit
        if ($getPostsSlider().length < 1)
            return;

        enquire.register(`screen and (max-width: ${breakpoints.sm})`, {
            match: function() {
                $getPostsSlider().each(function(key, el) {
                    $(el).slick({
                        dots: false,
                        arrows: false,
                        infinite: true
                    });
                });
            },
            unmatch: function() {
                $getPostsSlider().slick('unslick');
            },
        });
    }
}
