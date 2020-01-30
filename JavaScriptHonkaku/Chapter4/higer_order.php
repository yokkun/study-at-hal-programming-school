<script>

console.log("---以下の配列を条件付きで合計を求める---");
var numbers = [-3,-2,-1,0,1,2,3,4,5,6,7,8,9];

console.log(numbers.toString());

function sum1(nums){
	var total = 0;
	for (var num of nums){
		total += num;
	}
	return total;
}

console.log("---条件なしの合計---");
console.log(sum1(numbers));

console.log("---奇数の合計---");

function sum2(nums){
	var total = 0;
	for (var num of nums){
		if(num % 2 != 0){
			total += num;
		}
	}
	return total;
}
console.log(sum2(numbers));

console.log("---正の偶数の合計---");
function sum3(nums){
	var total = 0;
	for (var num of nums){
		if(num > 0 && num % 2 == 0){
			total += num;
		}
	}
	return total;
}
console.log(sum3(numbers));

//高階関数で書くと
function higher_sum(nums, func){
	var total = 0;
	for (var num of nums){
		if(func(num)){
			total += num;
		}
	}
	return total;
}

function isPositiveEven(num){
	return num > 0 && num % 2 == 0;
}
console.log("---正の偶数の合計（高階関数）---");
console.log(higher_sum(numbers, isPositiveEven));

//関数リテラルで書くと
console.log("---正の偶数の合計（関数リテラル）---");
console.log(higher_sum(numbers,function(n){
	return n > 0 && n % 2 == 0;
}));

console.log("---正の偶数の合計（高階関数）引数にアロー関数を使用---");
console.log(higher_sum(numbers, n => n > 0 && n % 2 == 0));
// (n) => {return n > 0 && n % 2 == 0; }

let filter1 = n => n > 0 && n % 2 == 0;
console.log(higher_sum(numbers, filter1));
</script>