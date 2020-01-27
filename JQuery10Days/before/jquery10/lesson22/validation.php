<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>イベント</title>
<link type="text/css" rel="stylesheet" href="validation.css" />
<script type="text/javascript" src="../jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="validation.js" ></script>
</head>
<body>
	<ul id="error_summary"></ul>
<form id="fm">
<div class="field">
  <label for="isbn">ISBNコード</label>：
	<input type="text" id="isbn" size="20" class="valid required regexp" 
	data-pattern="978-4-[0-9]{2,6}-[0-9X]{1}" />
</div>
<div class="field">
  <label for="title">書名</label>：
  <input type="text" id="title" size="30" class="valid length" 
	data-length="30" />
</div>
<div class="field">
  <label for="price">価格</label>：
	<input type="text" id="price" size="5" class="valid range" 
	data-max="10000" data-min="100" />
</div>
<div class="field">
  <label for="publish">出版社</label>：
	<input type="text" id="publish" class="valid inarray" 
	data-option="翔泳社 技術評論社 秀和システム" />
</div>
<div class="field">
  <input type="submit" value="送信" />
</div>
</form>
</body>
</html>