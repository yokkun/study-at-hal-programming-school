document.addEventListener('DOMContentLoaded',function(){
	let textarea = document.getElementById('elem');
	textarea.addEventListener('keyup',function(e){
		//キーボードのkeyの何番が押されているかをチェックして出力
		console.log(e.key + '(' + e.keyCode + ')');
		console.log(e.ctrlKey ? 'Ctrl' : '');
		console.log(e.shiftKey ? 'Shift' : '');
		console.log(e.altKey ? 'Alt' : '');
	});
	textarea.addEventListener('mousedown', function(e){
		if(e.button === 0){
			console.log('左ボタン');
		} else if (e.button ===  1){
			console.log('中央ボタン');
		} else if (e.button === 2){
			console.log('右ボタン');
		}
	});
});