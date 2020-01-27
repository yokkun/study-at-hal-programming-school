<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<link href="search.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../jquery-2.0.3.min.js"></script>
<script type="text/javascript">
$(function(){
	$('#books') .change(function(){
		location.href = 'http://www.wings.msn.to/index.php/-/A-03/' + $(this).val();
		});
});
</script>
<title>イベント</title>
</head>
<body>
<select id="books">
  <option value="" selected>---＜書籍を選択して下さい＞---</option>
  <option value="978-4-8399-3793-5">HTML5基礎</option>
  <option value="978-4-8443-2879-7">基礎PHP</option>
  <option value="978-4-7741-4466-5">JavaScript本格入門</option>
  <option value="978-4-8443-2865-0">Catalyst完全入門</option>
  <option value="978-4-7981-2631-9">10日でおぼえるPHP入門教室</option>
</select>
</body>
</html>