<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css" />
<script type="text/javascript">
	var storage = localStorage;
	storage.removeItem('fruit1');
	delete storage.fruit2;
	delete storage['fruit3'];
	console.log(storage.getItem('fruit1'));
	console.log(storage.fruit2);
	console.log(storage['fruit3']);
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