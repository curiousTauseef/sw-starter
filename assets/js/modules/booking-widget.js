import $ from 'jquery';
import breakpoints from '../helpers/breakpoints';
import { breakpointsBase } from '../helpers/breakpoints';
import gaTracker from '../helpers/gaTracker';
import enquire from 'enquire.js';
import select2 from 'select2';
import '../../../node_modules/pickadate/lib/picker.date';
import 'jquery-validation';

const cssClass = {
    bookingWidgetVisible: 'booking-widget--visible',
    bookingWidgetTriggerHidden: 'booking-widget-trigger--hidden',
    bookingWidgetSocialHidden: 'booking-widget-trigger__social--hidden',
    bookingWidgetSocialTitle: 'booking-widget-trigger__social__title',
    bookingWidgetSocialVertCenter: 'booking-widget-trigger--vertical-center',
    bookingWidgetVerticalCenter: 'booking-widget--vertical-center',
    bookNowTriggerClose: 'mobile-header__book-now--close'
};

const $sel = {
    bookingWidget: $('.booking-widget'),
    bookingWidgetTrigger: $('.booking-widget-trigger'),
    bookingWidgetTriggerSocial: $('.booking-widget-trigger__social'),
    bookingWidgetForm: $('.booking-widget__form'),
    bookNowTrigger: $('.mobile-header__book-now')
};

const select2elements = [
    '.booking-widget__form__location',
    '.booking-widget__form__room',
    '.booking-widget__form__guests'
];

function showWidgetTrigger() {
    $sel.bookingWidgetTrigger
        .removeClass(cssClass.bookingWidgetTriggerHidden);
}

function hideWidgetTrigger() {
    $sel.bookingWidgetTrigger
        .addClass(cssClass.bookingWidgetTriggerHidden);
}

function showWidget() {
    $sel.bookingWidget
        .addClass(cssClass.bookingWidgetVisible);
    // // $sel.bookNowTrigger
    //     .addClass(cssClass.bookNowTriggerClose);
}

function hideWidget() {
    $sel.bookingWidget
        .removeClass(cssClass.bookingWidgetVisible);
}

function showSocial() {
    $sel.bookingWidgetTriggerSocial
        .removeClass(cssClass.bookingWidgetSocialHidden);
}

function hideSocial() {
    $sel.bookingWidgetTriggerSocial
        .addClass(cssClass.bookingWidgetSocialHidden);
}

function showHideSocial() {
    $sel.bookingWidgetTriggerSocial
        .hasClass(cssClass.bookingWidgetSocialHidden)
        ? showSocial()
        : hideSocial() ;
}

function verticalCenterSocial() {

    hideSocial();
    // The vertical center animation is awful right now,
    // so I'm only going hide the social for now.
    // TODO: make this work pretty
    // $sel.bookingWidget.addClass(cssClass.bookingWidgetVerticalCenter);
    // $sel.bookingWidgetTrigger
    //     .addClass(cssClass.bookingWidgetSocialVertCenter);
}

function unVerticalCenterSocial() {

    showSocial();
    // The vertical center animation is awful right now,
    // so I'm only going hide the social for now.
    // TODO: make this work pretty
    // $sel.bookingWidget.removeClass(cssClass.bookingWidgetVerticalCenter);
    // $sel.bookingWidgetTrigger
    //     .removeClass(cssClass.bookingWidgetSocialVertCenter);
}

function bookingCalendars() {
    
    const pickadateFormat = 'ddd, mmm dd, yyyy';
    const formatSubmit = 'dd-mm-yyyy';
    const $arrivalElement = $('.booking-widget__form__date--arrival');
    const $departureElement = $('.booking-widget__form__date--departure');
     
    function init(mindate) {
        
        var min = mindate ? mindate : true;
        

        const $departurePicker = $departureElement.pickadate({
            min: min,
            format: pickadateFormat,
            formatSubmit: formatSubmit
        });

        const departurePicker = $departurePicker.pickadate('picker');

        const $arrivalPicker = $arrivalElement.pickadate({
            min: min,
            format: pickadateFormat,
            formatSubmit: formatSubmit,
            onSet: function() {
                const date = new Date(this.$node[0].value);
                date.setDate(date.getDate() + 1);
                departurePicker.set('min', date);
                departurePicker.set('select', date);
            }
        });

        const arrivalPicker = $arrivalPicker.pickadate('picker');
        

        if( mindate ){
            arrivalPicker.set('min', min);
            departurePicker.set('min', min);
            $departureElement.val('');
            $arrivalElement.val('');
        }else{
            arrivalPicker.set('min', true);
            departurePicker.set('min', true);
            $departureElement.val('');
            $arrivalElement.val('');
        }


    }

    function update(mindate){
        

        this.init(mindate);
    
    }


    return {
        init: init,
        update : update
    }
}

