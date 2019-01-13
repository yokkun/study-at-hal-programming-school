<script>
//isArrayメソッドの使い方
console.log("=== isArrayメソッド ===");
let array01 = ['a','b','c','d','e'];
let str01 = "abc";
console.log("array01:" + array01.toString());
console.log("Array.isArray(array01) = " + Array.isArray(array01));
console.log("str01:" + str01);
console.log("Array.isArray(str01) = " + Array.isArray(str01));

console.log("=== indexOfメソッド ===");
let array02 = ['a','b','c','d','e','a','b','c','d','e'];
console.log("以下の配列の先頭から検索し、dが先頭（index）から何番目に存在するか調べる")
console.log("array02:" + array01.toString());
console.log("array02.indexOf('d') ->  " +array02.indexOf('d'));
console.log("===lastIndexOfメソッド===");
console.log("以下の配列の末尾から検索し、dが先頭（index）から何番目に存在するか調べる");
console.log("array02:" + array02.toString());
console.log("array02.lastIndexOf('d') -> " + array02.lastIndexOf('d'));

//concatメソッド（連結）
console.log("=== concatメソッド（非破壊的） ===");
let array03 = [0,1,2,3,4];
let array04 = [3,4,5,6,7];
console.log("連結対象の配列(array03):" + array03.toString());
console.log("連結対象の配列(array04):" + array04.toString());
let array05 = array03.concat(array04);
console.log("連結後の配列(array05):" + array05.toString());
console.log("元の2つの配列には影響を与えない");
console.log("連結後の配列(array03):" + array03.toString());
console.log("連結後の配列(array04):" + array04.toString());

//join（配列を結合して文字列に変換）
console.log("=== joinメソッド（非破壊的） ===");
console.log("=== 配列から指定したdelimiterで文字列へ変換 ===");
let array06 = [2018, 9, 3];
console.log("[2018,9,3]を'-'で結合し文字列へ変換");
let str03 = '-';
let str04 = array06.join(str03);
console.log(str04);

//slice（最初+1番目から〜番目の要素の抜き出し。0番目からカウントする。ただしendの位置を含まない）
console.log("=== sliceメソッド（非破壊的） ===");
let array07 = ['a','b','c','d','e','f','g','h','i','j'];
console.log("array07:" + array07.toString());
let array08 = array07.slice(3,7); //7（end）は含まない
console.log("array03.slice(3,7) -> " + array08.toString());

//splice
console.log("=== spliceメソッド（破壊的）===");
console.log("--- 削除機能 ---");
let array09 = ['a','b','c','d','e','f','g','h','i','j'];
console.log("削除前：" + array09.toString());
console.log("削除 splice(3,5) -> 3番目から5個削除");//3番目は0からカウントして3番目
let array10 = array09.splice(3,5);
console.log("削除された要素：" + array10.toString());
console.log("削除後残った要素：" + array09.toString());

console.log("--- 置換機能 ---");
let array11 = ['a','b','c','d','e','f','g','h','i','j'];
console.log("置換前：" + array11.toString());
console.log("置換 splice(3,2, 'x','y','z') -> 3番目から2個削除し、そこに3個要素を挿入");//3番目は0からカウントして3番目
let array12 = array11.splice(3,2, 'x', 'y', 'z');
console.log("削除された要素：" + array12.toString());
console.log("置換後の要素：" + array11.toString());

console.log("--- 挿入機能 ---");
let array13 = ['a','b','c','d','e','f','g','h','i','j'];
console.log("挿入前：" + array13.toString());
console.log("挿入 splice(3,0, 'x','y','z') -> 3番目から0個削除し（=削除しない）、そこに3個要素を挿入");//3番目は0からカウントして3番目
let array14 = array13.splice(3,0, 'x', 'y', 'z');
console.log("削除された要素：" + array14.toString());
console.log("挿入後の要素：" + array13.toString());

console.log("=== ofメソッド（静的メソッド） ===");//newしなくても使えるメソッド=静的メソッド
console.log("=== 可変長引数を配列に変換 ===");
let array15 = Array.of('a','b','c','d');
console.log("Array of ('a','b','c','d') -> " + array15.toString());

console.log("=== copyWithinメソッド（破壊的） ===");//引数の中を破壊するメソッド
let array16 = ['a','b','c','d','e','f'];
console.log("array16.copyWithin(4, 1, 3);");
console.log("array16: " + array16.toString());
console.log("array16の4番目'b'と'c'を'e'と'f'にコピーする。'e','f'が'b'と'c'に置き換えられる");
array16.copyWithin(4, 1, 3);//0からカウントして4番目の要素をターゲットにして1番目から3番目をコピー（置き換え）。3番目は含まない
console.log("コピー後のarray16： " + array16.toString());

