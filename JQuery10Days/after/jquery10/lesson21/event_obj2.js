$(function() {
  var onmousedown = function(e) {
    if (e.which === 3) {
      $(e.data.exp).css({
        display: 'block',
        top: e.pageY,
        left: e.pageX
      });
    }
    e.stopPropagation();
  };

  $(document)
    .mousedown({ exp : '#menu' }, onmousedown)
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
    .mousedown({ exp: '#menu2' }, onmousedown);
});