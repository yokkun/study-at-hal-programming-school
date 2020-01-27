<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>イベント</title>
<script type="text/javascript" src="../jquery-2.0.3.min.js"></script>
<script type="text/javascript">
	$(function(){
		$('#btn').one('click',function(){
			//イベント処理
			if($('#answer').val() === 'on'){
				window.alert('正解！')
			} else {
				window.alert('残念、不正解...');
			}
		});
	})
</script>

</head>
<body>
<form id="fm">
  イベント処理を設定する汎用的な命令は？<br />
  <input type="text" id="answer" />
  <input type="button" id="btn" value="答える" />
</form>
</body>
</html>
