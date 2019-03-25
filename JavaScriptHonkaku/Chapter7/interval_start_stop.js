document.addEventListener('DOMContentLoaded',function(){
	
		let result = document.getElementById('result');	
		let start = document.getElementById('start');
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
	makeTimer();
});