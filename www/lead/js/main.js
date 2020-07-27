function valueMinus() {
    var e = 1 * $(".ui-slider-handle").attr("data-value");
    (e -= 1) < 0 && (e = 0), $(".slider-1").slider({
        orientation: "horizontal",
        range: "min",
        max: 500,
        step: 100,
        value: e
    }), $(".ui-slider-handle").attr("data-value", e)
}

function valuePlus() {
    var e = 1 * $(".ui-slider-handle").attr("data-value");
    e += 1, $(".slider-1").slider({
        orientation: "horizontal",
        range: "min",
        max: 15e3,
        step: 100,
        value: e
    }), $(".ui-slider-handle").attr("data-value", e)
}
var arni_carousel, next, prev, seats;
! function(e) {
    e(".slider-1").slider({
        orientation: "horizontal",
        range: "min",
        max: 15e3,
        value: 5e3,
        step: 100,
        slide: function(t, a) {
            e(".ui-slider-handle").attr("data-value", a.value);
            var r = e(".slider-1").find(".ui-slider-handle");
            r.css("margin-left", -1 * r.width() * (e(".slider-1").slider("value") / e(".slider-1").slider("option", "max")))
        }
    }), e(".ui-slider-handle").attr("data-value", 5e3)
}(jQuery), arni_carousel = $(".carousel"), seats = $(".carousel-seat"), next = function(e) {
        return e.next().length > 0 ? e.next() : seats.first()
    }, prev = function(e) {
        return e.prev().length > 0 ? e.prev() : seats.last()
    }, $(".toggle").on("click", function(e) {
        var t, a, r, n, o;
        for (t = $(".is-ref").removeClass("is-ref"), "next" === $(e.currentTarget).data("toggle") ? (n = next(t), arni_carousel.removeClass("is-reversing")) : (n = prev(t), arni_carousel.addClass("is-reversing")), n.addClass("is-ref").css("order", 1), a = r = 2, o = seats.length;
            (2 <= o ? r <= o : r >= o) && !window.CP.shouldStopExecution(1); a = 2 <= o ? ++r : --r) n = next(n).css("order", a);
        return window.CP.exitedLoop(1), arni_carousel.removeClass("is-set"), setTimeout(function() {
            return arni_carousel.addClass("is-set")
        }, 50)
    }),
    
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