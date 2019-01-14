<script>
//再帰関数の練習：フィボナッチ数の求め方
//漸化式（ぜんかしき）
function fibonacci(n){
	if(n == 0){
		return 0;
	}
	if(n == 1){
		return 1;
	}
	return fibonacci(n - 1) + fibonacci(n - 2);
}

console.log(fibonacci(10));
</script>