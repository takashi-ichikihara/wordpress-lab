(function ($) {
    /*------------------------------------------------
                DECLARATIONS
      ------------------------------------------------*/
      var scroll = $(window).scrollTop();
      var scrollup = $('.logicloom-scrool-top');
      /*------------------------------------------------
                  BACK TO TOP
      ------------------------------------------------*/
      scrollup.click(function () {
        $('html, body').animate({
          scrollTop: '0px'
        }, 800);
        return false;
      });
      $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll >= 200) {
          scrollup.fadeIn();
        } else {
          scrollup.fadeOut();
        }
      });
  
  
  })(jQuery);
