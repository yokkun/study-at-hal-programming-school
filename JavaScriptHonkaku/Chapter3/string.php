<script>
//stringオブジェクト
//indexOf（先頭から何番目の文字列かを探す）とSubString（文字列の最初から最後まで）
console.log("--- indexOf, substringメソッド ---");
console.log("メールアドレスからローカル部とドメイン部を抜き出す");
var email = "yamada@abc.def.jp";
console.log("対象メールアドレス");
var pos = email.indexOf("@");
console.log("ローカル部: " + email.substring(0, pos));
console.log("ドメイン部: " + email.substring(pos + 1));

//startsWith
console.log("--- startsWithメソッド ---");
console.log("URLがセキュアであるかを（https）調べる");
var url = "https://haru-idea.jp";
console.log("対象URL: " + url);
console.log(url.startsWith("https") ? "セキュアである" : "セキュアではない");

//endsWith
console.log("--- endsWithメソッド ---");
console.log("PHPファイルかを（拡張子で）調べる");
var filename = "string1.php";
console.log("対象ファイル名：" + filename);
console.log(filename.endsWith(".php") ? "PHPファイルである" : "PHPファイルではない");

//charAt
console.log("--- charAtメソッド ---");
console.log("文字列から1文字ずつ取り出す");
var str1 = "JavaScript";
for (var i=0; i< str1.length; i++){
	console.log(str1.charAt(i));
}
console.log("文字列から3番目を取り出す")
console.log(str1.charAt(2));

//subStr（文字列から何番目まで）
console.log("--- substrメソッド ---");
console.log("文字列に含まれる〒の文字を見つけ、郵便番号8桁（8文字）を取り出す");
var zipstr = "この教室は〒812-0013、福岡市博多区・・・";
console.log("対象文字列：" + zipstr);
console.log("substr:" + zipstr.substr(zipstr.indexOf("〒") + 1, 8));//6番目から8文字
console.log("substring:"+ zipstr.substring(zipstr.indexOf("〒") + 1, 8));//6番目と8番目

//split（区切り文字列を指定して配列に格納する）
console.log("--- splitメソッド ---");
console.log("ハイフン区切りの年月日を配列に変換する");
var date1 = "2018-8-27";;
console.log("対象年月日：" + date1);
var ary1 = date1.split("-");
console.log("ary1.toString:" + ary1.toString());//配列要素をコンマ区切りにして出力
console.log("ary1:" + ary1);//配列をそのまま出力
console.log("カンマ区切りの文字列から数値の配列に変換する");
var numstr = "1,2,3,4,5,6,7,8,9,10";
console.log("対象文字列：" + numstr);
var ary2 = numstr.split(",");
console.log("ary2.toString:" + ary2.toString());
console.log("ary2:" + ary2);
console.log("上記配列の合計値を求める場合は型変換が必要。Number.parseIntなどを使用");
var total = 0;
for (var num of ary2){
	//total += Number.parseInt(num);
	total += (num - 0);
}
console.log("合計：" + total);

//charAt, charCodeAt ---言語の内部の文字コード（javascript=UTF）へ変換（文字zのコードは122）
console.log("--- charAt/charCodeAtメソッド ----");
var str2 = "JavaScript";
console.log("対象文字列：" + str2);
console.log("3番目の文字「" + str2.charAt(2) + "」コードの数値は" + str2.charCodeAt(2));//vの文字コードは118
console.log("文字列の文字コードを1文字ずつ取り出す、コードを取得する")
var str3 = "佐野仁寛";
for (var i=0; i < str3.length; i++){
	console.log(str3.charAt(i) + "：" + str3.charCodeAt(i));
}
console.log("--- String.fromCharCodeメソッド(20304,37326,20161,23515) ---");
console.log("上記の文字コードから元の文字列へ変換する");
var name2 = String.fromCharCode(20304,37326,20161,23515);
console.log("文字コードから復元した文字列：" + name2);

console.log("--- codePointAtメソッド ---");
console.log("サロゲートペアを使用している（4バイト）文字のコードを調べる");
var str4 = "叱られて";
console.log("対象文字列：" + str4);
console.log("上記文字列の0番目のコード：" + str4.codePointAt(0));//macではほとんどサロゲートペアにならない
var str5 = "羡";
console.log("対象文字列" + str5);
console.log("上記文字列の0番目のコード：" + str5.codePointAt(0))

console.log("--- repeatメソッド ---");
console.log("*を10回表示する");
console.log("*".repeat(10));

console.log("--- 配列要素から偶数の最大値と最少値を求める ---");
//let numbers = [-131,32,43,74,-45,-126,27,108,99,10];//偶数が含まれている場合
let numbers = [-7, 11, 153, -123, 9,81,33,-27,-193,187];//奇数しかない場合

//let max = numbers[0]; //仮の最小値が配列要素0番目とした場合
//let min = numbers[0];
let max = Number.MIN_SAFE_INTEGER;
let min = Number.MAX_SAFE_INTEGER;
for (let i = 0; i < numbers.length; i++){
	if(numbers[i] % 2 == 0){ //2の倍数/偶数だった場合のみ実行 
    	if(max < numbers[i]){
    		max = numbers[i];
    	}
    	if(min > numbers[i]){
    		min = numbers[i];
    	}
	}
}
if(max != Number.MIN_SAFE_INTEGER){
	console.log("最大値：" + max);
	console.log("最小値" + min);
}else{
	console.log("該当データなし");
}

//データ型変換
//!!num; //!!でtrue/false boolean型へ変換
console.log("--- int型からboolean型へのデータ型変換 ---");
let numb = 0;
console.log(!!numb); //false

//Symbolオブジェクト
console.log("Symbolオブジェクト");//名前の衝突を防ぐことができるオブジェクト
var XS = Symbol();
var s = Symbol();
var S = Symbol();
var M = Symbol();
var L = Symbol();
var XL = Symbol();
var size = M;
if (size == M){
	console.log("Mサイズ");
}
console.log(XL === XL);
function foo(){
	let M = Symbol();
	return M;
}
size = foo();
console.log(M == size);


</script>