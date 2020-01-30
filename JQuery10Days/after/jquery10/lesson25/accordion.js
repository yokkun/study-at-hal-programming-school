$(function() {
  $('#panel > dd:gt(0)').hide();
  $('#panel > dt')
    .click(function(e) {
      $('#panel > dd').slideUp(500);
      $('+dd', this).slideDown(500);
    });
});