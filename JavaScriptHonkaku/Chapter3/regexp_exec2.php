<script>
var p =/http(s)?:\/\/([\w-]+\.)+[\w-]+(\/[\w-.\/?%&=]*)?/gi;
var str = 'サポートサイトはhttp://www.wings.msn.to/です。';
str += 'サンプル紹介サイトHTTP://www.web-deli.com/もよろしく！';

//execメソッドを使った例
while ((result = p.exec(str)) !==null){
	console.log(result[0]);
	console.log(result[1]);
	console.log(result[2]);
	console.log(result[3]);
}
</script>