<html>
	<head>
		<title>イベントドリブンモデル4</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script>
			document.addEventListener('DOMContentLoaded',function(){
				document.getElementById('btn').addEventListener('click',function(){
					window.alert('ボタンがクリックされました。');
				}, false);
				document.getElementById('btn').addEventListener('click',function(){ //何個でもイベントハンドラーを追加できる。解除もできる
					let now = new Date();
					console.log(now.toLocaleString() + '：ボタンがクリックされました');
				}, false);
			}, false);
			
// 			//比較
// 			window.onload = function(){ //ページロード時に実行されるイベントハンドラー（全て読み込み終わったら）を登録
// 				document.getElementById('btn').onclick = function(){ //ボタン（btn）クリック時にform要素に対して実行されるイベントハンドラーを登録
// 					window.alert('ボタンがクリックされました。');//一つしかイベントハンドラーを紐付けできない
// 				}
// 			};
			
		</script>
	</head>
	<body>
		<input id="btn" type="button" value="ダイアログ表示" />
	</body>