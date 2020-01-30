document.addEventListener('DOMContentLoaded',function(){
	document.getElementById('inner').addEventListener('click', function(e){
		window.alert('#innerリスナーが発生しました。');
	}, true); //false/trueでチェック
	document.getElementById('inner').addEventListener('click', function(e){
		window.alert('#innerリスナー2が発生しました。');
	}, true); //false/trueでチェック
	document.getElementById('outer').addEventListener('click', function(e){
		window.alert('#outerリスナーが発生しました。');
	}, true); //false/trueでチェック
}, false);