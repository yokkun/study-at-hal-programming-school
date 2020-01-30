<script>
//proxy＝オブジェクトが持っていないものをオブジェクトをいじらずに渡す

let mem = {name: '山田太郎', age:'28', weight:'89',height:'181'};
function bmi(){
	return mem.weight / Math.pow(mem.height / 100, 2);
}
const handler = {
	apply: function(target, thisArg, mem){
		return target();
	}
}
var proxy = new Proxy(bmi, handler);
console.log("BMI:" + proxy());

function profile(decoStart, decoEnd){
	return decoStart + mem.name + decoEnd + " " + mem.age;
}
const handler2 = {
	apply: function(target, thisArgm, mem){
		return target("【","】");
	}
};

var proxy2 = new Proxy(profile, handler2);
console.log(proxy2());
	
	
</script>