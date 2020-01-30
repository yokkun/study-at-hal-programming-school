document.addEventListener('DOMContentLoaded',function(){
	var btn = document.getElementById('btn');
	
	var listener = function(){
		window.alert('こんにちは、世界！');
	};
	//ダイアログが表示される
	btn.addEventListener('click', listener, false);
	
	//以下があるとダイアログが表示されなくなる
	//btn.removeEventListener('click', listener, false);
	
	//よりわかりやすい例
	let changeBgColor = function(){
		let elem = document.getElementById('elem');
		let toggle = function(){
			elem.style.backgroundColor('Yellow');
		};
		let add = function(){
				elem.addEventListener = 'Yellow';
			});
		};
		document.getElementById('add').addEventListener
	}
}, false);
