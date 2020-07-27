function valueMinus() {
  var a = $(".ui-slider-handle").attr("data-value") * 1;
  a = a - 1;
  if (a < 0) {
    a = 0;
  }
  $(".slider-1").slider({
    orientation: "horizontal",
    range: "min",
    max: 500,
    value: a,
  }); // End
  $(".ui-slider-handle").attr("data-value", a);
};

function valuePlus() {
  var a = $(".ui-slider-handle").attr("data-value") * 1;
  a = a + 1;
  $(".slider-1").slider({
    orientation: "horizontal",
    range: "min",
    max: 15000,
    value: a,
  }); // E
  $(".ui-slider-handle").attr("data-value", a);
}
(function($) {

  $(".slider-1").slider({
    orientation: "horizontal",
    range: "min",
    max: 15000,
    value: 5000,
    slide: function(event, ui) {
      $(".ui-slider-handle").attr("data-value", ui.value);

      var $Handle = $('.slider-1').find('.ui-slider-handle');
    $Handle.css('margin-left', -1 * $Handle.width() * ($('.slider-1').slider('value') / $('.slider-1').slider('option', 'max')));
    }
  });
  $(".ui-slider-handle").attr("data-value", 5000);

})(jQuery)

// COMMENTS SLIDER


var arni_carousel, next, prev, seats;
  arni_carousel = $('.carousel');
  seats = $('.carousel-seat');

  next = function(el) {
    if (el.next().length > 0) {
      return el.next();
    } else {
      return seats.first();
    }
  };

  prev = function(el) {
    if (el.prev().length > 0) {
      return el.prev();
    } else {
      return seats.last();
    }
  };
  
  

  $('.toggle').on('click', function(e) {
    var el, i, j, new_seat, ref;
    el = $('.is-ref').removeClass('is-ref');
    if ($(e.currentTarget).data('toggle') === 'next') {
      new_seat = next(el);
      arni_carousel.removeClass('is-reversing');
    } else {
      new_seat = prev(el);
      arni_carousel.addClass('is-reversing');
    }
    new_seat.addClass('is-ref').css('order', 1);
    for (i = j = 2, ref = seats.length; 2 <= ref ? j <= ref : j >= ref; i = 2 <= ref ? ++j : --j) {if (window.CP.shouldStopExecution(1)){break;}
      new_seat = next(new_seat).css('order', i);
    }
window.CP.exitedLoop(1);

    arni_carousel.removeClass('is-set');
    return setTimeout((function() {
      return arni_carousel.addClass('is-set');
    }), 50);
  });


// COMMENTS SLIDER

// ANIMATE-NUMBER
(function ($) {
  $.fn.countTo = function (options) {
    options = options || {};

    return $(this).each(function () {
      // set options for current element
      var settings = $.extend({}, $.fn.countTo.defaults, {
        from:            $(this).data('from'),
        to:              $(this).data('to'),
        speed:           $(this).data('speed'),
        refreshInterval: $(this).data('refresh-interval'),
        decimals:        $(this).data('decimals')
      }, options);

      // how many times to update the value, and how much to increment the value on each update
      var loops = Math.ceil(settings.speed / settings.refreshInterval),
        increment = (settings.to - settings.from) / loops;

      // references & variables that will change with each update
      var self = this,
        $self = $(this),
        loopCount = 0,
        value = settings.from,
        data = $self.data('countTo') || {};

      $self.data('countTo', data);

      // if an existing interval can be found, clear it first
      if (data.interval) {
        clearInterval(data.interval);
      }
      data.interval = setInterval(updateTimer, settings.refreshInterval);

      // initialize the element with the starting value
      render(value);

      function updateTimer() {
        value += increment;
        loopCount++;

        render(value);

        if (typeof(settings.onUpdate) == 'function') {
          settings.onUpdate.call(self, value);
        }

        if (loopCount >= loops) {
          // remove the interval
          $self.removeData('countTo');
          clearInterval(data.interval);
          value = settings.to;

          if (typeof(settings.onComplete) == 'function') {
            settings.onComplete.call(self, value);
          }
        }
      }

      function render(value) {
        var formattedValue = settings.formatter.call(self, value, settings);
        $self.text(formattedValue);
      }
    });
  };

  $.fn.countTo.defaults = {
    from: 0,               // the number the element should start at
    to: 0,                 // the number the element should end at
    speed: 1000,           // how long it should take to count between the target numbers
    refreshInterval: 100,  // how often the element should be updated
    decimals: 0,           // the number of decimal places to show
    formatter: formatter,  // handler for formatting the value before rendering
    onUpdate: null,        // callback method for every time the element is updated
    onComplete: null       // callback method for when the element finishes updating
  };

  function formatter(value, settings) {
    return value.toFixed(settings.decimals);
  }
}(jQuery));

    jQuery(function ($) {
     
      // start all the timers
      $('.timer').each(count);
      
      // restart a timer when a button is clicked
      $( window ).scroll(function () {console.log($(window).scrollTop());
    if($(window).scrollTop() > 300 && $(window).scrollTop() < 850)
    {
       $('.timer').each(count);
     }
      });
      
      function count(options) {
        var $this = $(this);
        options = $.extend({}, options || {}, $this.data('countToOptions') || {});
        $this.countTo(options);
      }
    });
    // ANIMATE-NUMBER


