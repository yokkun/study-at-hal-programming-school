<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>検索</title>
<link type="text/css" rel="stylesheet" href="../main.css" />
<script type="text/javascript" src="../jquery-2.0.3.min.js"></script>
<script type="text/javascript">
	$(function(){
		$('#me')
			.css('font-weight','bold')
			.prev()
			.css('background-color','Pink')
			.end()
			.prevAll()
			.css('color','Blue')
			.end()
			.next()
			.css('background-color','Yellow')
			.end()
			.nextAll()
			.css('color','Red')
			.end()
			.siblings()
			.css('font-style','italic')
			.end()
			.parent()
			.css('border','solid 1px Red')
			.end()
			.children()
			.css('font-size','x-small');
	});
</script>
</head>
<body>
<div id="family">
  じいじ
  <div>
    パパ
    <div>おにいちゃん</div>
    <div>おねえちゃん</div>
    <div id="me">わたし
      <div>ポチ
        <div>ミケ</div>
      </div>
    </div>
    <div>弟</div>
    <div>妹</div>
  </div>
</div>
</body>
</html>
