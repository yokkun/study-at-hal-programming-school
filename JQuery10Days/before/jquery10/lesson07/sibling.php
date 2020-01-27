<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>セレクター</title>
<link type="text/css" rel="stylesheet" href="../main.css" />
<script type="text/javascript" src="../jquery-2.0.3.min.js"></script>
<script type="text/javascript">
$(function() {
// ID #xmlを含めず、直後の全ての要素をピンクにする
  $('#xml ~ li').css('background-color','#fcf');
  // ID #xmlを含めず、直後の一つの要素のみ赤にする
  //$('#xml + li').css('background-color', '#f00');
});
</script>
</head>
<body>
<ul>
  <li id="html">HTML5基礎</li>
  <li id="xml">基礎XML</li>
  <li id="js">JavaScript本格入門</li>
  <li id="php">独習PHP 第2版</li>
</ul>
</body>
</html>
