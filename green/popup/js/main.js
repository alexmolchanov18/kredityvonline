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