<script>
//5.5.5 gen prime
//素数を求めるジェネレータ
function* genPrimes(){
	let num = 2; //素数の開始値
	while (true){
		if(isPrime(num)){yield num;}
		num++;
	}
}
//引数valueが素数か判定
function isPrime(value){
	let prime = true;
	for(let i=2; i<=Math.floor(Math.sqrt(value)); i++){
		if(value % i === 0){
			prime = false;
			break;
		}
	}
	return prime;
}
for (let value of genPrimes()){
	if(value > 100){break;}
	console.log(value);
}

</script>