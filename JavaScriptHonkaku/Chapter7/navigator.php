<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css" />
<title>assert</title>
</head>
<body>
<script type="text/javascript" >
	function circle(radius){
		console.assert(typeof raidus === 'number' && radius > 0, "引数radiusは正数でなければなりません。");
		return radius * radius * Math.PI;
		//条件を満たしてない時だけメッセージを出す
	}
	console.log(circle(-5));
</script>

</body>
</html>