$(function() {
【ここに入力】

【ここに入力】

【ここに入力】

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
  });
});