function closeBookingWidget() {
    hideWidget();
    setTimeout(function() {
        showWidgetTrigger();
    }, 350);
}

function openBookingWidget() {
    hideWidgetTrigger();
    setTimeout(function() {
        showWidget();
    }, 200);
}

function showHideInputLabel() {
    function $getFormElementLabel(el) {
        return $(el).parent('.booking-widget__form__row').find('label');
    }

    return $(this).val().length > 0
        ? $getFormElementLabel(this).addClass('visible')
        : $getFormElementLabel(this).removeClass('visible');
}

function padZeroLeft(num) {
    if (num < 10) {
        return '0' + num;
    }
    return num;
}

// dd-mm-yyyy to {day: dd, monthYear: mmyyyy}
function parseDateForASSD(date) {
    const splitDate = date.split('-');
    const day = splitDate[0];
    const month = splitDate[1]; 
    const euromonth = padZeroLeft(month - 1);
    const year = splitDate[2];
   
    return { day: day, month: month, year: year, monthYear: euromonth + year };
}

function buildBookingUrl() {
    const location = $sel.bookingWidgetForm.find('[name="location"]').val();
    // *_submit is used on pickadate widgets so we can get a properly formatted date string
    const checkIn = $sel.bookingWidgetForm.find('[name="check-in_submit"]').val();
    const checkOut = $sel.bookingWidgetForm.find('[name="check-out_submit"]').val();
    const checkInASSD = parseDateForASSD(checkIn);
    const checkOutASSD = parseDateForASSD(checkOut);
    const guests = $sel.bookingWidgetForm.find('[name="guests"]').val();
    const windowWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
    var url = '#invalid-location';
    var form_action = $sel.bookingWidgetForm.attr('action');

    if (location === 'los-angeles') {

        url = 'https://app.thebookingbutton.com/freehand-la/properties/freehandla?';
        url += `check_in_date=${checkIn}&check_out_date=${checkOut}&number_adults=${guests}`;

    } else if (location === 'miami') {

        // url = (windowWidth <= breakpointsBase.sm) ?
        //     'https://hostels.assd.com/mobile.php?cust=318318&langcrs=E&type=020&checkauto=1&house=410821' :
        //     'https://hostels.assd.com/tabs.php?cust=318318&langcrs=E&type=020&checkauto=1&house=410821';
        // url += `&adult=${guests}&day_a=${checkInASSD.day}&monthyear_a=${checkInASSD.monthYear}`;
        // url += `&day_d=${checkOutASSD.day}&monthyear_d=${checkOutASSD.monthYear}`;

        url =  '?cust=318318&langcrs=E&type=020&checkauto=1&house=410821&filter_accomm=%5B%5EP%5D.*';
        url += `&adult=${guests}&day_a=${checkInASSD.day}&monthyear_a=${checkInASSD.monthYear}`;
        url += `&day_d=${checkOutASSD.day}&monthyear_d=${checkOutASSD.monthYear}`;
        url += `&arrhidden=${checkInASSD.day}-${checkInASSD.month}-${checkInASSD.year}`;
        url += `&dephidden=${checkOutASSD.day}-${checkOutASSD.month}-${checkOutASSD.year}`;

        if(windowWidth > breakpointsBase.sm) {
            url = form_action + location + '/reserve' + url;
        }else{
            url ='https://hostels.assd.com/mobile.php' + url;
        }

        
    } else if (location === 'chicago') {

        // url = (windowWidth <= breakpointsBase.sm) ?
        //     'https://hostels.assd.com/mobile.php?cust=999318&langcrs=E&type=020&checkauto=1&house=410822' :
        //     'https://hostels.assd.com/tabs.php?cust=999318&langcrs=E&type=020&checkauto=1&house=410822';
        // url += `&adult=${guests}&day_a=${checkInASSD.day}&monthyear_a=${checkInASSD.monthYear}`;
        // url += `&day_d=${checkOutASSD.day}&monthyear_d=${checkOutASSD.monthYear}`;

        url =  '?cust=999318&langcrs=E&type=020&checkauto=1&house=410822&filter_accomm=%5B%5EP%5D.*' ;
        url += `&adult=${guests}&day_a=${checkInASSD.day}&monthyear_a=${checkInASSD.monthYear}`;
        url += `&day_d=${checkOutASSD.day}&monthyear_d=${checkOutASSD.monthYear}`;
        url += `&arrhidden=${checkInASSD.day}-${checkInASSD.month}-${checkInASSD.year}`;
        url += `&dephidden=${checkOutASSD.day}-${checkOutASSD.month}-${checkOutASSD.year}`;

        if(windowWidth > breakpointsBase.sm) {
            url = form_action + location + '/reserve' + url;
        }else{
            url ='https://hostels.assd.com/mobile.php' + url;
        }
        

    }
    
    // decorate link for cross domain tracking
   
    
    const decoratedLink = gaTracker().decorateLink(url);


    return decoratedLink;
}

