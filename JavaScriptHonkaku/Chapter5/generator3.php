<script>
//ただし速度はそんなに上がらない。少ないなら配列を作って渡す方が速い。ジェネレーターはメモリは節約できる
function* isNumber(data){ //配列をdataとして受け取るジェネレーターを作る
	for (let d of data){
		if(typeof d ==='number'){
			yield d;
		}
	}
}
function* isPositiveNumber(data){
	for (let d of data){
		if(d>0){
			yield d;
		}
	}
}

for (let n of isPositiveNumber(isNumber([5,'a',-4,true,6,-2,3,'b']))){//5まで読み込んだら返す、そして次へ
	console.log(n);
}
</script>