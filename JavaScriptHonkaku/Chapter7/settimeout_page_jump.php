<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css" />
	<script type="text/javascript">
		document.addEventListener('DOMContentLoaded',function(){
			let counter = 10;
			let countdownTimer = window.setInterval(
				function(){
					document.getElementById('counter').textContent = counter--;
				}
			, 1000)
			
			let setRedirectTime = window.setTimeout(
				function(){
					clearInterval(countdownTimer);
					location.href="http://www.wings.msn.to";
				}
			, 10999)
		});
	</script>
	<title>このサイトは引っ越しました</title>
</head>
<body>
		<p>このサイトは引っ越しました。10秒後に<a href="http://www.wings.msn.to">http://www.wings.msn.to</a>へ移動します。</p>
		<div id="counter"></div>
</body>
</html>