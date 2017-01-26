import $ from 'jquery';
import enquire from 'enquire.js';
import breakpoints from '../helpers/breakpoints';
import bookingWidget from './booking-widget';
import globalNav from './global-nav';

const state = {
    isNavVisible: false,
    isBookingVisible: false,
}

const cssClass = {
    globalNavTriggerClose: 'mobile-header__global-nav-trigger--close',
    bookNowTriggerClose: 'mobile-header__book-now--close',
}

const $sel = {
    bookNowTrigger: $('.mobile-header__book-now'),
    mainContent: $('#main'),
    navTrigger: $('.mobile-header__global-nav-trigger')
}

function hideNav() {
    globalNav.unSticky();
    $sel.navTrigger.removeClass(cssClass.globalNavTriggerClose);
    state.isNavVisible = false;
}

function showNav() {
    hideBookNowForm();
    globalNav.makeSticky();
    $sel.navTrigger.addClass(cssClass.globalNavTriggerClose);
    state.isNavVisible = true;
}

function hideBookNowForm() {
    bookingWidget.hide();
    $sel.bookNowTrigger.removeClass(cssClass.bookNowTriggerClose);
    state.isBookingVisible = false;
}

function showBookNowForm() {
    hideNav();
    bookingWidget.show();
    $sel.bookNowTrigger.addClass(cssClass.bookNowTriggerClose);
    state.isBookingVisible = true;
}

function toggleNav(event) {
    event.preventDefault();
    return state.isNavVisible ? hideNav() : showNav();
}

function toggleBookNowForm(event) {
    event.preventDefault();
    return state.isBookingVisible ? hideBookNowForm() : showBookNowForm();
}

export default {
    init: function() {

        // If this module does not exist, plz exit
        if ($sel.navTrigger.length < 1)
            return;

        enquire.register(`screen and (max-width: ${breakpoints.sm})`, {
            match: function() {
                $sel.bookNowTrigger.on('click', toggleBookNowForm);
                $sel.navTrigger.on('click', toggleNav);
                hideNav();
                hideBookNowForm();
            },
            unmatch: function() {
                $sel.bookNowTrigger.off('click', toggleBookNowForm);
                $sel.navTrigger.off('click', toggleNav);
                hideNav();
                hideBookNowForm();
            },
        });
    }
}
