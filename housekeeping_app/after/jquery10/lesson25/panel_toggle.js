$(function() {
  $('#panel > dd').hide();
  $('#panel > dt')
    .click(function(e) {
      $('+dd', this).slideToggle(500);
    });
});