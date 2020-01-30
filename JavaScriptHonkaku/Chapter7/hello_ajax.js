document.addEventListener('DOMContentLoaded',function(){
	document.getElementById('btn').addEventListener('click',function(){
		var result = document.getElementById('result');
		var xhr = new XMLHttpRequest();
		
		xhr.onreadystatechange = function(){
			if(xhr.readyState === 4){
				if(xhr.status === 200){
					result.textContent = xhr.responseText;
				} else {
					result.textContent = 'サーバーエラーが発生しました。';
				}
			} else {
				result.textContent = '通信中...';
			}
			
			//オリジナル 
			/*
			xhr.addEventListener('loadstart', function(){
				result.textContent = '通信中...';
			}, false);
			xhr.addEventListener('load', function(){
				result.textContent = xhr.response.Text;
			}, false);
			xhr.addEventListener('error', function(){
				reslt.textContent = 'サーバーエラーが発生しました。';
			}, false);
			*/
		};
		xhr.open('GET', 'hello_ajax.php?name=' + 
				encodeURIComponent(document.getElementById('name').value), true);
		xhr.send(null);
	}, false);
}, false);