// Add the booking buttons iframe for cross domain tracking, required by the
// thebookingbutton guide https://help.thebookingbutton.com/hc/en-us/articles/204347024-Google-Analytics-With-Source-Attribution-Modelling
function createTbbIframe() {
    var clientPrefix = 'freehand-la';
    var tbbDomain = 'http://app.thebookingbutton.com';
    var e = $('#tbb-iframe').length > 0 ? false : true;

    // checking if the domain is not the same as the referrer and that e is not defined yet, otherwise, do nothing.
    // if e is defined it means the iframe is already created. so we don't add an iframe everytime select value changes to Los angeles
    if (document.referrer.indexOf(document.domain) != 7 && e) {
        e = document.createElement('iframe');
        e.id = 'tbb-iframe';
        e.src = gaTracker().decorateLink('//' + tbbDomain + '/' + clientPrefix + '/ga_proxy');
        e.setAttribute('style', 'display:none');
        var b = document.getElementsByTagName('body')[0];
        b.appendChild(e);
    }



}

export default {
    init: function() {
        const la_init_date = [2017,2,15];
        var mindate = false;

        if($('.booking-widget__form__location').val()=='los-angeles'){
            mindate = la_init_date;
        }
        const calendars = bookingCalendars();
        calendars.init(mindate);

        $(select2elements.toString()).select2({
            dropdownParent: $('.booking-widget'),
            minimumResultsForSearch: Infinity,
            width: '100%'
        });

        $sel.bookingWidgetForm.validate();

        $sel.bookingWidgetTriggerSocial
            .find('.' + cssClass.bookingWidgetSocialTitle)
            .on('click', showHideSocial);

        $sel.bookingWidget.find('.booking-widget__form')
            .on('change', 'select, input', showHideInputLabel);

        $sel.bookingWidget.find('.booking-widget__form__close')
            .on('click', closeBookingWidget);

        $sel.bookingWidgetTrigger.find('.booking-widget-trigger__title')
            .on('click', openBookingWidget);

        $sel.bookingWidgetForm.on('submit', function(e) {
            e.preventDefault();

            if ($sel.bookingWidgetForm.valid()) {
                window.open(buildBookingUrl(), '_blank');
            } else {
                // $sel.bookingWidgetForm.validate() will show error messages for us
            }

        });

        enquire.register(`screen and (max-width: ${breakpoints.sm})`, {
            match: function() {
                showWidgetTrigger();
            }
        });

        $('a[href="#book-now"]').on('click', function(e) {
            e.preventDefault();
            // openBookingWidget();
            $('.booking-widget-trigger__title').click();
            $('.mobile-header__book-now').click();
        });

        $('.booking-widget__form__location').on('change', function() {
            var mindate = false;

            if ($(this).val() === 'los-angeles') {
                createTbbIframe();
                mindate = la_init_date;
            }

            const calendars = bookingCalendars();
            calendars.update(mindate);
          
        });

        if (window.location.hash.toLowerCase().indexOf('#book-now') >= 0) {
            openBookingWidget();
        }

    },
    hide: hideWidget,
    show: showWidget,
    open: openBookingWidget,
    verticalCenterSocial: verticalCenterSocial,
    unVerticalCenterSocial: unVerticalCenterSocial
}
