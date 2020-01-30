<script>
var obj3 = Object.create(Object.prototype, {
	x: {value: 1, writable: true, configurable: true, enumerable: true },
	y: {value: 2, writable: true, configurable: true, enumerable: false },
	z: {value: 3, writable: true, configurable: false, enumerable: false },
	w: {value: 4, writable: false, configurable: false, enumerable: false }
	}
);
console.log("x: {value: 1, writable: true, configurable: true, enumerable: true }");
console.log("y: {value: 2, writable: true, configurable: true, enumerable: false }");
console.log("z: {value: 3, writable: true, configurable: false, enumerable: false }");
console.log("w: {value: 4, writable: false, configurable: false, enumerable: false }");
		
//enumerable（列挙する） テスト
console.log("enumerable: true テスト");
for (var key in obj3){
	console.log(key + ":" + obj3[key]);
}
//valueを上書き
console.log("object writable: true/false");
obj3.x = 10;
obj3.y = 20;
obj3.z = 30;
obj3.w = 40;
console.log("obj3.x -> " + obj3.x);
console.log("obj3.y -> " + obj3.y);
console.log("obj3.z -> " + obj3.z);
console.log("obj3.w -> " + obj3.w);

//キーと値のペアを削除
console.log("object detele (configurable- true/false)");
delete obj3.x;
delete obj3.y;
delete obj3.z;
delete obj3.w;
console.log("obj3.x -> " + obj3.x);
console.log("obj3.y -> " + obj3.y);
console.log("obj3.z -> " + obj3.z);
console.log("obj3.w -> " + obj3.w);


</script>