<script>
//Set（頻繁に検索する時に使用）
//Array（格納して後から値を取り出したい時に使用）

function printSet(myset){
	var list = [];
	for (var item of myset){
		list.push(item)
		}
	return list.join(' ,');
}

console.log("高速に検索ができるSetオブジェクト");
let s = new Set();

s.add(10);
console.log("s.add(10)");
console.log(' s->' + printSet(s));

s.add(5);
console.log("s.add(5)");
console.log(' s->' + printSet(s));

s.add(100)
console.log("s.add(100)");
console.log(' s->' + printSet(s));

s.add(50);
console.log("s.add(50)");
console.log(' s->' + printSet(s));

s.add(5);
console.log("s.add(5)");
console.log(' s->' + printSet(s));

s.has(100);
console.log("s.has(100)");
//true

console.log("s.size :" + s.size);
//4

s.delete(100);
console.log('s.delete(100)');
console.log('s->' + printSet(s));
console.log('size->' + s.size);

s.clear();
console.log('s.clear()');
console.log('s->' + printSet(s));
console.log('size->' + s.size);
</script>