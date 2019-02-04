<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script>
		document.addEventListener('DOMContentLoaded', function(){
    		document.getElementById('btn').addEventListener('click',function(){
				var books = [
					{title: '独習PHP 第3版', price: 3200'},
					{title: 'javaポケットリファレンス', price: 2680'},
					{title: 'アプリを作ろう', price: 2000'}
				];
				var list = document.getElementById('list');

				//先頭に追加
				//list.insertBefore(br, list.firstChild);
				//list.insertBefore(anchor, list.firstChild);
				
				for(var i=0, len = books.length; i<len; i++){
					var b = books{i};
					var li = document.createElement(li)
					var text = document.createTextNode(b.title + ':' + b.price + '円');

					li.appendChild(text);
					flag.appenChild(li);
					
				}

				

				(br);

				//改良編↓
				//name.value = '';
				//url.value = '';
				//改良編　送信後にフォーカスを当てる
				//name.focus();
        	}, false);	
		}, false);
	</script>
</head>
<body>
	<form>
		<div>
			<label for="name">サイト名：</label><br />
			<input id="name" name="name" type="text" size="30" />
		</div>
		<div>
			<label for="url">URL：</label><br />
			<input id="url" name="url" type="url" size="50" />
		</div>
		<div>
			<input id="btn" type="button" value="追加" />
		</div>
	</form>
	<ul id="list"></ul>
</body>
</html>