<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css" />
<script type="text/javascript">
	function call1(){
		call2();
	}
	function call2(){
		call3();
	}
	function call3(){
		console.trace();
	}
	call1();
</script>
<title>logメソッド：trace</title>
</head>
<body>

</body>
</html>