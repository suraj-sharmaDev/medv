//this script was to help avoid the dependency of backend session
//and use the localstorage as dependency for the cart

//the basic idea is to check the change in localstorage
_previousVal = _localStorage.state;

//this function affects the header.php
function changeContentInCart(addClicked=false){
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
	//check if the view cart should also be refreshed
	if(/viewcart/i.test(window.location.pathname) && Object.keys(_localStorage.state).length > 0 && addClicked){
		changeContentInView();
		console.log('called from cart');
	}
}

//this affects index.php in viewcart folder
function changeContentInView(){
	console.log('change view');
	cartCount = document.getElementById('cart-count-div');
	cartDivView = document.getElementById('cart-div-view');
	cartCount.innerText = Object.keys(_localStorage.state).length;	
	//now creating a list of medicines
	_medicines = '';	
	if(Object.keys(_localStorage.state).length > 0){
		for(var key in _localStorage.state){
		 	_medicines += "<div class='shadow p-3 mb-3 bg-white rounded'>"
					+"<div class='inner-addon'>"
					+"<div class='row'>"
					+"<div class='col-md-2' style='position:relative'>";			
			//find appropriate icon
			if (_localStorage.state[key]['type'] == "Capsule/Tablet") {
			    _medicines += '<img src="../svg/003-drugs.svg" style="top:unset; width:65px">';
			} else if (_localStorage.state[key]['type'] == "Drops") {
			    _medicines += '<img src="../svg/013-eye-drops.svg" style="top:unset; width:65px">';
			} else if (_localStorage.state[key]['type'] == "Suspension") {
			    _medicines += '<img src="../svg/011-medicine-2.svg" style="top:unset; width:65px">';
			} else if (_localStorage.state[key]['type'] == "Injection") {
			    _medicines += '<img src="../svg/007-vaccine.svg" style="top:unset; width:65px">';
			} else if (_localStorage.state[key]['type'] == "Syrup") {
			    _medicines += '<img src="../svg/020-syrup.svg" style="top:unset; width:65px">';
			} else if (_localStorage.state[key]['type'] == "Capsule") {
			    _medicines += '<img src="../svg/001-pills.svg" style="top:unset; width:65px">';
			} else if (_localStorage.state[key]['type'] == "Tablet") {
			    _medicines += '<img src="../svg/006-drug-1.svg" style="top:unset; width:65px">';
			} else if (_localStorage.state[key]['type'] == "Cream") {
			    _medicines += '<img src="../svg/005-moisturizer.svg" style="top:unset; width:65px">';
			} else if (_localStorage.state[key]['type'] == "Lotion") {
			    _medicines += '<img src="../svg/019-cosmetics.svg" style="top:unset; width:65px">';
			} else if (_localStorage.state[key]['type'] == "Other") {
			    _medicines += '<img src="../svg/008-doctor.svg" style="top:unset; width:65px">';
			} else if (_localStorage.state[key]['type'] == "gel") {
			    _medicines += '<img src="../svg/001-gel.svg" style="top:unset; width:65px">';
			} else if (_localStorage.state[key]['type'] == "Solution") {
			    _medicines += '<span class="flaticon-potion" style="font-size:40px; vertical-align:text-top"></span>';
			} else if (_localStorage.state[key]['type'] == "Liquid") {
			    _medicines += '<img src="../svg/004-patient.svg" style="top:unset; width:65px">';
			} else if (_localStorage.state[key]['type'] == "Ointment") {
			    _medicines += '<img src="../svg/017-ointment.svg" style="top:unset; width:65px">';
			}
			_medicines += "</div><div class='col-md-6'><a href='#'>"
						  +_localStorage.state[key]['dname']
						  +"</a><br><span style='font-size:13px'>"
						  +_localStorage.state[key]['detail']+"</span></div><div class='col-md-2' style='position:relative'>"
						  +"<input type='hidden' name='dname' class='dname' value='"+_localStorage.state[key]['dname']+"'>"
						  +"<input type='hidden' name='id' value='"+key+"' class='item_id'>"
						  +"<input type='hidden' value='"+key+"' class='arr_index'>"
						  +"<span class='quant'>Qty:</span>"
						  +"<input type='number' value='"+_localStorage.state[key]['qty']+"' onchange='qtyChange(this);' min='1' max='10' style='width:63%;height:30px;' class='child qty' >"
						  +"</div><div class='col-md-2' style='position:relative'>"
						  +"<button onclick='remove_med("+key+")' class='btn ml-2 child' name='remove' style='width:75%;height:35px;padding:0; font-size:14px;background-color:#004a8e;color:#24d5e1' >"
						  +"<i class='fa fa-trash text-danger' aria-hidden='true'></i> Remove</button>"
						  +"</div></div></div></div>";
		}		
		cartDivView.innerHTML = _medicines;
	}else{
		cartDivView.innerHTML = _medicines;		
	}
}