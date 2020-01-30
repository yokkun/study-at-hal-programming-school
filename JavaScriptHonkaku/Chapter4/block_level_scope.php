<script>
var total = 0;
for (var i=0; i<=100; i++){
	if(total > 1000){
		break;
	}
	total += i;
}
console.log(i + "を加算した時点で1000を超えました。");//javascriptにはブロックレベルのスコープがないため実行できる

var total = 0;
for (let j=0; j<=100; j++){//let
	if(total > 1000){
		break;
	}
	total += j;
}
console.log(j + "を加算した時点で1000を超えました。");//letを使うとスコープ外では実行できない
//Uncaught ReferenceError: j is not defined

</script>