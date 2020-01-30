document.addEventListener('DOMContentLoaded', function(){
	var elem = document.getElementById('elem');
	elem.addEventListener('click',function(){
		//class属性を半角スペースで区切る
		var classes = this.className.split(' ');
		
		var index = classes.indexOf('highlight');
		//lineを壊すことなくhighlightだけを着脱する
		if (index === -1){
			
			classes.push('highlight');
		} else {
			
			classes.splice(index,1);
		} this.className = classes.join(' ');
	}, false);
}, false);