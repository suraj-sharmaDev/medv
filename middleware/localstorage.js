class localstorage {

	constructor(){
		this.state = this.initialization();
	}	
	
	initialization() {
		var data;
		if(!localStorage.getItem('cart'))
		{	//if localstorage was not set with default cart data
			data = {};
		    localStorage.setItem('cart', JSON.stringify(data));
		}else{
			//if already exists cart data in localstorage
			data = localStorage.getItem('cart');
			data = JSON.parse(data);
			console.log(data);
		}
		return data;
	}

	addCart(data){
		var localState = this.retrieveCart();
		//check if the given product already exists then just
		//increment the qty
		if(localState[data.id]!==undefined){
			localState[data.id]['qty']++;
		}else{
			localState[data.id] = data;
		}
		//clear localStorage before adding new data
		this.state = localState;
		localStorage.removeItem('cart');
		localStorage.setItem('cart', JSON.stringify(localState));
	}

	delCart(data){
		var localState = this.retrieveCart();
		//check if the given product already exists then just
		//increment the qty
		if(localState[data.id]!==undefined){
			localState[data.id]['qty']--;
		}else{
			//nothing
		}
		this.state = localState;
		//clear localStorage before adding new data
		localStorage.removeItem('cart');
		localStorage.setItem('cart', JSON.stringify(localState));
	}

	removeFromCart(id){
		var localState = this.retrieveCart();
		//check if the given product already exists then just
		//increment the qty
		if(localState[id]!==undefined){
			delete localState[id];
		}else{
			//nothing
		}
		this.state = localState;
		//clear localStorage before adding new data
		localStorage.removeItem('cart');
		localStorage.setItem('cart', JSON.stringify(localState));	
		console.log(this.state);
	}
	retrieveCart() {
		return JSON.parse(localStorage.getItem('cart'));
	}

	emptyCart(){
		this.state = {};
		localStorage.clear();
	}	
}

