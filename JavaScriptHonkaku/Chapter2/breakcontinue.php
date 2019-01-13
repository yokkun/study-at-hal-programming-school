<script>
var result = 0;
for (var i=0; i < 100; i++){
	result += i;
	if (result > 1000){
		break;
	}
}
console.log('合計値が1000を超える（break）のは'+i);

var result = 0;
for (var i=1; i<100; i++){ 
	if(i%2 === 0){
		continue;
	}
	result += i;
}
console.log('合計' + result);

//九九算
document.writeln('<table border="1">');
var count = 0 ;
for (var i=1; i<100; i++){
	document.writeln('<tr>');//非推奨タグ
	for (var j=1; j<100; j++){
		count++;
		if(i*j > 300){
			break;//breakで出たほうがパフォーマンスに影響が出る
		}
		document.writeln('<td>' + (i*j) + '</td>');
	}
	document.writeln('</tr>');
}
document.writeln('</table>');
console.log('300でbreakして回った回数：' + count);

//九九算
document.writeln('<table border="1">');
var count = 0 ;
kuku:
for (var i=1; i<10; i++){
	document.writeln('<tr>');//非推奨タグ
	for (var j=1; j<10; j++){
		count ++;
		if(i*j > 30){
			break kuku;
		}
		document.writeln('<td>' + (i*j) + '</td>');
	}
	document.writeln('</tr>');
}
document.writeln('</table>');
console.log('30でbreakして回った回数：' + count);


//strictモードを使いバグを防ぐ
'use strict';
var total = 0; //グローバル変数
function sum(array){
	total = 0;//ここでローカル変数 var total = 0;のvar命令のつけ忘れをしてしまうとグローバル変数を参照してしまう
	for (var i=0; i<array.length; i++){
		total += array[i];
		}
	return total;
}
var numbers = [1,2,3,4,5,6,7,8,9,10];
console.log('合計：' + sum(numbers));

for (var i =1; i<=10; i++){
	total += i;
}
console.log("答え：" + total);
</script>