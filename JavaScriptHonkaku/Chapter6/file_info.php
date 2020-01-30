<html>
	<head>
		<title>アップロードするファイルの情報を取得</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script>
        //6.3.3 innerHTML / textContent
        window.addEventListener('DOMContentLoaded',function(){
        	document.getElementById('file').addEventListener('change',function(e){
            	var inputs = document.getElementById('file').files;
            	for (var i=0, len = inputs.length; i<len; i++){
            		var input = inputs[i];
    				console.log('ファイル名' + input.name);
    				console.log('種類' + input.type);
    				console.log('サイズ' + input.size / 1024 + 'KB');
    				console.log('最終更新日' + input.lastModifiedDate);
                }
            }, true);
        });
        </script>
	</head>
	<body>
		<form>
				<label for="file">ファイル</label>
				<input id="file" name="file" type="file" multiple />
		</form>
	</body>
</html>