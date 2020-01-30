<script>
var Order = function(unitId = 1, unitName, unitAmount, unitPrice){
	this.unitId = unitId;
	this.unitName = unitName;
	this.unitAmount = unitAmount;
	this.unitPrice = unitPrice;
};


var order = new Order(1 , 'サンプラーCD1',2,500);

Order.prototype.getSum = function(){
	return this.unitAmount * this.unitPrice + '円';
}
console.log(order.getSum());
</script>