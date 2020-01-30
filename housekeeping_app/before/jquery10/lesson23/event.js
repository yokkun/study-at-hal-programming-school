$(function() {
  $('#big').on('error', function () {
    $(this).attr('src', '../images/noimg.jpg');
  })
  .attr('src', $('#list img:first-child').attr('src'));
  $('#list img').click(function() {
【ここに入力】
  });
});