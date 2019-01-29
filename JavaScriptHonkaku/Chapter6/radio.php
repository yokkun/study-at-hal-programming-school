<html>
	<head>
		<title>ラジオボタンの値を取得</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script>
        //6.3.3 innerHTML / textContent
        document.addEventListener('DOMContentLoaded',function(){
        	//関数リテラルを使用
        	var getRadioValue = function(name){
				var result = '';
				var elems = document.getElementsByName(name);

				for(var i=0, len = elems.length; i<len; i++){
					var elem = elems.item(i);
					if(elem.checked){
						result = elem.value;
						break;
					}
				}
				return result;
            }
            document.getElementById('btn').addEventListener('click', function(){
					window.alert(getRadioValue('food'));	
            	}, false);
        }, false);
        </script>
	</head>
	<body>
		<form>
			<div>
				好きな食べ物は？
				<label><input type="radio" name="food" value="ラーメン" />ラーメン</label>
				<label><input type="radio" name="food" value="餃子" />餃子</label>
				<label><input type="radio" name="food" value="焼き肉" />焼き肉</label>
			</div>
			<input id="btn" type="button" value="送信" />
		</form>
		<div id="result"></div>
	</body>
</html>