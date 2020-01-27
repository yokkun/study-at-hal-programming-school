<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>テキスト</title>
<link type="text/css" rel="stylesheet" href="../main.css" />
<script type="text/javascript" src="../jquery-2.0.3.min.js"></script>
<script type="text/javascript">
$(function() {
  $('input[type="text"]').val('10日でおぼえるPHP'); //10日でおぼえるjQuery入門教室
  $('select').val('gh');
  $('textarea').val('PHPを初めて学ぶ方のための入門書。きっちりと基本が身につきます。');
  $('input[type="submit"]').val('送信');
});
</script>
</head>
<body>
<form>
  <label for="title">タイトル：</label><br />
  <input type="text" id="title" name="title" size="50" /><br />
  <label for="publish">出版社：</label><br />
  <select id="publish" name="publish">
    <option value="se" >翔泳社</option>
    <option value="gh">技術評論社</option>
    <option value="sw">秀和システム</option>
  </select><br />
  <label for="memo">概要：</label><br />
  <textarea id="memo" name="memo" cols="40" rows="3"></textarea><br />
  <input type="submit" id="send" />
</form>
</body>
</html>