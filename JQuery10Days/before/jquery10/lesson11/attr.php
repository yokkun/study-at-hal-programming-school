<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>属性</title>
<script type="text/javascript" src="../jquery-2.0.3.min.js"></script>
<script type="text/javascript">
	$(function(){
		$('img:not([title])') .attr('title','ロゴ画像');	
	});
</script>
</head>
<body>
<p><img src="../images/html5_logo.jpg" title="HTML5基礎" /></p>
<p><img src="../images/jquery10_logo.jpg" /></p>
<p><img src="../images/selfjsp_logo.jpg" /></p>
</body>
</html>