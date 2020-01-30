<script>
var p = /[\/\.\-]/gi;
var dates = ['2016/12/04','2016.12.04','2016-12-04']
for (var d of dates){
	var ary = d.split(p);
	console.log(ary);
}
console.log('2016/12/04'.split(p));
console.log('2016.12.04'.split(p));
console.log('2016-12-04'.split(p));
</script>