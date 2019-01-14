<html>
	<head>
		<title>ノード・ウォーキング1</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script>
			document.addEventListener('DOMContentLoaded', function(){
				var s = document.getElementById('food');

				var opts = s.childNodes;
				for (var i=0, len = opts.length; i<len; i++){
					var opt = opts.item(i);
					if (opt.nodeType === 1){ //nodetypeが1であることを確認する（1=空白ノードを除いたoptionノード）
						console.log(opt.value);
					}
				}
			});
		</script>
	</head>
	<body>
		<form>
        	<label for="food">一番好きな食べ物は？：</label>
        	<select id="food">
        		<option value="ラーメン">ラーメン</option>
        		<option value="餃子">餃子</option>
        		<option value="焼き肉">焼き肉</option>
        	</select>
        	<input type="submit" value="送信" />
        </form>
	</body>
</html>

