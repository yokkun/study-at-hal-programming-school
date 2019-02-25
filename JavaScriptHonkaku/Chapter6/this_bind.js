document.addEventListener('DOMContentLoaded', function(){
	var data = {
		title: 'javaポケットリファレンス',
		price: 2680,
		show: function(){
			console.log(this.title + '/' + this.price + '円');
		}	
	};
	document.getElementById('btn').addEventListener('click', data.show, false);//動作しない
	document.getElementById('btn').addEventListener('click', data.show.bind(data), false);//bindでthisの意味を結びつける

}, false);