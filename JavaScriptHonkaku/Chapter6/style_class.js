/**
 * 
 */

document.addEventListener('DOMContentLoaded', function(){
    		var elem = document.getElementById('elem');
    		elem.addEventListener('mouseover',function(){
				this.className = 'highlight';
        	}, false);
        	elem.addEventListener('mouseout',function(){
				this.className = '';
            })
		}, false);