document.addEventListener('DOMContentLoaded', function(){
	var main = document.getElementById('main');
	main.addEventListener('mousemove',function(e){
		main.innerHTML = 'screen' + e.screenX + '/' + e.screenY + '<br />' + 'page' + e.pageX + '/' + e.pageY + '<br />' + 'client' + e.clientX + '/' + e.clientY + '<br />' + 'offset' + e.offsetX + '/' + e.offsetY + '<br />';
	}, false);
}, false);