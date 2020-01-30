<script>
//サブマッチパターンに合致する電話番号の正規表現
var p = /^(\d{2,5})-(\d{2,5})-(\d{4})$/;
var tel = "092-999-9876";
var result = tel.match(p);

if(result){
	console.log("電話番号：" + result[0]); //全体は配列の0番目に格納
	console.log("市外局番：" + result[1]);
	console.log("市内局番：" + result[2]);
	console.log("加入者番号：" + result[3]);
}
var p1 = /\d{3}-\d{4}/;//gオプション無しだと電話番号を拾ってしまう
var s = "私の家の固定の電話番号は092-888-9999で、郵便番号は812-0013です。"
var result = s.match(p1);
if (result) {
	for (var i=0; i < result.length; i++){
	console.log(result [i]);
	}
}
//var p=/^[0-9]{1,}/g; //
var p= /^\d+/gm;
var str = "101匹ワンチャン。\n7人の小人";
var result = str.match(p);
for (var i=0, len=result.length; i<len; i++){
	console.log(result[i]);
}
</script>