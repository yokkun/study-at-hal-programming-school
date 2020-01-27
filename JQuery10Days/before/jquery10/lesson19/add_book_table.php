<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>書籍データテーブル</title>
<script type="text/javascript" src="../jquery-2.0.3.min.js"></scrpit>
<script type="text/javascript">
	$(function(){
		$('#booktable').on('click','.insert',function(){
			$(this).parent().parent()
				.after($('<tr></tr>'){ //jqueryオブジェクトを作成
					.append($('<td></td>').text($('#title').val()))
					.append($('<td></td>').text($('#author').val()))
					.append($('<td></td>').text($('#price').val()))
					.append($('<td></td>').text($('#unit').val()))
					.append($('<td></td>').text(parseInt($(#price).val() * parseInt($($unit).val()))))
				})
		})
	})
</script>
</head>
<body>
<div id="title">タイトル：<input type="text"></div>
<div id="author">著者名：<input type="text"></div>
<div id="price">単価：<input type="text"></div>
<div id="unit">数量：<input type="text"></div>

<table id="booktable" border="1">
<tr><th>タイトル</th><th>著者名</th><th>単価</th><th>数量</th><th>小計</th><th><input type="button" class="insert" value="追加"></th></tr>
<tr></tr>
</table>


</body>
</html>