<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>フィルター</title>
<link type="text/css" rel="stylesheet" href="../main.css" />
<script type="text/javascript" src="../jquery-2.0.3.min.js"></script>
<script type="text/javascript">
	$(function(){
		$('ul > li:first').css('background-color','Lime'); //最初の要素を取り出す
		$('ul > li:last').css('background-color','Yellow'); //最後の要素を取り出す
		$('ul > li:first > ul > li:first').css('background-color','Red'); //最初の要素のul要素の中の最初の要素を取り出す
		$('ul > li:even').css('color','Orange');//最初の要素を0番目としてカウントする
		$('ul > li:odd').css('color','Green');
		
		let pos = 0;
		$('#entry > li:lt(' + pos + ')').css('background-color','Lime');
		$('#entry > li:gt(' + pos + ')').css('background-color','Yellow');
		$('#down').click(function() {
			pos = (pos + 1) % 4;
			$('#entry > li:lt(' + pos + ')').css('background-color', 'Yellow');
			$('#entry > li:eq(' + pos + ')').css('background-color', 'White');
			$('#entry > li:gt(' + pos + ')').css('background-color', 'Lime');
		});
		$('#entry > li:eq(2)').css('background-color','Yellow');
		
 		});
</script>
</head>
<body>
<button id="down">↓</button>
<ul id="entry">
  <li id="html">HTML5基礎
  	<ul>
  		<li>タイトル</li>
  		<li>小見出し</li>
  	</ul>
  </li>
  <li id="xml">基礎XML</li>
  <li id="js">JavaScript本格入門</li>
  <li id="php">独習PHP 第2版</li>
</ul>
<ul id="advanced">
  <li id="html_css">HTML／CSS最新完全ガイド</li>
  <li id="xml_smp">XML実践テクニック集</li>
  <li id="js_master">JavaScriptマスター</li>
  <li id="php_app">上級PHPアプリケーション開発</li>
</ul>
</body>
</html>