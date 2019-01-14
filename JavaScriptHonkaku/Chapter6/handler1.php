<html>
	<head>
		<title>イベントドリブンモデル1</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script>
			function btn_click(){
				window.alert('ボタンがクリックされました。');
			}
		</script>
	</head>
	<body>
		<input type="button" value="ダイアログ表示" onclick="btn_click()" />
		<input type="button" value="ダイアログ表示" onclick="window.alert('ボタンがクリックされました。');" />
	</body>
</html>