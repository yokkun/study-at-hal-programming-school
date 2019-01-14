<script>
var getTriangle = (base, height) => {
	return base * height /2;
};//アロー関数も関数リテラルもfunction命令以外は定義は必ず先に書く
console.log('三角形の面積：' + getTriangle(5,2));
//アローオブジェクトは数値がソートされないため
console.log("関数リテラルをsortメソッドに渡す例");
var numbers = [4,3,2,12,1,28,18];
console.log("ソート前：" + numbers.toString());
numbers.sort(function(x,y){return x - y;});
console.log("numbers.sort(function(x,y){return x - y;});");
console.log("ソート後：" + numbers.toString());

console.log("アロー関数をsortメソッドに渡す例");
var numbers = [4,3,2,12,1,28,18];
console.log("ソート前：" + numbers.toString());
numbers.sort((x, y) => x - y);
console.log("((x, y) => x - y);");
console.log("ソート後：" + numbers.toString());

</script>