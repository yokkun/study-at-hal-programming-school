<script>
var Member = function (firstName, lastName){ //コンストラクタ
	this.firstName = firstName;
	this.lastName = lastName;
}

var mem = new Member('祥寛','山田');

mem.getName = function(){ //ここでメソッドを追加しても動作する
	return this.lastName + ' ' + this.firstName;
}

console.log(mem.getName());

var mem2 = new Member('仁寛','佐野');
console.log(mem2.getName());
</script>