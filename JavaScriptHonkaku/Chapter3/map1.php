<script>
//mapメソッドの使い道 いろんなメソッドを持った連想配列
let map1 = new Map();
map1.set("dog","ワンワン");
map1.set("cat","ニャー");
map1.set("mouse","チュー");
console.log("各プロパティ、メソッド確認用Map");
for(let[animal, cry] of map1)
{
	console.log(animal + ":", cry);
}

console.log("=== sizeプロパティ ===");
console.log("map1.size:" + map1.size);

console.log("=== getメソッド ===");	
console.log("map1.get('dog'):" + map1.get('dog'));

console.log("=== hasメソッド ===");	
console.log("map1.has('cat'):" + map1.has('cat'));//非常に高速に検索ができるメソッドhas

console.log("=== keysメソッド ===");
for(var animal of map1.keys()){
	console.log(animal);
}
console.log("=== valuesメソッド ===");
for(var cry of map1.values()){
	console.log(cry);
}
console.log("=== entriesメソッド ===");
for (var [key, value] of map1.entries()){
	console.log(key + ":" + value);
}

console.log("=== deleteメソッド ===");
map1.delete('dog');
console.log("map1.delete('dog')");
console.log("map1.size:" + map1.size);

console.log("=== clearメソッド ===");
map1.clear();
console.log("map1.clear()");
console.log("map1.size:" + map1.size);

console.log("=== mapの使い方の例（件数を調べる） ===");
let fruits = ['apple', 'orange', 'banana', 'apple', 'apple', 'banana', 
	'grape', 'banana', 'banana', 'apple', 'orange'];
console.log("以下の配列に各果物が何個存在するかを調べる");
console.log(fruits.toString());
let fruit_counter = new Map();
for (var fruit of fruits){
	if(fruit_counter.has(fruit)){
		fruit_counter.set(fruit, fruit_counter.get(fruit) + 1);
	} else {
		fruit_counter.set(fruit, 1);
	}
}
for (let [fruit, count] of fruit_counter){
	console.log(fruit + ":" + count + "個");
}

var m = new Map();
m.set({}, 'hoge');//中括弧を書くと別のアドレスに配列が作られるためsetとgetは違うアドレスをさす事になる
console.log("m.get({})" + m.get({})); //undefined 戻り値がない（null）ので出力されない

var key = {};
m.set(key,'hoge');
console.log('m.get(key):' + m.get(key));

console.log("{}==={});" + {}==={});

var assoc1 = {1:'a', 2:'b'};//別のアドレスに格納
var assoc2 = {1:'a', 2:'b'};//別のアドレスに格納
console.log("assoc1 === assoc2 :"+ assoc1 === assoc2);
console.log("assoc1 == assoc2" + assoc1 == assoc2);

var m2 = new Map();
key = {1:'a', 2:'b'};
console.log("m2.set(key,'hoge'):" + m2.set(key,'hoge'));
console.log("m2.get(key):" + m2.get(key));
</script>