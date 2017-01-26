'use strict';

import GoogleMapsApiLoader from 'google-maps-api-loader';
import GOOGLE_MAP_STYLES from '../helpers/google-map-styles';
import { breakpointsBase } from '../helpers/breakpoints';

const apiKey = 'AIzaSyAvyyYuaO5yomsVB_5NjQ8OSRlcRU2HUpw';

function loadGoogleMap() {
    GoogleMapsApiLoader({
            apiKey: apiKey
        }).then(function(googleApi) {

            const locationEls = document.querySelectorAll('.js-location');
            const windowWidth = Math.max(document.documentElement.clientWidth,
                window.innerWidth || 0);

            for (let i = 0; i < locationEls.length; ++i) {

                const locationEl = locationEls[i];
                const lat = locationEl.dataset.lat;
                const lng = locationEl.dataset.lng;

                const myLatlng = new google.maps.LatLng(lat, lng);

                const mapOptions = {
                    zoom: 13,
                    center: myLatlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    scrollwheel: false,
                    styles: GOOGLE_MAP_STYLES.UNSATURATED_BROWNS
                };

                if (windowWidth <= breakpointsBase.sm) {
                    mapOptions.draggable = false;
                }

                const map = new google.maps.Map(
                    locationEl,
                    mapOptions
                );

                const marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    icon: window.networkurl +
                        'content/themes/freehand/dist/images/brandmark-black-red-sharp-small.png'
                });

            }

        }, function(err) {
            console.error(err);
        });
}

export default {
    init: function() {
        loadGoogleMap();
    }
}
