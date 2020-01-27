<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>イベント</title>
<script type="text/javascript" src="../jquery-2.0.3.min.js"></script>
<script type="text/javascript">
$(function(){
	var flag = false;
	var width = $('img').width(); //img要素のwidthを取得
	var height = $('img').height();
	$('img')
		.mousedown(function(){
			flag = true;
			return false;	//ブラウザ側ののドラッグ挙動をキャンセルする
		})
		.mouseup(function(){
			flag = false;
		})
		.mousemove(function(e){
			if(flag){
				$(this).css({
					top: e.pageY - height/2, //画像ファイルの1/2くらいを取得、掴める位置に移動している
					left: e.pageX - width/2
				});
			}
		});
});
</script>
</head>
<body>
<img src="../images/wings.jpg" style="position:absolute;">
</body>
</html>
