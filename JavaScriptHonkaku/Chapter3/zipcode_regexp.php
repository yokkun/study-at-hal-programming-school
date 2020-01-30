<script>
//var p = /\d{3}-\d{4}/
//gオプションつき
//^は行頭マッチ、$は行末マッチ、|
var p = /^(\d{3}-\d{4})[^\d\-]|[^\d\-](\d{3}-\d{4})[^\d\-]|[^\d\-](\d{3}-\d{4})$/g;
var s = "157-0007私の家の固定の電話番号は092-888-9999で、郵便番号は812-0013です。123-4567";

while  ((result = p.exec(s)) !==null) {
	if(result[1]){console.log(result[1]);}
	if(result[2]){console.log(result[2]);}
	if(result[3]){console.log(result[3]);}	
}

</script>