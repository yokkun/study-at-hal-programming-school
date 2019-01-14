<html>
	<head>
		<title>イベントドリブンモデル3</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script>
		//イベント名は全て小文字で記述。プロパティとして設定するのは関数オブジェクト。関数呼び出しは不可
			window.onload = function(){ //ページロード時に実行されるイベントハンドラー（全て読み込み終わったら）を登録
				document.getElementById('btn').onclick = function(){ //ボタン（btn）クリック時にform要素に対して実行されるイベントハンドラーを登録
					window.alert('ボタンがクリックされました。');//一つしかイベントハンドラーを紐付けできない
				}
			};
// 			//例2
// 			function init(){ //ページロード時に実行されるイベントハンドラー（全て読み込み終わったら）を登録
// 				document.getElementById('btn').onclick = function(){ //ボタン（btn）クリック時にform要素に対して実行されるイベントハンドラーを登録
// 					window.alert('ボタンがクリックされた。');
// 				}
// 			};
// 			window.onload = init;//関数定義。window.onload = init();のような関数呼び出しは不可
		</script>
	</head>
	<body>
		<input id="btn" type="button" value="ダイアログ表示" />
	</body>