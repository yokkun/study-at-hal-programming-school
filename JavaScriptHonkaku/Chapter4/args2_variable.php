<script>
function printf(format){
	for (var i=1, len=arguments.length; i<len; i++){ //（テキストはi=0;としているが間違い）
		var pattern = new RegExp("\\{"+ (i-1) + "\\}", "g");//引数を何度も使う=グローバルオプションgをつけている。つけなければ先頭の{0}しか使われない
		format = format.replace(pattern, arguments[i]);
	}
	console.log(format);
}
printf("こんにちは、{0}さん。私は{1}です。あれ、{0}さんですよね？","掛谷","山田");

function getTriangleArea(base,height){ 
	if(base === undefined){
		base = 1;
	}
	if(height === undefined){
		height = 1;
	}
	return base * height / 2;
}
console.log(getTriangleArea());
console.log(getTriangleArea(5));
console.log(getTriangleArea(5,2));

function getTriangleArea2(args){ //引数をオブジェクトリテラルで受け取っている
	if (args.base === undefined){
		args.base = 1; //デフォルト値
	}
	if (args.height === undefined){
		args.height = 1;
	}
	return args.base * args.height /2;
}
console.log(getTriangleArea2({height:4}));//名前付き引数を渡している
console.log(getTriangleArea2({height:4, base:5}));

//ES2015から可変長引数が...で表現ができ、可変長引数は配列として使えるようになった。
function sum3(...nums){
	let result = 0;
	for (var num of nums){
		if(typeof num!== 'number'){
			throw new Error("指定値が数値ではありません：" + num);
		}
		result += num;
	}
	return result;
}
try {
	console.log(sum3(1,3,5,7,9));//25
} catch {
	alert(e.message)
}

//4.5.3 スプレッドオペレーション=展開される 
var numbers1 = [1,2,3,4];
var numbers2 = [...numbers1,5,6,7,8];//...を入れると[1,2,3,4],5,6,7,8ではなくそのまま展開される

for (var num of numbers2){
	console.log(num);
}

//4.5.4

</script>