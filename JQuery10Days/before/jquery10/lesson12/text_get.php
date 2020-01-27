<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>テキスト</title>
<link type="text/css" rel="stylesheet" href="../main.css" />
<script type="text/javascript" src="../jquery-2.0.3.min.js"></script>
<script type="text/javascript">
$(function() {
	//text / html 取得メソッド
  window.alert($('li') .text()); //この場合はli要素の中の文字だけを全て取得する
  window.alert($('li') .html()); //先頭のli要素のhtmlタグ全てを取得する
});
</script>
</head>
<body>
<h2>参考サイト</h2>
<ul>
  <li><a href="http://codezine.jp/">CodeZine</a></li>
  <li><a href="http://www.wings.msn.to/">WINGS</a></li>
  <li><a href="http://www.web-deli.com/">WebDeli</a></li>
</ul>
</body>
</html>