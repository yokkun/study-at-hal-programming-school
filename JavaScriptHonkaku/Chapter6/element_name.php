<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script>
		document.addEventListener('DOMContentLoaded', function(){
    		var current = new Date();
    		var nam = document.getElementsByName('time');
    		nam[0].value = current.toLocaleTimeString();
		});
	</script>
</head>

<body>
	<form>
		<label for="time">時刻：</label>
		<input id="time" name="time" type="text" size="10">
	</form>
</body>

</html>