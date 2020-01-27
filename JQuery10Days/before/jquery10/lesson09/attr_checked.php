﻿<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>属性フィルター</title>
<script type="text/javascript" src="../jquery-2.0.3.min.js"></script>
<script type="text/javascript">
$(function() {
  $('label:has(:checked)').css('background-color','Lime');
});
</script>
</head>
<body>
<form>
  <p>あなた自身について教えてください。</p>
  <p>性別：
  <label><input type="radio" name="gender" value="m" />
    男性</label>
  <label><input type="radio" name="gender" value="f" checked="checked" />
    女性</label>
  </p>
</form>
</body>
</html>