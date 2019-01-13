<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title></title>
<style>
#xyz{
    width:50em;
    height:30em;
    background-color:yellow;
}
</style>
<script>
document.addEventListener('DOMContentLoaded',function(){
	document.getElementById('abc').addEventListener('click',function(){
		//alert('ボタンがクリックされました');
		document.getElementById('xyz').style.backgroundColor='Blue';
		});
});
</script>
</head>
<body>

<div id="xyz"></div>

<input type="button" id="abc" value="アラート"/>

<script type="text/javascript">
//window.alert('こんにちは、世界！');
</script>
</body>
</html>