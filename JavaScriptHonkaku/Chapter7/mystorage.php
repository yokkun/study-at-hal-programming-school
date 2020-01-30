<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css" />
<script type="text/javascript">
	var MyStorage = function(app){
		this.app = app;
		this.storage = localStorage;
		this.data = JSON.parse(this.storage[this.app] || '{}');
	};
	MyStorage.prototype = {
		getItem: function(key){
			return this.data[key];
		},
		setItem: function(key,value){
			this.data[key] = value;
		},
		save: function(){
			this.strage[this.app] = JSON.strigify(this.data);
		}
	};
	
</script>
<title>ストレージにデータを保存</title>
</head>
<body>
	<div id="main">
		<p>Wingsプロジェクト</p>
		<img src="http://wings.msn.to/image/wings.jpg">
	</div>
</body>
</html>