<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script>
		//パフォーマンスが落ちる
		document.addEventListener('DOMContentLoaded', function(){
				var books = [
					{title: '独習PHP 第3版', price: 3200},
					{title: 'javaポケットリファレンス', price: 2680},
					{title: 'アプリを作ろう', price: 2000}
				];
				var list = document.getElementById('list');
				
				//先頭に追加
				//list.insertBefore(br, list.firstChild);
				//list.insertBefore(anchor, list.firstChild);
				
				for(var i=0, len = books.length; i<len; i++){
					var b = books[i];
					var li = document.createElement('li');
					var text = document.createTextNode(b.title + ':' + b.price + '円');

					li.appendChild(text);
					list.appendChild(li);
					
				}


				//改良編↓
				//name.value = '';
				//url.value = '';
				//改良編　送信後にフォーカスを当てる
				//name.focus();
		}, false);
	</script>
</head>
<body>
	<ul id="list"></ul>
</body>
</html>