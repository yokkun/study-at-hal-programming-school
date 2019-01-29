<html>
	<head>
		<title>ファイルの内容を取得</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script>
        //6.3.3 innerHTML / textContent
        window.addEventListener('DOMContentLoaded',function(){
        	document.getElementById('file').addEventListener('change',function(e){
            	var input = document.getElementById('file').files[0];
            	var reader = new FileReader();
                reader.addEventListener('load', function(){
					document.getElementById("result").textContent = reader.result;
                }, true);
            	reader.readAsText(input, 'UTF-8');
            }, true);
        });
        </script>
	</head>
	<body>
		<form>
				<label for="file">ファイル</label>
				<input id="file" type="file" />
		</form>
		<hr />
		<pre id="result"></pre>
	</body>
</html>