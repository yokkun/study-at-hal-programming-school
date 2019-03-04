document.addEventListener('DOMContentLoaded',function(){
	var timer = window.setInterval(
		function(){
			var dat = new Date();
			document.getElementById('result').textContent = dat.toLocaleTimeString();
		}, 5000
	);
	document.getElementById('btn').addEventListener('click',function(){
		window.clearInterval(timer);
	}, false);
}, false);