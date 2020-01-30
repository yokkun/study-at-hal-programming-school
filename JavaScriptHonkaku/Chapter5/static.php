<script>
var Area = function(){};
Area.Version = "1.0";

Area.triangle = function(base, height){
	return base * height / 2;
};

Area.diamond = function(width, height){
	return width * height/ 2
	
};
	
console.log('Areaクラスのバージョン：' + Area.Version);
console.log('三角形の面積：' + Area.triangle(5,3));

var a = new Area();
console.log('菱形の面積：' + a.diamond(10,2)); //これはエラーになる
</script>