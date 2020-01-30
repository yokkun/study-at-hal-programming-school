<script>
//thisのcallメソッドでの動作
var data = 'Global data';
var obj1 = {data: 'obj1 data'};
var obj2 = {data: 'obj2 data'};
var obj3 = {xxx: 'obj3 data'};

function hoge(){
	console.log(this.data);//ここではthisはまだ確定していない
}

hoge.call(null);
hoge.call(obj1);//連想配列としてわたる
hoge.call(obj2);
hoge.call(obj3); //undefinedとなる　中身がわからないと渡せないことを確認する例

function piyo(){
	var args = Array.prototype.slice.call(arguments);
	console.log(Array.isArray(args) ? "配列である":"配列ではない"); //? : 条件演算子
	console.log(args.join('/'));
}
piyo('山田','横山','田中');//可変長引数
</script>