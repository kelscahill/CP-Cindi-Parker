/* eslint-disable */

/**
 * @file
 * Custom JS for Premium Parking.
 */

(function($) {

  // Add class if is mobile
  function isMobile() {
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
      return true;
    }
    return false;
  }

  // Add class if is mobile
  if (isMobile()) {
    $('html').addClass(' touch');
  } else if (!isMobile()){
    $('html').addClass(' no-touch');
  }

  // Remove active classes on click
  $('.u-icon__close').on('click', function() {
    $('.c-modal').removeClass('this-is-active');
  });

  // Slick carousel
  $('.js-slick--gallery').slick({
    speed: 300,
    mobileFirst: true,
    autoplay: true,
    autoplaySpeed: 4000,
    cssEase: 'ease-out',
    fade: true,
    arrows: false,
    dots: true
  });

  // Check if navigation has overflow
  $(window).on('load resize', function() {
    var menu = $('.js-overflow-scroll');
    if (menu.length > 0 && (menu.innerWidth() == menu.parent().width()) ) {
      menu.addClass("has-overflow");
    } else {
      menu.removeClass("has-overflow");
    }
  });

  var toggleClasses = function(element) {
    var $this = element,
        $togglePrefix = $this.data('prefix') || 'this';

    // If the element you need toggled is relative to the toggle, add the
    // .js-this class to the parent element and "this" to the data-toggled attr.
    if ($this.data('toggled') == "this") {
      var $toggled = $this.parents('.js-this');
    } else {
      var $toggled = $('.' + $this.data('toggled'));
    }

    $this.toggleClass($togglePrefix + '-is-active');
    $toggled.toggleClass($togglePrefix + '-is-active');

    // Remove a class on another element, if needed.
    if ($this.data('remove')) {
      $('.' + $this.data('remove')).removeClass($this.data('remove'));
    }
  };

  /*
   * Toggle Active Classes
   *
   * @description:
   *  toggle specific classes based on data-attr of clicked element
   *
   * @requires:
   *  'js-toggle' class and a data-attr with the element to be
   *  toggled's class name both applied to the clicked element
   *
   * @example usage:
   *  <span class="js-toggle" data-toggled="toggled-class">Toggler</span>
   *  <div class="toggled-class">This element's class will be toggled</div>
   *
   */
  $('.js-toggle').on('click', function(e) {
    e.stopPropagation();
    toggleClasses($(this));
  });

  // Toggle parent class
  $('.js-toggle-parent').on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
    $this.toggleClass('this-is-active');
    $this.parent().toggleClass('this-is-active');
  });

})(jQuery);
