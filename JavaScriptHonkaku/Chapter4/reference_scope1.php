<script>
//基本型の値渡し
console.log("JavaScriptには参照渡しはない。値渡しだけ。");
console.log("=== 基本型の値渡し ===");
var value = 10;
function decrementValue(value){
	value --;
	return value;
}
console.log(decrementValue(value));
console.log(value);

//参照型の値渡し
console.log("=== 参照型の値渡し ===");
var array = [1,2,4,8,16];//配列のキーがスタックメモリにアドレスとして、要素のアドレスがヒープメモリに格納される
console.log(array);//

function deleteElement(array){//ここでスタックメモリに新たなキーのアドレスが入り参照先のアドレスがバリューとして格納される
	array.pop();//末尾の要素を削除
	return array;
}
console.log(deleteElement(array));//
console.log(array);

console.log("===  ===");
var array2 = [1,3,5,7,9];
console.log(array2);

//以下の方法ではうまく加算されない。var numを宣言した時点で、numはスタックメモリにアドレスができ、そこで加算されてしまうから。
/*
function add10(array2){
	for(var num of array2){//ここでvar宣言をするとスタックメモリ上で計算されるだけでアドレスの参照渡しができない。C#ではエラーになる
		num += 10;
	}
	return array2;//不要だがreturnで確認してみる
}
*/
function add10(array2){
	for (var i=0; i < array2.length; i++){ //length関数は要素数を求める関数。配列のindex（キー）を指定して回す
		array2[i] += 10;
	}
	return array2;
}
console.log(add10(array2));
console.log(array2);

</script>