<script>
//通常はオブジェクトを参照する
let person1 = {
		firstname: "太郎",
		lastname: "山田"
}
console.log("--- person1 ---");
printObject(person1);
let person2 = person1;
console.log("let person2 = person1;");
console.log("--- person2 ---");
printObject(person2);

person2.firstname = "次郎";
console.log("person2.firstname = '次郎';");

console.log("--- person1 ---");
printObject(person1);
console.log("--- person2 ---");
printObject(person2);

let person3 = {};
console.log("--- person3 ---");
printObject(person3);

//assignでマージする。
Object.assign(person3, person1);
console.log("Object.assign(person3, person1);");
console.log("--- person3 ---");
printObject(person3);

person3.firstname = "三郎";
console.log("person3.firstname = '三郎';");

console.log("--- person1 ---");
printObject(person1);
console.log("--- person3 ---");
printObject(person3);

let pet = {
		type: 'スノーホワイトハムスター',
		name: 'キラ',
		description: {
			birth: '2014-02-15'
		}
};
let pet2 = {
		name: "山田きら",
		color: '白',
		description: {
			food: 'ひまわりのタネ'
		}
};
let pet3 = {
		weight: 42,
		photo: 'http://wings.msn.to/img/ham.jpg'	
};
Object.assign(pet,pet2,pet3);
console.log(pet);
//連想配列のキーが同じ場合、後からマージした方が優先されて上書きされる


function printObject(obj){
	for (var key in obj){
		console.log(key + " :" + obj[key]);
		}
}
</script>