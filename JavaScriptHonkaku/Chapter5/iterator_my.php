<script>
//独自のIterator(=foreach)メソッドの作り方（デザインパターンの一種）
class MyIterator{
	constructor(data){
		this.data = data;
	}
	[Symbol.iterator](){
		let current = 0;
		let that = this;
		return {
			//メソッドを内部で使ってくれている
			//MyIteratorの
			next(){
				return current < that.data.length ? {value: that.data[current++], done:false} : {done:true};
			}
		};
	}
}

class NumberIterator{
	constructor(data){
		this.data = data;
	}
	[Symbol.iterator](){
		let current = 0;
		let that = this;
		return {
			//メソッドを内部で使ってくれている
			//MyIteratorの
			next(){
				while(true){
					if(current < that.data.length){
						if(typeof that.data[current] === 'number'){ //numberは文字列
							return {done:false, value:that.data[current++]};
						} else {
							current++;
						}
					} else {
						return {done:true};
					}
				}
			}
		};
	}
}

let itr = new MyIterator([1,2,3,4,5,6]);
for (let value of itr){
	console.log(value);
}
console.log("======数値だけを取り出すイテレータ=====")
let itr2 = new NumberIterator([1,'abc',2,3,true,4,5,6,'xyz']);
for(let value of itr2){
	console.log(value);
}
</script>