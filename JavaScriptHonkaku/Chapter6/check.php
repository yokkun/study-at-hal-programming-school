<html>
	<head>
		<title>チェックボックスの値を取得</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script>
        //6.3.3 innerHTML / textContent
        document.addEventListener('DOMContentLoaded',function(){
        	document.getElementById('btn').addEventListener('click',function(){
				var result = [];
				var foods = document.getElementByName('food');
            }, false);

        }, false);
        </script>
	</head>
	<body>
		<form>
			<div>
				好きな食べ物は？
				<label><input type="checkbox" name="food" value="ラーメン" />ラーメン</label>
				<label><input type="checkbox" name="food" value="餃子" />餃子</label>
				<label><input type="checkbox" name="food" value="焼き肉" />焼き肉</label>
			</div>
			<input id="btn" type="button" value="送信" />
		</form>
		<div id="result"></div>
	</body>
</html>