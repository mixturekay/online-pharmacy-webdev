
var value = 1

function increamentFunc(){
		
		if (value >= 1 && value <= 9) {
			value = value + 1
			console.log(value)
		}
		document.querySelector(".qty_input").value = value;
}		

function decreamentFunc(){
		
		if (value > 1 && value <= 10 ) {
			value = value - 1
			console.log(value)
		}
		document.querySelector(".qty_input").value = value;
}

document.querySelector(".qty-up").addEventListener('click', function (e){
		increamentFunc()

})
document.querySelector(".qty-down").addEventListener('click', function (e){
		decreamentFunc()

})
