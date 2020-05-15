//when you get new data check if the data was already added into cart
//to reduce confusion
const search = async (searchField='medi') => {
    const baseUrl = 'https://www.medv.crypt4bits.com/';
    // const baseUrl = 'http://localhost/medv/';

	var expression = new RegExp(searchField, "i");
    var url = 'http://182.18.157.79/medv/api/drug/serDrug?drugName=' + searchField;
    //This code was added to provide proxy for access http site from https
    var proxyUrl = baseUrl+'ajax/proxy_site.php';
    var formData = new FormData();
    formData.append('action', 'GET');
    formData.append('url', url);
    const response = await fetch(proxyUrl,{
    	method : 'POST',
		body : formData
    });

    const result = await response.json();
	const localState = _localStorage.retrieveCart();    
  	if(result.length==0){
  		var returnData = '<li class="list-group-item"><span>No Data Found</span></li>';
  	}else{
	    var returnData = result.map((value, index)=>{
	    	if(value.SearchResult.search(expression) != -1){
		    	 var elements = '<li class="list-group-item"><form><div class="row"><div class="col-md-2" style="position:relative">';
		    	 if (value.Type == "Capsule/Tablet") {
		    	     elements += '<img src="'+baseUrl+'svg/003-drugs.svg" style="top:unset; width:65px">';
		    	 } else if (value.Type == "Drops") {
		    	     elements += '<img src="'+baseUrl+'svg/013-eye-drops.svg" style="top:unset; width:65px">';
		    	 } else if (value.Type == "Suspension") {
		    	     elements += '<img src="'+baseUrl+'svg/011-medicine-2.svg" style="top:unset; width:65px">';
		    	 } else if (value.Type == "Injection") {
		    	     elements += '<img src="'+baseUrl+'svg/007-vaccine.svg" style="top:unset; width:65px">';
		    	 } else if (value.Type == "Syrup") {
		    	     elements += '<img src="'+baseUrl+'svg/020-syrup.svg" style="top:unset; width:65px">';
		    	 } else if (value.Type == "Capsule") {
		    	     elements += '<img src="'+baseUrl+'svg/001-pills.svg" style="top:unset; width:65px">';
		    	 } else if (value.Type == "Tablet") {
		    	     elements += '<img src="'+baseUrl+'svg/006-drug-1.svg" style="top:unset; width:65px">';
		    	 } else if (value.Type == "Cream") {
		    	     elements += '<img src="'+baseUrl+'svg/005-moisturizer.svg" style="top:unset; width:65px">';
		    	 } else if (value.Type == "Lotion") {
		    	     elements += '<img src="'+baseUrl+'svg/019-cosmetics.svg" style="top:unset; width:65px">';
		    	 } else if (value.Type == "Other") {
		    	     elements += '<img src="'+baseUrl+'svg/008-doctor.svg" style="top:unset; width:65px">';
		    	 } else if (value.Type == "gel") {
		    	     elements += '<img src="'+baseUrl+'svg/001-gel.svg" style="top:unset; width:65px">';
		    	 } else if (value.Type == "Solution") {
		    	     elements += '<span class="flaticon-potion" style="font-size:40px; vertical-align:text-top"></span>';
		    	 } else if (value.Type == "Liquid") {
		    	     elements += '<img src="'+baseUrl+'svg/004-patient.svg" style="top:unset; width:65px">';
		    	 } else if (value.Type == "Ointment") {
		    	     elements += '<img src="'+baseUrl+'svg/017-ointment.svg" style="top:unset; width:65px">';
		    	 }
		    	 //the addtocart button should be replaced when already added
		    	 elements += '</div><div class="col-md-6"><a href="#">' 
		    	 			+ value.SearchResult 
		    	 			+ '</a><br><span>' 
		    	 			+ value.DrugDtls 
		    	 			+ '</span></div><div class="col-md-2" style="position:relative">'
		    	 			+'<input type="hidden" name="dname" value="' + value.SearchResult + '">'
		    	 			+'<input type="hidden" name="detail"  value="' + value.DrugDtls + '">'
		    	 			+'<input type="hidden" name="id"  value="' + value.Id + '">'
		    	 			+'<input type="hidden" name="type" value="' + value.Type + '">'
		    	 			+'<input type="number" name="qty" min="1" max="10" value="1" style="width:40%;height:20px;" class="child inc_dec_btn" >'
		    	 			+'</div><div class="col-md-2" style="position:relative">';
		    	 if(localState[value.Id]==undefined){
		    	 	//the item was not added
		    	 	elements += '<input class="btn btn-info ml-2 child add_to_cart" type="button" name="addcart" value="Add to cart" style="width:75%;height:23px;padding:0;padding-top:2px; font-size:12px;color:#fff;"/>'
		    	 			    +'</div></div></form></li>';
		    	 }else{
		    	 	elements += '<input class="btn btn-info ml-2 child add_to_cart" type="button" name="addcart" value="Added" style="width:75%;height:23px;padding:0;padding-top:2px; font-size:12px;color:#fff;"/>'
		    	 			    +'</div></div></form></li>';
		    	 }
		    	 return elements;
	    	}
	    })
  	}
    return returnData;
}