<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>イベント</title>
<script type="text/javascript" src="../jquery-2.0.3.min.js"></script>
<script type="text/javascript">
$(function() {
	var onmouseenter = function(){
		$(this).attr('src','../images/open_home.gif')
		};
	var onmouseleave = function(){
		$(this).attr('src','../images/home.gif')
		};
	$('#home')
	.mouseenter(onmouseenter)
	.mouseleave(onmouseleave);
});
</script>
</head>
<body>
<p><img id="home" src="../images/home.gif"
  title="トップページへ" /></p>
</p>
</body>
</html>
