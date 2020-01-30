$(function() {
【ここに入力】
  .attr('src', $('#list img:first').attr('src'));
  $('#list img').click(function() {
    $('#big').attr('src', $(this).attr('src'));
  });
});