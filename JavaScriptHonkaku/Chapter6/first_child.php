<html>
	<head>
		<title>ノード・ウォーキング2</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script>
			document.addEventListener('DOMContentLoaded', function(){
				var s = document.getElementById("food");

				var child = s.firstChild; //要素の最初の子ノードを取得
				while (child){
					if (child.nodeType === 1){ 
						console.log (child.value);
					}
					child = child.nextSibling;
				}
			});
		</script>
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