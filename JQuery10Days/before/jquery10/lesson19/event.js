﻿$(function() {
	$('#on').click(function(){
		$('#big').on('error',function(){
			$(this).attr('src','../images/noimg.jpg');
		})
	})
  .attr('src', $('#list img:first').attr('src'));
  $('#list img').click(function() {
    $('#big').attr('src', $(this).attr('src'));
  });
	$('#off').click(function(){
		$('#big').off('error');
	})
});