<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>属性</title>
<script type="text/javascript" src="../jquery-2.0.3.min.js"></script>
<script type="text/javascript">
$(function() {
	$('img.new') .height(45);//heightの値を設定 img.new=class属性がnewという意味 xx img .new
	$('img.new') .width(120);
	window.alert($('img.new') .height() + 'x' + $('img.new') .width());//()にすると値を最初の要素だけ取得するメソッド
});
</script>
</head>
<body>
<p><img src="../images/html5_logo.jpg" class="new" /></p>
<p><img src="../images/jquery10_logo.jpg" /></p>
<p><img src="../images/selfjsp_logo.jpg" class="new" /></p>
</body>
</html>