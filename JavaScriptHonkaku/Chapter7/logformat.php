<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css" />
<script type="text/javascript" src="logformat.js"></script>
<script type="text/javascript">
	document.addEventListener('DOMContentLoaded',function(){
		document.getElementById('calc').addEventListener('click',function(){
			let upperBase = parseFloat(document.getElementById('upperBase').value);
			let lowerBase = parseFloat(document.getElementById('lowerBase').value);
			let height = parseFloat(document.getElementById('height').value);
			let result = parseFloat(document.getElementById('result').value);
			let answer = (upperBase + lowerBase) * height / 2;
			console.log("(%.2f + %.2f) * %.2f / 2 = %.2f", upperBase, lowerBase, height, answer);
			answer.textContent = answer;
		});
	});
</script>

<title>consoleオブジェクト：ログメソッド</title>
</head>
<body>
	<form>
		（	上底：<input type="text" id="upperBase" name="upperBase" size="10" />
		+	下底：<input type="text" id="lowerBase" name="lowerBase" size="10" />
			高さ：<input type="text" id="height" name="height" size="10" />
			<span id="result"></span>
			<input type="button" id="calc" value="台形の面積の計算" />
	</form>
</body>
</html>