<script>
//再帰的な構造
//以下の合計を求めるには？
let numbers = [1,2,[3,4],5,[6,[7,8],9],10];
//nums 引数
//item 整数値
function recursive_array_sum(nums){
	var total = 0; //total 合計値の変数
	if (Array.isArray(nums)){ //引数が配列か調べる
		throw new Error("引数が配列ではない");
	}
	for (var item of nums){
		if(Array.isArray(item)){
			total += recursive_array_sum(item);
		} else {
			total += item;
		}
	}
	return total;
}

</script>