<script>
//5.5.1
class Member {
//コンストラクタ
	constructor(firstName, lastName){
		this.firstName = firstName;
		this.lastName = lastName;
	}
	//firstNameプロパティ
	get firstName(){
		return this._firstName; //privateをあらわす_をつけている。thisはクロージャの仕組みを利用したグローバル変数
	}
	set firstName(value){
		this._firstName = value;
	}
	//lastNameプロパティ
	get lastName(){
		return this._lastName;
	}
	set lastName(value){
		this._lastName = value;
	}
	getName(){
		return this.lastName + this.firstName;
	}
}
let m = new Member('太郎','山田');
console.log(m.getName());

class BusinessMember extends Member{
	constructor(firstName, lastName, clazz){
		super(firstName, lastName);
		this.clazz = clazz;
	}
	getName(){
		return super.getName() + '／役職：' + this.clazz;
	}
}

let bm = new BusinessMember('太郎','山田','課長');
console.log(bm.getName());

//5.5.3 computed propety names
let i = 0;
let member2 = {
	name: '山田太郎',
	birth: new Date(1970,5,25),
	['memo' + ++i]:'正規会員',
	['memo' + ++i]:'支部会長',
	['memo' + ++i]:'関東'		
};
console.log(member2);
</script>