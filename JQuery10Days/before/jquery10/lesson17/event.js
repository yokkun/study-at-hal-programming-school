$(function() {
	$('#big').attr('src', $('#list img:first-child').attr('src'));
	$('#list img').click(function(){
		$('#big').attr('src', $(this).attr('src'));
	});
});