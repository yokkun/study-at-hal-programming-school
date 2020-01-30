<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script>
		document.addEventListener('DOMContentLoaded', function(){
    		document.getElementById('btn').addEventListener('click',function(){
				var name = document.getElementById('name');
				var url = document.getElementById('url');

				var anchor = document.createElement('a');
				anchor.href = url.value;
				//改良編　別のタブで開く
				anchor.target = 'blank';
				
				var text = document.createTextNode(name.value);
				anchor.appendChild(text);

				var br = document.createElement('br');

				var list = document.getElementById('list');

				list.appendChild(anchor);
				list.appendChild(br);

				//改良編↓
				name.value = '';
				url.value = '';
				//改良編　送信後にフォーカスを当てる
				name.focus();
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
	<div id="list"></div>
</body>
</html>