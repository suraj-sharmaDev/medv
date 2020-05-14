//this script was to help avoid the dependency of backend session
//and use the localstorage as dependency for the cart

//the basic idea is to check the change in localstorage
_previousVal = _localStorage.state;
function changeContentInCart(){
	cartCount = document.getElementById('cart-count'); //the  badge 
	cartSummCt = document.getElementById('cart_summ_ct');
	cartItemsList = document.getElementById('cart-items-list');

	cartCount.innerText = Object.keys(_localStorage.state).length;
	cartSummCt.innerText = Object.keys(_localStorage.state).length;

	//now creating a list of medicines
	_medicines = '';
	for(var key in _localStorage.state){
		_medicines += "<div class='row' style='font-size:12px'><div class='col-md-8'>"
					  + _localStorage.state[key]['dname'] +"</div>"
					  +"<div class='col-md-4'>Qty: "
					  +_localStorage.state[key]['qty']+"</div></div>";
	}
	cartItemsList.innerHTML = _medicines;
}