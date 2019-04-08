<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css" />
<script type="text/javascript">
	var storage = localStorage;
	for (var i=0, len = storage.length; i<len; i++){
		var k = storage.key(i);//key
		var v = storage[k];//値を取得
		console.log(k + ':' + v);
	}
	//keyとvalueを取り出せる
</script>
<title>ストレージにデータを保存</title>
</head>
<body>
	<div id="main">
		<p>Wingsプロジェクト</p>
		<img src="http://wings.msn.to/image/wings.jpg">
	</div>
</body>
</html>