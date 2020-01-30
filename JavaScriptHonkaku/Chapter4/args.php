<script>
function showMessage(value){
	if (arguments.length !==1){
		throw new Error('引数の数が間違っています：' + arguments.length);
	}
	console.log(value);
}
try {
	showMessage("山田","鈴木");
} catch (e){
	window.alert(e.message);
}

//可変長引数が使えなかった場合
function sum2(nums){
	var result = 0;
	for (var i=0; len = nums.length; i<len; i++){
		result += nums[i];
	}
	return result;
}
var numbers = [2,4,8,10,12];//一度配列を作らなければ引数を渡せない
console.log(sum2=(numbers));

//可変長引数の使い道
function sum(){
	var result = 0;
	for(var i=0, len = arguments.length; i < len; i++){
		var tmp = arguments[i];
		if (typeof tmp !=='number'){ //typeofで
			throw new Error('引数が数値ではありません：' + tmp);
		}
		result += tmp;
	}
	return result;
}
try {
	console.log(sum(1,3,5,7,9)); //結果25
} catch(e) {
	window.alert(e.message);
}

</script>