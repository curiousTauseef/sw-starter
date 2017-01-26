import smoothState from 'smoothState';
import NProgress from 'NProgress';
// Modules
import hero from './modules/hero';
// Initialize modules here
window.initAll = function(){
  hero.init();
};
//DOM-based Routing
(function($) {
  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var SPA = {
  
    init : function(){
      var settings = { 
            
            anchors: 'a',

            onStart: {
                duration: 280, 
                render: function ( $container ) {
                    NProgress.start(); 
                    $container.addClass( 'slide-out' );
                }
            },
            onAfter: function( $container ) {
               window.initAll();
               NProgress.done();
               $container.removeClass( 'slide-out' );
            }
        };
 
        $('#container').smoothState(settings);
    }  
  };

  var Sage = {
    // All pages
    'common': {
      init: function() {
          NProgress.start();
          SPA.init();
          
          window.initAll();

          setTimeout(function() {
            if($('#container').hasClass('slide-out')){
                $('#container').removeClass('slide-out');
            }
            
          }, 300);

      },
      finalize: function() {
        NProgress.done();
      }
    }
  };
  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
