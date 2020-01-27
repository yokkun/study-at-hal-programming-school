<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>要素の追加</title>
<link type="text/css" rel="stylesheet" href="../main.css" />
<script type="text/javascript" src="../jquery-2.0.3.min.js"></script>
<script type="text/javascript">
	$(function(){
		$('<li>三輪車</li>').prependTo('#car');
		$('<li>オートバイ</li>').appendTo('#car');
		$('<li>ベビーカー</li>').insertBefore('#car');
		$('<li>ベビーカー自動車</li>').insertAfter('#car');
		});
</script>
</head>
<body>
<ul id="car">
  <li>自転車</li>
</ul>
</body>
</html>