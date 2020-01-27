<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<link type="text/css" rel="stylesheet" href="../main.css" />
<script type="text/javascript" src="../jquery-2.0.3.min.js"></script>
<script type="text/javascript">
$(function(){
	$(window).scroll(function(){
		$('#box').css({
			top: $(this) .scrollTop() + 20,
			left: $(this) .scrollLeft + 20
 			});
		});
});
</script>

<title>イベント</title>
</head>
<body>
<ul id="box">
  <li><a href="top.html">トップページ</a></li>
  <li><a href="faq.html">FAQコーナー</a></li>
  <li><a href="contact.html">お問い合わせ</a></li>
</ul>
<div id="main">
  <p>「お七夜」は、生後7日目に行う赤ちゃんの健康をお祝いする行事です。赤ちゃんの名前をみんなに知ってもらうため命名書を準備します。
  </p>
  <p>「お宮参り」は、生後1か月くらいの大安の日に土地の氏神様に赤ちゃんの誕生を報告しに行く行事です。健康祈願だけではなく、お祓いをしてもらう人もいます。
  </p>
  <p>「お食い初め」は、生後100日目くらいに行う儀式です。塗りの器で祝い膳を用意して、親族の中で一番高齢な方の膝の上で赤ちゃんにご飯を食べさせるマネをします。
  </p>
  <p>「初節句」は、生後初めて迎える節句です。男の子は、5月5日の端午の節句です。女の子は、3月3日の桃の節句です。
  </p>
</div>
</body>
</html>