<script>
//javascriptにはnamespace（名前空間）の概念がない。namespaceがないと名前の衝突が起きる可能性がある
//擬似的に実現する例（このコードを繰り返して実現できる）

var Wings = Wings || {};//空のオブジェクトを作り名前空間のようなものを生成
//Wingsが未定義の場合のみ新たな名前空間を生成
Wings.Member = function (firstName, lastName){
	this.firstName = firstName;//配下に置きたいクラス（コンストラクタ）を定義
	this.lastName = lastName;
};
Wings.Member.prototype = {
	getName: function(){
		return this.lastName + ' ' + this.firstName;
	}
};

var mem = new Wings.Member('仁寛','佐野');//完全修飾名でインスタンス化して呼び出し
console.log(mem.getName());


//階層を持った名前空間を（上記のコードを繰り返さずに）関数を作って実現する
function namespace(ns){
	var names = ns.split('.');//名前空間を.で区切って分割
	var parent = window;

	//名前空間を上位階層のparent配下に順に登録
	for(var i = 0, len = names.length; i<len; i++){
		parent[names[i]] = parent[names[i]] || {};
		parent = parent[names[i]];
	}
	return parent;
}

//実行例：Wings.Gihyo.Js.MyApp名前空間の登録
var my = namespace('Wings.Gihyo.Js.MyApp');
my.Person = function(){};
var p = new my.Person();
console.log(p instanceof Wings.Gihyo.Js.MyApp.Person);
</script>