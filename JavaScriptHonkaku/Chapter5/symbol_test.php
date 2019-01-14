<script>
//symbolの使い方
//グローバル（プライベート）変数を作る
const SECRET_VALUE = Symbol();
const PASSWORD = Symbol();
//Symbolで作り出したvalueは外部から見えなくなっている
class MyApp{
	constructor(secret, password){
		this.hoge = 'hoge';
		this.goo = 'foo';
		this[SECRET_VALUE] = secret;
		this[PASSWORD] = password;
	}
	check_value(secret){
		return this[SECRET_VALUE] === secret;
	}

	check_password(password){
		return this[PASSWORD] === password;
	}
}

let app = new MyApp("あいうえお",'abcde');
console.log(app.check_value('あいうえお') ? "等しい":"等しくない");
console.log(app.check_password('abcde') ? "資格あり":"資格なし");
for(let key in app){
	console.log(key);
}
console.log(JSON.stringify(app));
</script>