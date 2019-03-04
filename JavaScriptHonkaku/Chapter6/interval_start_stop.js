document.addEventListener('DOMContentLoaded',function(){
	makeTimer();
		let result = document.getElementById('result');	
		let start = document.getElmentById('start');
		let stop = document.getElementById('stop');
		let timer; 
		function makeTimer(){
			timer = setInterval(
				function(){
					var dat = new Date();
					result.textContent = dat.toLocaleTimeString();
				}, 1000
			);
		}
	start.addEventListener('click',makeTimer,false);
	stop.addEventListener('click',function(){clearInterval(timer);
	},false);
});