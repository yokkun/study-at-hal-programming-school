<script>
//for文
//1から100までの合計
var total = 0; //変数宣言と初期値の宣言
for (i=1; i <= 100; i++){
	total += i; //変数に代入
}
console.log("1から100までの合計は" + total); //出力 5050

//1から100までの3の倍数の合計
total=0;//初期化
for (var i=0; i <= 100; i++){
	if(i % 3 == 0){//3で割った余り
		total += i;
	}	
}
console.log("1から100までの3の倍数の合計は" + total); //出力 1683

//1から10億までの317の倍数の合計
var start_time = performance.now();//UNIX TIMEを取得
total=0;
for(var i=0; i<=1000000000; i++){
	if(i % 317 ==0){
		total += i;
	}
}
console.log("1から10億までの317の倍数の合計は" + total);//出力 1577287433753925
var stop_time = performance.now();
console.log('処理時間：'+(stop_time - start_time) + 'ms');

//処理時間短縮版
console.log('---改良版---');
var start_time = performance.now();
total = 0;
for(var i=317; i<= 1000000000; i += 317){ //317の倍数分だけ繰り返す
		total += i;
}
console.log("1から10億までの317の倍数の合計は(改良版)" + total);//出力 1577287433753925
var stop_time = performance.now();
console.log('処理時間(改良版)：'+(stop_time - start_time) + 'ms');

</script>