<script>
function Triangle(){ 
	//プライベートプロパティの定義（function命令か関数リテラルでもOK）
	var _base; //クロージャー（varで宣言した値が消えないようにメソッド定義する）
	var _height; //底辺と高さの変数を保持 プライベート_

// 	//レガシーブラウザ用の書き方（アクセサーメソッド/特権メソッド）
// 	//プライベートメソッドの定義
// 	var _checkArgs = function (va1){
// 		return (typeof va1 === 'number' && va1 > 0);//引数のチェック
// 	}; //

// 	//プライベートメンバーにアクセスするためのメソッドを定義（レガシーメソッドの書き方）
//     this.setBase = function(base){ //関数の中でthisを使うとグローバルオブジェクトとなる
//     	if(_checkArgs(base)){ _base = base; } /*_base ローカル変数として*/
//     };
//     this.getBase = function(){
//     	return _base;
//     };
//     this.setHeight = function(height){
//     	if(_checkArgs(height)){	_height = height; }
//     };
//     this.getHeight = function(){
//     	return _height;
//     };

	//baseプロパティの定義
	Object.defineProperty (
		this,
		'base',
		{ 
			get: function(){
				return _base;
			},
			set: function(base){
				if(typeof base === 'number' && base > 0){
					_base = base;
				}
			}
		}
	);
	Object.defineProperty (
		this,
		'height',
		{
			get: function(){
				return _height;
			},
			set: function(height){
				if(typeof height === 'number' && height >0){
					_height = height;
				}
			}
		}
	);
}
//プライベートメンバーにアクセスしない（できない）メソッドの定義

Triangle.prototype.getArea = function(){
	return this.base * this.height / 2;
}

	//レガシーメソッドの書き方
    // Triangle.prototype.getArea = function(){
    // 	return this.getBase() * this.getHeight() /2;
    // };

var t = new Triangle();
	
	//レガシーメソッドの書き方
    /* t._base = 10;
    t._height = 2;
    console.log('三角形の面積：' + t.getArea());
    
    t.setBase(10);
    t.setHeight(2);
    console.log('三角形の底辺' + t.getBase());
    console.log('三角形の高さ' + t.getHeight());
    console.log('三角形の面積' + t.getArea()); */

    t.base = 10;
	t.height = 2;
    console.log('三角形の面積' + t.getArea());
	
	console.log('三角形の底辺' + t.base);
    console.log('三角形の高さ' + t.height);
</script>