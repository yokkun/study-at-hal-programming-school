<script>
var Animal = function(){};
Animal.prototype = {
	walk:function(){
		console.log("トコトコ...");
	}
}
var Dog = function(){
	Animal.call(this);
}
Dog.prototype = new Animal();
Dog.prototype.bark = function(){//このようにしないと継承されない
	//オブジェクトリテラルで書くのはNG
	console.log("ワンワン！")
};
var d = new Dog();

d.walk();
d.bark();

var SuperAnimal = function(){};
SuperAnimal.prototype = {
	walk: function(){
		console.log('ダダダダダ！');
	}
};
var Dog = function(){};
Dog.prototype = new Animal();
var d1 = new Dog();
d1.walk();
console.log('d1 instance of Animal：'  + (d1 instanceof Animal));
console.log('d1 instance of Dog：'  + (d1 instanceof Dog));


Dog.prototype = new SuperAnimal();
var d2 = new Dog();
d2.walk();
d1.walk();//固定されている(エラーの整理)
</script>