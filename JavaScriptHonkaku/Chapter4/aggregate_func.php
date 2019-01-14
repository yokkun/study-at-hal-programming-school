<script>
//4.6.1
function aggregate_func(nums){
	if(nums.length == 0){
		throw new Error("配列が空")
	}
	let total = 0;
	let count = 0;
	let max = nums[0];
	let min = nums[0];
	for (var num of nums){
		total += num;
		count ++;
		if (max < num){
			max = num;
		}
		if (min > num){
			min = num;
		}
	}
	return [total, total / count, max, min, count];
}
let numbers = [8,7,2,6,9,1,3,4,5];

var result = aggregate_func(numbers);
console.log("合計：" + result[0]);
console.log("平均" + result[1]);
console.log("最大" + result[2]);
console.log("最小" + result[3]);
console.log("件数" + result[4]);

//上記の改良版、分割代入で表す
let [sum, avg, max, min, count] = aggregate_func(numbers);
console.log("合計：" + sum);
console.log("平均" + avg);
console.log("最大" + max);
console.log("最小" + min);
console.log("件数" + count);
</script>