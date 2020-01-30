$(function() {
  $('#panel > dd').hide();
  $('#panel > dt')
    .click(function(e) {
      var d = $('+dd', this);
      if (d.css('display') === 'block') {
        d.slideUp(500);
      } else {
        d.slideDown(500);
      }
    });
});