<script>
//コンストラクタは関数リテラルだけでなくfunction命令でも作れる
//関数リテラルは使う前に必ず定義する必要がある。
//function命令はどこで定義しても使える
function Member(firstName,lastName){ //外部に公開される部分(firstName,lastName)
	this.firstName = firstName; //this とはインスタンス変数で、thisをつけると関数呼び出しをしても消えないで残る
	this.lastName = lastName;
	this.getName = function(){ //通常はここには書かない（メモリを消費してしまう）
		return this.lastName + ' ' + this.firstName;
	}
}
var mem = new Member('祥寛','山田');
console.log(mem.getName());
</script>