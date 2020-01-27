<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>jQueryの基本</title>
<link type="text/css" rel="stylesheet" href="../main.css" />
<script type="text/javascript" src="../jquery-2.0.3.min.js"></script>
<script type="text/javascript">
// chapter6
//	JQuery(document).ready(function(){
////DOM Treeが出来上がった後に実行するコード	
//	})
$(function(){
	$('#list .jq').css('background-color', '#ccf');
	$('h2').css('color','red');
}); //p75

//document.addEventListener('DOMContentLoaded', function(){		});
</script>
</head>
<body>
<h2>入門書特集</h2>
<ul id="list">
  <li class="jq">jQuery実践サンプル集</li>
  <li class="js">JavaScript本格入門</li>
  <li class="jq">10日でおぼえるjQuery</li>
</ul>
</body>
</html>
