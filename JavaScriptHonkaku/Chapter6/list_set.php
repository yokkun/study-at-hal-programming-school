<html>
	<head>
		<title>リストボックスの初期値を設定</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script>
        //6.3.3 innerHTML / textContent
        document.addEventListener('DOMContentLoaded',function(){
        	//配列を取得
        	var setListValue = function(name,value){
				var opts = document.getElementById(name);

				for(var i=0, len = opts.length; i<len; i++){
					var opt = opts.item(i);
					if(value.indexOf(opt.value) > -1){ //要素が配列の何番目にあるか。存在しない場合は-1が返ってくる
						opt.selected = true;//見つかったら（存在した場合は）チェックを入れる
					}
				}
			};
			//リストボックスfoodの初期値を設定
			setListValue('food',['餃子','焼き肉']);
        }, false);
        </script>
	</head>
	<body>
		<form>
			<div>
				<label for="food">好きな食べ物は？：</label>
				<select id="food" multiple>
					<option value="ラーメン">ラーメン</option>
					<option value="餃子">餃子</option>
					<option value="焼き肉">焼き肉</option>
				</select>
				<input id="btn" type="button" value="送信" />
			</div>
		</form>
	</body>
</html>