<script>
//Dateオブジェクトを作る
var date1 = new Date();
console.log('new Date()->' + date1.toLocaleString());

var date2 = new Date('2019/12/31 12:50:42');
console.log("new Date('2019/12/31 12:50:42')" + date2.toLocaleString());

var date3 = new Date(2019,11, 31, 12, 50, 42, 500);
console.log("new Date(2019,11, 31, 12, 50, 42, 500)" + date3.toLocaleString());

var date4 = new Date(1577800000000);
console.log("new Date(1577800000000)" + date4.toLocaleString());

var date5 = new Date();
console.log('年->' + date5.getFullYear());
console.log('月->' + (date5.getMonth()+ 1));//月は0からカウントするため1を足さないと出ない（注意）
console.log('日->' + date5.getDate());
console.log('時->' + date5.getHours());
console.log('分->' + date5.getMinutes());
console.log('秒->' + date5.getSeconds());
console.log('ミリ秒->' + date5.getMilliseconds());
console.log('1970/1/1 00:00:00:000 からの経過ミリ秒->' + date5.getTime());
console.log('世界協定時からのオフセット（分）' + date5.getTimezoneOffset());

var day_of_week = ['日','月','火','水','木','金','土'];//0からカウントする配列として
console.log('曜日->' + day_of_week[date5.getDay()]);

console.log('上記の日付の年・月・日・時・分・秒・ミリ秒を（set~を使い）変更する');
date5.setFullYear(2020);
console.log('年(2020)->' + date5.toLocaleString());
date5.setMonth(2);
console.log('月(3)->' + date5.toLocaleString());
date5.setDate(15);
console.log('日(15)->' + date5.toLocaleString());
date5.setHours(22);
console.log('時(22)->' + date5.toLocaleString());
date5.setMinutes(35);
console.log('分(35)->' + date5.toLocaleString());
date5.setSeconds(42);
console.log('秒(42)->' + date5.toLocaleString());
date5.setMilliseconds(300);
console.log('ミリ秒(300)->' + date5.toLocaleString());

console.log('現在の世界協定時の年月日時分秒ミリ秒を取得する');
var date6 = new Date();
console.log('年->' + date6.getUTCFullYear());
console.log('月->' + (date6.getUTCMonth()+ 1));//月は0からカウントするため1を足さないと出ない（注意）
console.log('日->' + date6.getUTCDate());
console.log('時->' + date6.getUTCHours());
console.log('分->' + date6.getUTCMinutes());
console.log('秒->' + date6.getUTCSeconds());
console.log('ミリ秒->' + date6.getUTCMilliseconds());

console.log('2018/9/24 21:58:55のtimestamp->' + Date.parse('2018/9/24 21:58:55'));

var date7 = new Date();
console.log('現在の自国のJSON文字列->' + date7.toJSON());

var date8 = new Date('2018/10/15/ 13:12:58');
console.log('2018/10/15/ 13:12:58に対し、加算減算を行う');

date8.setMonth(date8.getMonth() + 3);
console.log('3か月後の計算 date8.setMonth(date8.getMonth() + 3)->' + date8.toLocaleString());

date8.setDate(date8.getDate() - 20);
console.log('20日前の計算 date8.setDate(date8.getDate() - 20)->' + date8.toLocaleString());

//javascriptには月末という概念がない
console.log('月末の計算');
var date9 = new Date('2018/10/15');
date9.setMonth(date9.getMonth() + 1);
date9.setDate(0);
console.log('2018/10/15の月末->' + date9.toLocaleDateString());

console.log('日付の差分');
var date10 = new Date('2018/8/15');
var date11 = new Date('2018/9/20');
var diff = (date11.getTime() - date10.getTime()) / (1000 * 60 * 60 * 24);
console.log('2018/9/20と2018/8/15には' + diff + '日の差があります。');

function getAge(birthdate){
	var bYear = birthdate.getFullYear();
	var bMonth = birthdate.getMonth() + 1;
	var bDate = birthdate.getDate();
	var today = new Date();
	var tYear = today.getFullYear();
	var tMonth = today.getMonth();
	var tDate = today.getDate();
	/*
	1	年齢を求めるロジックを記述
	*/
	return age;
}
function get_age(year, month, date){
	let today = new Date();
	let tyear = today.getFullYear();
	let tmonth = today.getMonth() + 1;
	let tdate = today.getDate();
	let age = tyear - year;
	if (month > tmonth || month == tmonth && tdate < date){
		age--;
	}
	return age;
}
var AgeCalculator = function (year, month, date){
	this.year = year;
	this.month = month;
	this.date = date;
	var today = new Date();
	this.tyear = today.getFullYear();
	this.tmonth = today.getMonth() + 1;
	this.tdate = today.getDate();
};
//オブジェクト指向で書く
AgeCalculator.prototype = 
{	
	getAge: function(){
		var age = this.tyear - this.year;
		if(this.month > this.tmonth || this.month == this.tmonth && this.tdate < this.date){
			age--;
		}
		return age;
	},
	today: function(){
		return this.tyear + "年" + this.tmonth + "月" + this.tdate + "日";
	},
}
var ageCalc = new AgeCalculator(2008, 10, 1);
console.log(ageCalc.today() + "現在で" + ageCalc.getAge() + "歳です。");
console.log(get_age (2008, 10 ,2) + "歳");
</script>