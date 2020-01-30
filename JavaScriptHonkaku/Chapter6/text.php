<html>
	<head>
		<title>テキストを取得する</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script>
        //6.3.3 innerHTML / textContent
        document.addEventListener('DOMContentLoaded',function(){
        	var list = document.getElementById('list');
        	
        		console.log(list.innerHTML);
        		console.log(list.textContent);

        }, false);
        </script>
	</head>
	<body>
		<ul id="list">
			<li><a href="www.wings.msn.to">サーバサイド技術の学び舎 - WINGS</a></li>
			<li><a href="http//www.web-deli.com">Web Deli</a></li>
			<li><a href="http://buildinsider.net/web/jqueryref">JQuery逆引きリファレンス</a></li>
		</ul>
	</body>
</html>