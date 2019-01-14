<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script>
		document.addEventListener('DOMContentLoaded', function(){
			var current = new Date();
			var result = document.getElementById('result');
			result.textContent = current.toLocaleString();
		});
		//配列ライクなオブジェクト
		//var ary = Array.prototype.slice.call(arguments);
	</script>
</head>

<body>
	現在時刻：<span id="result"></span>
</body>

</html>