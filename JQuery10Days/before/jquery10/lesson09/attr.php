﻿<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>属性フィルター</title>
<link type="text/css" rel="stylesheet" href="../main.css" />
<script type="text/javascript" src="../jquery-2.0.3.min.js"></script>
<script type="text/javascript">
	$(function(){
		$(':header') .css('background-color', 'Red');
		$('a[target]') .css('background-color', 'Yellow');
	});
</script>
</head>
<body>
<h2 id="caption">参考サイト</h2>
<ul>
  <li><a href="http://codezine.jp/" target="other">
    CodeZine：開発者のための実装系Webマガジン</a></li>
  <li><a href="http://www.wings.msn.to/">
    WINGSプロジェクト - サーバサイド技術の学び舎</a></li>
  <li><a href="http://www.web-deli.com/">
    WebDeli - Spicy Tools, Delicious Sites</a></li>
</ul>
</body>
</html>