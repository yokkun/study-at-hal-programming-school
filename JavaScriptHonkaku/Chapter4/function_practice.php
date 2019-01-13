<script>
console.log("=== function 命令で定義 ===");
function youbi(year, month, date){
	var temp = new Date(year, month - 1, date);
	var dw = ['日','月','火','水','木','金','土'];
	return dw [temp.getDay()];
}
console.log(youbi(2018,12,31));

console.log("=== function コンストラクタ経由で定義 ===");
//文字列で渡ってきたコードがそのまま実行できるため、セキュリティリスクあり。要注意。パフォーマンスも低下する 
var getTriangle1 = new Function('base','height','return base * height / 2;');
console.log("三角形の面積: " + getTriangle1(5,2));
var getTriangle2 = new Function('base, height','return base * height / 2;');
console.log("三角形の面積: " + getTriangle2(10,4));

var param1 = 'base, height';
var param2 = 'width, height';
var formula1 = 'return base * height / 2';
var formula2 = 'return width * height /2';
//var formula2 = 'alert("Hello World!")'; //セキュリテイtest

var rnd = Math.floor(Math.random() * 2);
var func = '';
if (rnd === 0) {
	func = new Function(param1, formula1);
} else if (rnd === 1){
	func = new Function(param2, formula2);
}
console.log("面積:" + func(10, 10));

console.log("=== 関数リテラル表現で定義 ===");
var getTriangle3 = function(base, height){
	return base * height / 2;
}
console.log("三角形の面積：" + getTriangle3(20,8));

console.log("=== ＜練習1＞ ===");
function calcChange(paidamount, quantity, unitprice = 100/*省略した場合100とする*/){
	if (paidamount < unitprice * quantity){
		return false;
	}
	return paidamount - unitprice * quantity;
}
var change = calcChange(1000, 15);
console.log(change !== false ? "おつりは" + change + "円です。" : "料金が不足しています。");
change = calcChange(2000, 7, 200);
console.log(change !== false ? "おつりは" + change + "円です。" : "料金が不足しています。");

console.log("=== ＜練習2＞ ===");
let nums = [1,2,3,4,5];
function sumCircleArea(numbers){
	var total = 0;
	for (var n of numbers){
		total += getCircleArea(n); //関数の中から別の関数を呼び出す
	}
	return total;
}
function getCircleArea(radius){
	return Math.pow(radius, 2) * Math.PI;
}
console.log("[" +  nums + "]" + "は半径を要素とする配列で、その半径から半径を一つずつ取り出し円の面積を求め、合計を返す関数");
console.log(sumCircleArea(nums));

console.log("=== <練習3> ===");
console.log("Array#IndexOfのように対象とする配列に、指定した要素が何番目に存在するかを返す関数");
function indexOf(heystack, needle){
	var index = -1;//見つからなかったら-1を返す
	for (var i=0; i < heystack.length; i++){
		if(heystack[i] === needle){
			index = i;
			break;
		}
	}
	return index;
}
let members = ["山田","横山","田中","鈴木","星山","佐藤"];
let name = "星山";
let pos = indexOf(members, name);
console.log (pos !== -1 ? name + "さんは" + (pos + 1) + "番目に存在します。" : name + "さんはメンバーではありません。");

name = "加藤";
pos = indexOf(members, name);
console.log (pos !== -1 ? name + "さんは" + (pos + 1) + "番目に存在します。" : name + "さんはメンバーではありません。");

console.log("=== 指定した苗字を持つ人のフルネームを1次元配列に格納し返す関数 ===");
let members2 = [['山田','太郎'],['横山','花子'],['田中','一郎'],['山田','次郎'],['田中','裕子'],['山田','三郎']];	
function getFullnameByLastname(mems, lastname){
	var result = [];
	for (var m of mems){
		if(m[0] === lastname){
			result.push(m[0] + m[1]);
		}
	}
	return result;
}
console.log(getFullnameByLastname(members2, "山田").toString());
</script>