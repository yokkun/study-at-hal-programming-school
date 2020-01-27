<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>フィルター</title>
<link type="text/css" rel="stylesheet" href="../main.css" />
<script type="text/javascript" src="../jquery-2.0.3.min.js"></script>
<script type="text/javascript">
$(function() {
  $('#books > li:nth-child(3n)').css('background-color', 'Yellow');
  //$('#books > li:nth-child(3n+1)').css('background-color', 'Yellow');
  // $('#books > li:nth-child(odd)').css('background-color', 'Yellow');
  // $('#books > li:nth-child(4)').css('background-color', 'Yellow');
});
</script>
</head>
<body>
<ul id="books">
  <li id="html">HTML5基礎</li>
  <li id="xml">基礎XML</li>
  <li id="js">JavaScript本格入門</li>
  <li id="php">独習PHP 第2版</li>
  <li id="html_css">HTML／CSS最新完全ガイド</li>
  <li id="xml_smp">XML実践テクニック集</li>
  <li id="js_master">JavaScriptマスター</li>
  <li id="php_app">上級PHPアプリケーション開発</li>
</ul>
</body>
</html>
