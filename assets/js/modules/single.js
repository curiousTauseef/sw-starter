import $ from 'jquery';

function wrapPostIframe() {
    $('.single--post__content').find('iframe').each(function(index, el) {
        if (!$(el).parent().hasClass('video-wrapper')) {
            $(el).wrap('<div class="video-wrapper"></div>');
        }
    });

}

export default {
    init: wrapPostIframe
}
