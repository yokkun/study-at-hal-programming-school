<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>フィルター</title>
<link type="text/css" rel="stylesheet" href="../main.css" />
<script type="text/javascript" src="../jquery-2.0.3.min.js"></script>
<script type="text/javascript">
$(function() {
  $('#entry > li:eq(2)').css('background-color', 'Yellow');
});
</script>
</head>
<body>
<ul id="entry">
  <li id="html">HTML5基礎</li>
  <li id="xml">基礎XML</li>
  <li id="js">JavaScript本格入門</li>
  <li id="php">独習PHP 第2版</li>
</ul>
</body>
</html>
