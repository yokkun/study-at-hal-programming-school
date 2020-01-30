<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script>
		//無限ループになってしまう例
		document.addEventListener('DOMContentLoaded', function(){
    		var second = document.getElementById('second');
    		var li = document.getElementsByTagName('li');//document要素のliを全て取得してしまう
    		//var li = first.getElementsByTagName('li');
			
			//for(var i=0; i<li.length; i++){
			for(var i=0, len=li.length; i<len; i++){
				var item = li.item(i);
				var new_li = document.createElement("li");
				var new_text = document.createTextNode(item.textContent);
				new_li.appendChild(new_text);
				second.appendChild(new_li);
			}
		}, false);
	</script>
</head>
<body>
	<ul id="first">
		<li>独習PHP 第3版</li>
		<li>Javaポケットリファレンス</li>
		<li>Swiftポケットリファレンス</li>
		<li>独習ASP.NET 第5版</li>
		<li>アプリを作ろう!Android入門</li>
	</ul>
	<ul id="second"></ul>	
</body>
</html>