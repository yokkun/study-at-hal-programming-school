<script>
function agg(numbers){
	if (numbers.length == 0){
		throw new Error("配列が空");
	}
	var count = 0;
	var sum = 0;
	var max = numbers[0];
	var min = numbers[0];
	for (var i = 0; i < numbers.length; i++){
		count++;
		sum += numbers[i];
		if(max < numbers[i]){
			max = numbers[i];
		}
		if(min > numbers[i]){
			min = numbers[i];
		}
	}
	return [sum, sum / count, max, min, count];
}

//分割代入の例
var nums = [4, 32, 88, 71, 91, 90, 3, 84, 5, 58];
let result = agg(nums);
console.log("合計（配列の取り出し）：" +　result[0]);
console.log("平均（配列の取り出し）：" +　result[1]);
console.log("最大（配列の取り出し）：" +　result[2]);
console.log("最小（配列の取り出し）：" +　result[3]);
console.log("件数（配列の取り出し）：" +　result[4]);
console.log("--------------");
let [sum, avg, max, min, count] = agg(nums);
console.log("合計（分割代入）：" + sum);
console.log("平均（分割代入）：" + avg);
console.log("最大（分割代入）：" + max);
console.log("最小（分割代入）：" + min);
console.log("件数（分割代入）：" + count);
</script>