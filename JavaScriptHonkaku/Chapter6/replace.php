<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script>
		document.addEventListener('DOMContentLoaded', function(){
    		var list = document.getElementById('list');
    		var pic = document.getElementById('pic');
    		var del = document.getElementById('del');
			
			list.addEventListener('click', function(e){
					var isbn = e.target.getAttribute('data-isbn');//data-属性は自由に作れるHTML属性

					if(isbn){
						var img = document.createElement('img');
						img.src = 'http://www.wings.msn.to/books/' + isbn + '/' + isbn + '.jpg';
						img.alt = e.innerHTML;
						img.height = 150;
						img.width = 108;
						if(pic.getElementsByTagName('img').length > 0){
							pic.replaceChild(img, pic.lastChild);
						}
						else
						{
							del.disabled = false;
							pic.appendChild(img);
						}
					}
				}, false
			);
				del.addEventListener('click', function(){
					pic.removeChild(pic.lastChild);//lastChildまたはfirstChildが使える
					del.disabled = true;//削除した後は削除ボタンを使えないようにする
				},false );
		}, false);
	</script>
</head>
<body>
	<ul id="list">
		<li><a href="JavaScript:void(0)" data-isbn="978-4-7981-3547-2">独習PHP 第3版</a></li>
		<li><a href="JavaScript:void(0)" data-isbn="978-4-7741-8030-4">Javaポケットリファレンス</a></li>
		<li><a href="JavaScript:void(0)" data-isbn="978-4-7741-7984-1">Swiftポケットリファレンス</a></li>
		<li><a href="JavaScript:void(0)" data-isbn="978-4-7981-4402-3">独習ASP.NET 第5版</a></li>
		<li><a href="JavaScript:void(0)" data-isbn="978-4-8222-9644-5">アプリを作ろう!Android入門</a></li>
	</ul>
	<input id="del" type="button" value="削除" disabled />
	<div id="pic"></div>
</body>
</html>