<html>
	<head>
		<title>不特定の属性を取得する</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script>
        //6.3.2
        document.addEventListener('DOMContentLoaded',function(){
        	var logo = document.getElementById('logo');
        	var attrs = logo.attributes;
        	for (var i=0, len = attrs.length; i < len; i++){
        		var attr = attrs.item(i);
        		console.log(attr.name + ':' + attr.value);
        	}
        }, false);
        </script>
	</head>
	<body>
		<img id="logo" src="http://www.wings.msn.to/image/wings.jpg" height="67" width="215" border="0" alt="WINGS (Www Integrated Giude on Server Architecture)" />
	</body>
</html>