class localstorage {

	constructor(val){
		console.log('Session custId :', val);		
		this.state = this.initialization();
		this.userId = val;
		this.uploadImage = this.initialization(false);
		// console.log(JSON.parse(localStorage.getItem('uploadImage')));
	}	
	
	initialization(cart=true) {
		var data;
		if(cart){
			if(!localStorage.getItem('cart'))
			{	//if localstorage was not set with default cart data
				data = {};
			    localStorage.setItem('cart', JSON.stringify(data));
			}else{
				//if already exists cart data in localstorage
				data = localStorage.getItem('cart');
				data = JSON.parse(data);
				console.log('meds : ',data);
			}
		}else{
			if(!localStorage.getItem('uploadImage'))
			{
				data = {};
			    localStorage.setItem('uploadImage', JSON.stringify(data));
			}else{
				//if already exists uploadImage data in localstorage
				data = localStorage.getItem('uploadImage');
				data = JSON.parse(data);
				console.log('images : ',data);
			}			
		}
		return data;
	}

	addCart(data){
		var localState = this.retrieveCart();
		//check if the given product already exists then just
		//increment the qty
		if(localState[data.id]!==undefined){
			if(localState[data.id]['qty'] < 5){
				localState[data.id]['qty']++;
			}else{
				alert('Cannot Add more than 5');
				return false;
			}
		}else{
			//if the item is newly added check if its quantity is sanitized
			if(data.qty < 5){
				localState[data.id] = data;
			}else{
				data.qty = 5;
				localState[data.id] = data;				
			}
		}
		//clear localStorage before adding new data
		this.state = localState;
		localStorage.removeItem('cart');
		localStorage.setItem('cart', JSON.stringify(localState));
	}

	incCart(id, qty){
		var localState = this.retrieveCart();
		//check if the given product already exists then just
		//increment the qty
		if(localState[id]!==undefined){
			if(qty <= 5){
				localState[id]['qty'] = qty;
			}else{
				alert('Cannot Add more than 5 Items');
				localState[id]['qty'] = 5;
			}
		}else{
			// nothing
		}
		//clear localStorage before adding new data
		this.state = localState;
		localStorage.removeItem('cart');
		localStorage.setItem('cart', JSON.stringify(localState));
		return true;
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
	retrieveCart(cart=true) {
		if(cart){
			return JSON.parse(localStorage.getItem('cart'));
		}else{
			return localStorage.getItem('userId');			
		}
	}

	emptyCart(){
		this.state = {};
		this.userId = 0;
		this.uploadImage = {};
		console.log('clearing');
		localStorage.clear();
	}	

	logIn(userId){
		this.userId = userId;
		return true;
	}

	logOut(){
		this.userId = 0;
		return true;
	}

	imageUploader(id, img){
		var localState = JSON.parse(localStorage.getItem('uploadImage'));
		localState[id] = img;
		this.uploadImage = localState;
		localStorage.setItem('uploadImage', JSON.stringify(localState));
		return true;
	}

	deleteImage(id){
		var localState = JSON.parse(localStorage.getItem('uploadImage'));
		delete localState[id];
		this.uploadImage = localState;
		localStorage.setItem('uploadImage', JSON.stringify(localState));
		return true;
	}
}

