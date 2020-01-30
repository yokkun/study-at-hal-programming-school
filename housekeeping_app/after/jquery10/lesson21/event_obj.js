$(function() {
  $(document)
    .mousedown(function(e) {
      if (e.which === 3) {
        $('#menu').css({
          display: 'block',
          top: e.pageY,
          left: e.pageX
        });
      }
    })
    .click(function(e) {
      if (e.which === 1) {
        $('#menu').css('display', 'none');
        $('#menu2').css('display', 'none');
      }
    })
    .contextmenu(function(e) {
      e.preventDefault();
    });
  $('#data')
    .mousedown(function(e) {
      if (e.which === 3) {
        $('#menu2').css({
          display: 'block',
          top: e.pageY,
          left: e.pageX
        });
        e.stopPropagation();
      }
    });
});