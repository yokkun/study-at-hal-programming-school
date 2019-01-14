<script>
//クロージャの使い道例
/*function f(){
	var a = [];
	for (var i=0; i<3; i++){
		a[i] = function(){
			return i;
		}	
	}
	return a;
}*/ //この場合は3となる

function f(){
	var a = [];
	for (var i=0; i<3; i++){
		a[i] = (function(x){
			return function(){ return x;}
		})(i); //()内は即時関数という
	}
	return a;
}

var x = f();
console.log(x[0]());
console.log(x[1]());
console.log(x[2]());

</script>