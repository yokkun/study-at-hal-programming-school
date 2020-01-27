<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>イベント</title>
<script type="text/javascript" src="../jquery-2.0.3.min.js"></script>
<script type="text/javascript">
	$(function(){
		$('#fm').on('click', '.incre', function(){
			$('<input type="button" class="incre" value="追加" />').appendTo('#fm');
		})
	})
</script>
</head>
<body>
<form id="fm">
  <input type="button" class="incre" value="追加" />
</form>
</body>
</html>
