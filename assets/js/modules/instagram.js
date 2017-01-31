import 'slick-carousel';
import $ from 'jquery';
import breakpoints from '../helpers/breakpoints';

const breakpointSmMax = parseInt(breakpoints.sm, 10) - 1 + 'px';
const breakpointMdMin = breakpoints.sm;

export default {
    init: function() {

        const instafeed = document.getElementsByClassName('instagram');
        const $instafeed = $(instafeed);
        const instagram_username = $instafeed.data('instagram_username');
        const api_url = '/wp-json/wp/v2/instagram-posts/?filter[meta_key]=instagram_username&filter[meta_value]=' + instagram_username;

        const promise = $.ajax({
            url: api_url
        });

        promise.then((data) => {
            this.insertHtml($instafeed, this.createMobileHtml(data.posts));
        }).then(() => {
            this.initMobileInstagramSlider();
        }).then(()=> {$instafeed.addClass('loaded')})

    },
    insertHtml: function($el, html) {
        $el.html(html);
    },
    createMobileHtml: function(data) {
        if (!data) return false;

        let html = `<div class="instagram--mobile__slider">`;
        html += this.createMobileSliderHtml(data);
        html += `</div>`;

        return html;
    },
    createMobileSliderHtml: function(data) {
       
        return data.map((item, key) => {
            return this.instagramItemHtml(key, item, false);
        }).join('');
        
    },
    instagramItemHtml: function(key, data, insertTitleInGrid) {

        let html = ``;
        html += `<article class="instagram__item">`;
        html += `<a href="${data.meta.link}" target="_blank">`;
        html += `<img src="${data.meta.image}" alt="" />`;
        html += `</a>`;
        html += `</article>`;
        return html;
    },
    initMobileInstagramSlider: function() {
        $('.instagram--mobile__slider').each(function(key, el) {
            const $instaMobiSlider = $(el);
            $instaMobiSlider.slick({
                dots: false,
                arrows: true,
                slidesToShow: 6,
                slidesToScroll: 1,
                infinite: true,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        arrows: true,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                }, {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }]
            });
        });
    }

}