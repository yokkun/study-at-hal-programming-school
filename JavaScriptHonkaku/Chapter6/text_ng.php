<html>
	<head>
		<title>クロスサイトスクリプティング</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script>
        //6.3.3 innerHTML / textContent
        document.addEventListener('DOMContentLoaded',function(){
        	document.getElementById('btn').addEventListener('click',function(){
				var name = document.getElementById('name');
				var result = document.getElementById('result');
				result.innerHTML = 'こんにちは、' + name.value + 'さん！';
				//innerHTMLはXSS脆弱性があるためユーザ入力をするところはtextContentプロパティを使用すること
            }, false);

        }, false);
        </script>
	</head>
	<body>
		<form>
			<label for="name">名前：</label>
			<input id="name" name="name" type="text" size="30" />
			<input id="btn" type="button" value="送信" />
		</form>
		<div id="result"></div>
	</body>
</html>