<html>
	<head>
		<title>入力ボックス・選択ボックスの値を取得</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script>
        function isNumber(num){
			let reg = /^[\+\-]?\d+$/;
			return reg.test(num);
        }
       	document.addEventListener('DOMContentLoaded',function(){
           	document.getElementById('btn').addEventListener('click',function(){

    			let op1 = document.getElementById('operand1').value;
    			let op2 = document.getElementById('operand2').value;
    			let operator = document.getElementById('operator').value;
    			let result = document.getElementById('result');
    			let flag = true;
    			if(!isNumber(op1)){
    				flag = false;
    				alert('数値を入力してください');
    			}
    			if(operator === ''){
    				flag = false;
    				alert('演算子を入力してください');
    			}
    			if(!isNumber(op2)){
    				flag = false;
    				alert('数値を入力してください');
    			}
    			let temp;
    			if(flag){
    				op1 = op1 - 0;
    				op2 = op2 - 0;
    				switch(operator){
    					case '+':
    						temp = op1 + op2;
    						break;
    					case '-':
    						temp = op1 - op2;
    						break;
    					case '*':
    						temp = op1 * op2;
    						break;
    					case '/':
    						temp = op1 / op2;
    						break;
    				}
    				result.textContent = temp;
    			}
			});
        });
        </script>
	</head>
	<body>
		<form>
			<input id="operand1" name="operand1" type="text" size="10" />
			<select id="operator">
				<option value=""></option>
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">*</option>
				<option value="/">/</option>
			</select>
			<input id="operand2" name="operand2" type="text" size="10" />
			<label>=</label>
			<span id="result"></span><br>
			<input id="btn" type="button" value="計算" />
		</form>
		<div id="result"></div>
	</body>
</html>