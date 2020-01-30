<script>
function Triangle(){ 
	//プライベートプロパティの定義（function命令か関数リテラルでもOK）
	var _base; //クロージャー（varで宣言した値が消えないようにメソッド定義する）
	var _height; //底辺と高さの変数を保持 プライベート_

	//definePropertyでの定義
    // 	Object.defineProperty (
    // 		this,
    // 		'base',
    // 		{ 
    // 			get: function(){
    // 				return _base;
    // 			},
    // 			set: function(base){
    // 				if(typeof base === 'number' && base > 0){
    // 					_base = base;
    // 				}
    // 			}
    // 		}
    // 	);
    // 	Object.defineProperty (
    // 		this,
    // 		'height',
    // 		{
    // 			get: function(){
    // 				return _height;
    // 			},
    // 			set: function(height){
    // 				if(typeof height === 'number' && height >0){
    // 					_height = height;
    // 				}
    // 			}
    // 		}
    // 	);

    //definePropertiesでまとめて書く
	Object.defineProperties(
		this,
		{ 
			base: {
				get: function (){
					return _base;
				},
				set: function(base){
					if(typeof base === 'number' && base >0){
						_base = base;
					}
				}
			},
			height: {
				get: function (){
					return _height;
				},
				set: function(height){
					if(typeof height === 'number' && height >0){
						_height = height;
					}
				}
			}
		}	
	);//defineProperties
} //コンストラクタ
//プライベートメンバーにアクセスしない（できない）メソッドの定義
Triangle.prototype.getArea = function(){
	return this.base * this.height / 2;
}


var t = new Triangle();
	
    t.base = 10;
	t.height = 2;
    console.log('三角形の面積' + t.getArea());
	
	console.log('三角形の底辺' + t.base);
    console.log('三角形の高さ' + t.height);
</script>