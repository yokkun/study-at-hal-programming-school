$(function() {
  var l = $('#list');

  $('#up').click(function () {
    if (parseFloat(l.css('margin-top')) < 0) {
      l.animate({
        marginTop: parseFloat(l.css('margin-top')) + 44 + 'px'
      }, 1000);
    }
  });

  $('#down').click(function() {
    if (Math.abs(parseFloat(l.css('margin-top'))) < 
      44 * ($('li', l).length / 5 - 1)) {
      l.animate({
        marginTop: parseFloat(l.css('margin-top')) - 44 + 'px'
      }, 1000);
    }
  });

  $('#big').on('error', function () {
    $(this).attr('src', '../images/noimg.jpg');
  })
  .attr('src', $('#list img:first-child').attr('src'));
  $('#list img').click(function () {
    var img = $(this);
    $('#big')
      .hide(1000, function() {
        $(this).attr('src', img.attr('src'));
      })
      .show(2000);
//    $('#big')
//      .hide(1000).
//      .attr('src', img.attr('src'))
//      .show(2000);
  });
});