document.addEventListener('DOMContentLoaded',function(){
	document.getElementById('inner').addEventListener('click', function(e){
		window.alert('#innerリスナーが発生しました。');
		//e.stopImmediatePropagation(); //書く位置で挙動が変わってくる
		//e.preventDefault();//アンカータグの本来の機能をオフにする
	}, false); //false/trueでチェック
	document.getElementById('inner').addEventListener('click', function(e){
		window.alert('#innerリスナー2が発生しました。');
		e.stopImmediatePropagation();
	}, false); //false/trueでチェック
	document.getElementById('outer').addEventListener('click', function(e){
		window.alert('#outerリスナーが発生しました。');
	}, false); //false/trueでチェック
}, false);