<script>
export class Member { //class_propをモジュール化した例
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
</script>