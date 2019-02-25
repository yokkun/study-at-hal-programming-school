document.addEventListener('DOMContentLoaded',function(){
	var elem = document.getElementById('elem');
	elem.addEventListener('click',function(){
		//条件演算子：class属性がhighlightであれば（true）空を設定
		this.className = (this.className === 'highlight' ? '' : 'highlight');
	}, false);
}, false);