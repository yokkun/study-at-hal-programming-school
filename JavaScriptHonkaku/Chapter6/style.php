<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script>
		document.addEventListener('DOMContentLoaded', function(){
    		var elem = document.getElementById('elem');
    		elem.addEventListener('mouseover',function(){
				this.style.backgroundColor = 'Yellow';
        	}, false);
        	elem.addEventListener('mouseout',function(){
				this.style.backgroundColor = '';
            })
		}, false);
	</script>
</head>
<body>
	<div id="elem">
	マウスポインタを載せると色が変わります。	
	</div>
</body>
</html>