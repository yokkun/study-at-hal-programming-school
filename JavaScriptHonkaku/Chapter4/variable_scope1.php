<script>
var scope = "Global Variable";
//variable hoisting（変数の巻き上げ）
 /*以下のようなコードを書くと変数の巻き上げが行われて実際には下記のように動作する
 function getValue(){
	console.log(scope);
	var scope = "Local Variable";
	return scope;
}
*/
function getValue(){
	var scope;
	console.log(scope);
	scope = "Local Variable";
	return scope;
}
console.log(getValue());//ローカル変数内部
console.log(scope);//グローバル変数
</script>