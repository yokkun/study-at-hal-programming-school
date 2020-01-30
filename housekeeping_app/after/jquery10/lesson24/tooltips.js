$(function() {
  $('.tiplink')
    .mouseenter(function(e) {
      $('.tip:not(:animated)')
        .text($(this).data('tips'))
        .css({
          top: e.pageY,
          left: e.pageX
        })
        .fadeIn(500);
        // .fadeTo(500, 0.8);
    })
    .mouseleave(function(e) {
      $('.tip')
        .fadeOut(1000);
    });
});