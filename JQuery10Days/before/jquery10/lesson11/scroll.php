﻿<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>属性</title>
<link type="text/css" rel="stylesheet" href="../main.css" />
<script type="text/javascript" src="../jquery-2.0.3.min.js"></script>
<script type="text/javascript">
$(function() {
  $('#jq').addClass('desc');
  var _p = $(window);
  _p.scrollTop(100);
  _p.scrollLeft(150);
  window.alert(_p.scrollTop() + 'x' + _p.scrollLeft());
});
</script>
</head>
<body>
<h2>赤ちゃんの歳時記</h2>
<div class="desc">
  <p>「お七夜」は、生後7日目に行う赤ちゃんの健康をお祝いする行事です。赤ちゃんの名前をみんなに知ってもらうため命名書を準備します。
  </p>
  <p>「お宮参り」は、生後1か月くらいの大安の日に土地の氏神様に赤ちゃんの誕生を報告しに行く行事です。健康祈願だけではなく、お祓いをしてもらう人もいます。
  </p>
  <p>「お食い初め」は、生後100日目くらいに行う儀式です。塗りの器で祝い膳を用意して、親族の中で一番高齢な方の膝の上で赤ちゃんにご飯を食べさせるマネをします。
  </p>
</div>
</body>
</html>