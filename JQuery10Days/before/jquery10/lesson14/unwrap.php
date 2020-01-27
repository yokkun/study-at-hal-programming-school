<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>要素の追加</title>
<link type="text/css" rel="stylesheet" href="../main.css" />
<script type="text/javascript" src="../jquery-2.0.3.min.js"></script>
<script type="text/javascript">
	$(function(){
		$('ul > p').wrap('<li style="border: solid 2px Red"></li>');
		$('ul p').unwrap();
	});
</script>
</head>
<body>
<ul>
  <p>JavaScript本格入門</p>
  <p>10日でおぼえるjQuery入門教室</p>
  <p>HTML5基礎</p>
</ul>
<input type="button" id="wrap" value="wrap"></input>
<input type="button" id="unwrap" value="unwrap"></input>

</body>
</html>