<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script>
		document.addEventListener('DOMContentLoaded', function(){
    		var list = document.querySelectorAll('#list .external');
    		for (var i = 0, len = list.length; i < len; i++ ){
    			console.log(list.item(i).href);
    		}
		});
	</script>
</head>

<body>
	<ul id="list"> 
		<li><a href="http://www.wings.msn.to/" class ="my">サーバサイド技術の学び舎 - WINGS</a></li>
		<li><a href="http://www.web-deli.com/" class ="my">WebDeli</a></li>
		<li><a href="http://www.buildinsider.net/web/jqueryref" class="external">jQuery逆引きリファレンス</a></li>
		<li><a href="http://www.buildinsider.net/web/angularjstips" class="external">AngularJS TIPS</a></li>
	</ul>
</body>

</html>