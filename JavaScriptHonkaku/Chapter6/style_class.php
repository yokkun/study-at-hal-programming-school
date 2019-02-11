<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css" />
	<script>
		document.addEventListener('DOMContentLoaded', function(){
    		var elem = document.getElementById('elem');
    		elem.addEventListener('mouseover',function(){
				this.className = 'highlight';
        	}, false);
        	elem.addEventListener('mouseout',function(){
				this.className = '';
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
