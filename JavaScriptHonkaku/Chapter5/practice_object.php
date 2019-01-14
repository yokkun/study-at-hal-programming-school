<script>
//スポーツジム
function Member(name, weight, height, birthdate){
	this.name = name;
	this.weight = weight;
	this.height = height;
	this.birthdate = birthdate;
}
//メソッドを追加
Member.prototype.bmi = function (){
	return this.weight / (Math.pow(this.height/ 100, 2));
}
Member.prototype.age = function (){
	var today = new Date();
	var year = today.getFullYear();
	var month = today.getMonth();
	var date = today.getDate();
	var byear = this.birthdate.getFullYear();
	var bmonth = this.birthdate.getMonth();
	var bdate = this.birthdate.getDate();
	var age = year - byear;
	if (month < bmonth || month == bmonth && date < bdate){
		age --;
	}
	return age;
}
var mem = new Member('山田太郎',89,181,new Date(1962,7,5));
console.log("名前：" + mem.name);
console.log("年齢：" + mem.age());
console.log("BMI：" + mem.bmi());

</script>