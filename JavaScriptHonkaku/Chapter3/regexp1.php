<script>
//正規表現
//macでは¥ではなく\（バックスラッシュ）

// gオプション=最初に一致した文字列全体とサブマッチ文字列を検索して配列に格納する
// iオプション=大文字小文字を無視
var p =  /http(s)?:\/\/([\w-]+\.)+[\w-]+(\/[\w-.\/?%&=]*)?/gi;
var str = 'サポートサイトはhttp://www.wings.msn.to/です。';
str += 'サンプル紹介サイトHTTP://www.web-deli.com/もよろしく！';
var result = str.match(p);
for (var i =0, len = result.length; i < len; i++){
	console.log(result[i]);
}

</script>