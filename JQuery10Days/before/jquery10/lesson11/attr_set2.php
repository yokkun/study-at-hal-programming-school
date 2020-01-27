<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>属性</title>
<script type="text/javascript" src="../jquery-2.0.3.min.js"></script>
<script type="text/javascript">
	$(function(){ //オブジェクトリテラル=javascriptの連想配列で属性を追加する
		$('#html') .attr({
			src: '../images/html5_logo.jpg',
			alt: 'ロゴ',
			width: '80',
			height: '30',
			title: 'ロゴ画像',
		});
	});
</script>
</head>
<body>
<p><img id="html" /></p>
</body>
</html>