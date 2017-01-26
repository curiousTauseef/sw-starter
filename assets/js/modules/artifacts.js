'use strict';

import $ from 'jquery';
import breakpoints from '../helpers/breakpoints';
import enquire from 'enquire.js';

const $artifactsModule = $('.artifacts-module');
const windowHeight = $(window).outerHeight();

// http://stackoverflow.com/a/23202637/648844
function mapNumberInRangeToRange(num, inMin, inMax, outMin, outMax) {
    return (num - inMin) * (outMax - outMin) / (inMax - inMin) + outMin;
}

function showArtifacts() {
    $('.artifact').addClass('artifact--is-visible');
}

function isInViewport(deltaTop, deltaBottom) {
    return deltaTop < 0 && deltaBottom > 0;
}

function createParallax() {

    const $artifact = $(this);
    const $artifactWrapperElement = $artifact.parents('.layouts-section');
    const offsetTop = $artifactWrapperElement.offset().top;
    const elementHeight = $artifactWrapperElement.outerHeight();
    const inMin = 0;
    const inMax = windowHeight + elementHeight;

    var moveArtifact = function() {

        // scroll position
        let scrollTop = $(window).scrollTop();
        // offset of element when it's at the bottom of the viewport
        let deltaViewportBottomToElementTop = (offsetTop - windowHeight) - scrollTop;
        // offset of the bottom of the element when you've scrolled past it
        let deltaViewportTopToElementBottom = (offsetTop + elementHeight) - scrollTop;

        if (!isInViewport(deltaViewportBottomToElementTop, deltaViewportTopToElementBottom)) {
            return;
        }

        if ($artifact.hasClass('artifact-a')) {
            var outMin = -25;
            var outMax = 25;
            var top = mapNumberInRangeToRange(Math.abs(deltaViewportBottomToElementTop),
                inMin, inMax, outMin, outMax);
        } else {
            var outMin = 0;
            var outMax = 70;
            var top = mapNumberInRangeToRange(Math.abs(deltaViewportBottomToElementTop),
                inMin, inMax, outMin, outMax) * -1;
        }

        $artifact.css({ transform: `translate3D(0, ${top}%, 0)` });
    };

    enquire.register(`screen and (min-width: ${breakpoints.md})`, {
        match: function() {
            $(window).on('scroll', moveArtifact);
            // set initial position
            moveArtifact();
            // show artifacts after initial position is set
            showArtifacts();
        },
        unmatch: function() {
            $(window).off('scroll', moveArtifacts);
        },
    });
}

export default {
    init: function() {

        $('.artifact').each(createParallax);
    }
}
