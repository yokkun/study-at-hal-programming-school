<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css" />
<script type="text/javascript">
	console.groupCollapsed('上位グループ');
	for (var i=0; i<3; i++){
		console.group('下位グループ');
		for (var j=0; j<3; j++){
			console.log(i,j);
		}
		console.groupEnd();
	}
	console.groupEnd();
</script>
<title>logメソッド：group</title>
</head>
<body>

</body>
</html>