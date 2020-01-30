$(function() {
  var tabs = $('#container');
  $('> ul li:first a', tabs).addClass('selected');
  $('> div', tabs).load(
    $('> ul li:first a', tabs).attr('href'));
  $('> ul li a', tabs).click(function(e) {
    if (!$(this).hasClass('selected')) {
      $('> ul li a.selected', tabs).removeClass('selected');
      $(this).addClass('selected');
      $('> div', tabs).load($(this).attr('href'));
    }
    e.preventDefault();
  });
});