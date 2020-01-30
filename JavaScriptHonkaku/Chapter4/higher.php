<script>
//高階関数/コールバック関数：arrayWalkが呼び出す関数
function arrayWalk(data, f){
	for (var key in data){
		f(data[key],key);
	}
	
}
function showElement(value, key){
	console.log(key + ':' + value);
}

var ary = [1,2,4,8,16];
arrayWalk(ary, showElement);

//4.46
var result = 0;//
function sumElement(value, key){
	result += value;
}

var arry2 = [1,2,4,8,16]
arrayWalk(ary, sumElement);
console.log("合計値：" + result);
</script>