<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>属性フィルター</title>
<link type="text/css" rel="stylesheet" href="../main.css" />
<script type="text/javascript" src="../jquery-2.0.3.min.js"></script>
<script type="text/javascript">
$(function() {
	//$('a[target="_blank"]') .css('background-color', 'Green');
	//$('a[target!="_blank"]') .css('background-color' , 'Orange'); //注意：!=は_target属性を持っていない全ての要素という意味になる
	//$('a[href $=".jp/"]') .css('background-color', 'Pink'); // .jpの後に末尾に/が必要
	//$('a[href ^="http://"][target]') .css('background-color', 'Yellow'); //target属性をもち http://から始まる要素 ^は前方一致という意味
	
	$('a:not([target])') .css('background-color', 'red'); //not()の中には何でも書ける
});
</script>
</head>
<body>
<ul>
  <li><a href="http://codezine.jp/" target="other">
    CodeZine：開発者のための実装系Webマガジン</a></li>
  <li><a href="https://www.wings.msn.to/" target="_blank">
    WINGSプロジェクト - サーバサイド技術の学び舎</a></li>
  <li><a href="http://www.web-deli.com/">
    WebDeli - Spicy Tools, Delicious Sites</a></li>
</ul>
</body>
</html>