<script>
//var [numbers]

//通常配列を回す場合
/*
 * 
for(var v of numbers){
	console.log(v);
}
*/
//連想配列を回す場合
// PHPの場合
// $fruits = ['apple' => 100, 'orange => 200]
// javascriptの場合、for ( in )命令で連想配列のkeyを取り出す
var fruits = {apple: 150, orange: 100, banana: 120};
for (var fruitname in fruits){
	console.log(fruitname + ':' + fruits[fruitname]);
}


</script>