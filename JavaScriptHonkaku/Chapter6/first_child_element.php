<html>
	<head>
		<title>ノード・ウォーキング3</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script>
			document.addEventListener('DOMContentLoaded', function(){
				var s = document.getElementById("food");

				var child = s.firstElementChild; //要素の最初の子要素を取得
				while (child){
					//if (child.nodeType === 1){ //first_childとの比較
						console.log (child.value);
					//}
					child = child.nextElementSibling;
				}
				//イベントドリブンモデルのテスト
				s.addEventListener('change',function(e){
					console.log(e.target.value);//changeイベントはoptionが変化しているのではなくselect要素の変化に対して発生する
				});
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