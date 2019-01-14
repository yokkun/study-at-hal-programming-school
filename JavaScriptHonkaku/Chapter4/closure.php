<script>
//クロージャ　高階関数

function closure(init){
	var counter = init;
	return function(){
		return ++counter;
	}
}

var myClosure = closure(1);
console.log(myClosure());//2
console.log(myClosure());//3
console.log(myClosure());//4

var myClosure2 = closure(100);
console.log(myClosure());
console.log(myClosure2());
console.log(myClosure());
console.log(myClosure2());

</script>