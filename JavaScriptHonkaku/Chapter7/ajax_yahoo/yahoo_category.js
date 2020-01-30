document.addEventListener('DOMContentLoaded',function(){
	createLink();
});
function createLink(e) {
	if(e){
		var category_id = e.target.getAttribute("data-category");
	}
	var result = document.getElementById('result');
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function(){
		if (xhr.readyState === 4){ //HTTP通信の状態
			if(xhr.status === 200){ //HTTPステータスコードの取得
				var data = xhr.responseXML;
				if (data === null){
					result.textContent = "KeyWord";
				} else {
					var childCategories = data.getElementsByTagName('ChildCategory');
					var ul = document.createElement('ul');
					for (var i=0; i < childCategories.length; i++){
						var item = childCategories.item(i);
						var categoryId = item.getElementsByTagName('CategoryId').item(0).textContent;
						var categoryName = item.getElementsByTagName('CategoryName').item(0).textContent;
						
						var isLeaf = item.getElementsByTagName('IsLeaf').item(0).textContent;
						
						var li = document.createElement('li');
						
						var anchor = document.createElement('a');
						anchor.href = 'javascript:void(0)'
						anchor.setAttribute = ("data-category",categoryId)
						anchor.className = 'link'
						
						var text = document.createTextNode(categoryId + ":" + categoryName);
						anchor.appendChild(text);
						li.appendChild(anchor);
						ul.appendChild(li);
					}
					result.replaceChild(ul, result.firstChild);
					var links = document.getElementsByClassName('link');
					for (var i=0; i < links.length; i++){
						//個々のリンクにイベントリスナを登録するために即時関数を利用
						(function(x) {
							//createLinkにイベントオブジェクトを渡すには以下のように関数でラップする
							links.item(x).addEventListener('click',function(e){
								createLink(e);
							});
						})(i);
					}
				}
			} else {
				result.textContent = 'サーバーエラーが発生しました';
			}
		} else {
			result.textContent = '通信中...';
		}
	}
	xhr.open('GET','yahoo_category.php?categoryid=' + encodeURIComponent(category_id?category_id:0), true);
	xhr.send(null);
}