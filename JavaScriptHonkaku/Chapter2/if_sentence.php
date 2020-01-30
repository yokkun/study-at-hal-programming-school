<script>
time = 23;
console.log("---<解法1>---");
if (time >= 0 && time <=11){
	console.log("おはようございます");
} 
else if(time == 12){
	console.log("お昼です");
}
else if(time >= 13 && time <=18)
{
	console.log("こんにちは");
}
else if(time >= 19 && time <=23)
{ 
	console.log("こんばんは");
}
else{
	console.log("範囲外の時刻です");
}
console.log("---<解法2>---");
if(time < 0 || time > 23){
	console.log("範囲外の時刻です");
} else if (time <=11){
	console.log("おはようございます");
} else if (time == 12){
	console.log("お昼です");
} else if (time <=18){
	console.log("こんにちは");
} else {
	console.log("こんばんは");
}
console.log("---<解法3>---");
if(time <0 || time > 23){
	console.log("範囲外の時刻です");
} else if (time >= 19){
	console.log("こんばんは");
} else if (time >= 13){
	console.log("こんにちは");
} else if (time == 12){
	console.log("お昼です");
} else {
	console.log("おはようございます");
}

</script>