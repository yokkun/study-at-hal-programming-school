<script>
// 演算子 /= の例
function size_with_unit(filesize){
	var units =['','K','M','G','T','P','E'];
	var temp = filesize;
	var index = 0;
	while(temp / 1024 >= 1.0){
		index ++;
		temp /= 1024;
}
	temp = Math.floor(temp * 100)/ 100;
	return temp + units[index] + "B";
}
var size = 8921243530000000;
console.log(size_with_unit(size));
</script>