console.log("=== push/popメソッドを使ってstack構造を実装 ===");
let array17 = []; //空の配列
console.log(array17.toString());
array17.push('a');
console.log("array17.push('a')");
console.log(array17.toString());
array17.push('b');
console.log("array17.push('b')");
console.log(array17.toString());
array17.push('c');
console.log("array17.push('c')");
console.log(array17.toString());
let str1 = array17.pop();//末尾を削除
console.log("array17.pop() ->" + str1 + "を削除");
console.log(array17.toString());
array17.push('d');
console.log("array17.push('d')");
console.log(array17.toString());
let str2 = array17.pop();//末尾を削除
console.log("array17.pop() ->" + str2 + "を削除");
console.log(array17.toString());

console.log("=== push/shiftメソッドを使ってqueue構造を実装 ===");
let array18 = []; //空の配列
console.log(array18.toString());
array18.push('a');
console.log("array18.push('a')");
console.log(array18.toString());
array18.push('b');
console.log("array18.push('b')");
console.log(array18.toString());
array18.push('c');
console.log("array18.push('c')");
console.log(array18.toString());
let str3 = array18.shift();//先頭から削除
console.log("array18.shift() ->" + str3 + "を削除");
console.log(array18.toString());
array18.push('d');//後ろに追加
console.log("array18.push('d')");
console.log(array18.toString());
let str4 = array18.shift();//先頭から削除
console.log("array18.shift() ->" + str4 + "を削除");
console.log(array18.toString());

console.log("=== reverseメソッド（破壊的） ===");//＊＊＊破壊的だが再度reverseすると元に戻る
let array19 = ['a','b','c','d','e','f','g','h','i','j'];
console.log("reverse前：" + array19.toString());
array19.reverse();
console.log("reverse後：" + array19.toString());

console.log("=== sortメソッド（破壊的） ===");//並べ替え。
let array20 = [2,6,11,1,3,25,158,45];
console.log("数値も辞書順に並び変わる");
console.log("sort前：" + array20.toString());
array20.sort();
console.log("sort後：" + array20.toString());//デフォルトでは数値も辞書順に並び替わる

let array21 = [2,6,11,1,3,25,158,45];
console.log("数値を大小順に並び変える");
console.log("sort前：" + array21.toString());
console.log("sort(function(x,y) {return x - y;})"); //コールバック関数（無名の関数）
array21.sort(function(x,y) {return x - y;});//大小戦わせる
console.log("sort後：" + array21.toString());

console.log("=== forEachメソッド（非破壊的） ===");
let array22 = [5, 2, 4, 3];//円の半径だとして、円の面積を求めたい。
console.log("array22:" + array22.toString());
console.log("各要素を半径とみなし、その面積を求める")
array22.forEach(
	function (radius, index, array){
		console.log((index + 1) + ":" + Math.pow(radius, 2) * Math.PI);
	}
);
console.log(array22.toString());

console.log("=== someメソッド ===");
let array23 = [1,2,3,4,5,6,7];
console.log("偶数が1個でも入っているか検査する");
console.log("検査対象：" + array23.toString());
console.log(array23.some(
	function(n) {
		return n % 2 == 0;
	}
) ? "存在する" : "存在しない");

console.log("=== everyメソッド ===");
let array24 = [1,2,3,4,5,6,7];
console.log("全て偶数か検査する");
console.log("検査対象：" + array24.toString());
console.log(array24.every(
	function(n) {
		return n % 2 == 0;
	}
) ? "全てが偶数である" : "全ては偶数ではない");

//リスト3-25 コールバック関数 sortメソッド
console.log("=== sortメソッド（callback関数の例）===");
let classes = ['部長','課長','主任','担当'];
let members = [
	{ name:'鈴木清子', clazz:'主任'},
	{ name:'山口久雄' , clazz:'部長'},
	{ name:'井上太郎', clazz:'担当'},
	{ name:'和田和美', clazz:'課長'},
	{ name:'小森雄太', clazz:'担当'}
]
console.log("以下のオブジェクトの配列を'部長','課長','主任','担当'の順で並べかえる");
for (var member of members){
	console.log("name:" + member.name + ", clazz:" + member.clazz);
}
console.log('callback関数');
console.log('function(m1,m2){return classes.indexOf(m1.clazz) - classes.indexOf(m2.clazz);}');
members.sort(
		function(m1,m2){
			var pos1 = classes.indexOf(m1.clazz); //デバッグ用
			var pos2 = classes.indexOf(m2.clazz);
			return pos1 - pos2;
			//return classes.indexOf(m1.clazz) - classes.indexOf(m2.clazz);
			}
)
console.log('sort後:');
for(var member of members){
	console.log("name:" + member.name + ", clazz:" + member.clazz);
}
</script>