<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>イベント</title>
<script type="text/javascript" src="../jquery-2.0.3.min.js"></script>
<script type="text/javascript">
$(function() {
	  $('#home')
	  	.mouseenter(function(){
		  $(this).attr('src','../images/open_home.gif');
		})
		.mouseleave(function(){
			$(this).attr('src','../images/home.gif');
		});
	});
</script>
</head>
<body>
<p><img id="home" src="../images/home.gif"
  title="トップページへ" /></p>
</body>
</html>
