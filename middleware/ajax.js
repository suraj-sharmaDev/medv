const search = async (searchField='medi') => {
	var expression = new RegExp(searchField, "i");
    var url = 'http://182.18.157.79/medv/api/drug/serDrug?drugName=' + searchField;
    const response = await fetch(url);
    const result = await response.json();
  	if(result.length==0){
  		var returnData = '<li class="list-group-item"><span>No Data Found</span></li>';
  	}else{
	    var returnData = result.map((value, index)=>{
	    	if(value.SearchResult.search(expression) != -1){
		    	 var elements = '<li class="list-group-item"><div class="row"><div class="col-md-2" style="position:relative">';
		    	 if (value.Type == "Capsule/Tablet") {
		    	     elements += '<img src="svg/003-drugs.svg" style="top:unset; width:65px">';
		    	 } else if (value.Type == "Drops") {
		    	     elements += '<img src="svg/013-eye-drops.svg" style="top:unset; width:65px">';
		    	 } else if (value.Type == "Suspension") {
		    	     elements += '<img src="svg/011-medicine-2.svg" style="top:unset; width:65px">';
		    	 } else if (value.Type == "Injection") {
		    	     elements += '<img src="svg/007-vaccine.svg" style="top:unset; width:65px">';
		    	 } else if (value.Type == "Syrup") {
		    	     elements += '<img src="svg/020-syrup.svg" style="top:unset; width:65px">';
		    	 } else if (value.Type == "Capsule") {
		    	     elements += '<img src="svg/001-pills.svg" style="top:unset; width:65px">';
		    	 } else if (value.Type == "Tablet") {
		    	     elements += '<img src="svg/006-drug-1.svg" style="top:unset; width:65px">';
		    	 } else if (value.Type == "Cream") {
		    	     elements += '<img src="svg/005-moisturizer.svg" style="top:unset; width:65px">';
		    	 } else if (value.Type == "Lotion") {
		    	     elements += '<img src="svg/019-cosmetics.svg" style="top:unset; width:65px">';
		    	 } else if (value.Type == "Other") {
		    	     elements += '<img src="svg/008-doctor.svg" style="top:unset; width:65px">';
		    	 } else if (value.Type == "gel") {
		    	     elements += '<img src="svg/001-gel.svg" style="top:unset; width:65px">';
		    	 } else if (value.Type == "Solution") {
		    	     elements += '<span class="flaticon-potion" style="font-size:40px; vertical-align:text-top"></span>';
		    	 } else if (value.Type == "Liquid") {
		    	     elements += '<img src="svg/004-patient.svg" style="top:unset; width:65px">';
		    	 } else if (value.Type == "Ointment") {
		    	     elements += '<img src="svg/017-ointment.svg" style="top:unset; width:65px">';
		    	 }
		    	 elements += '</div><div class="col-md-6"><a href="#">' 
		    	 			+ value.SearchResult 
		    	 			+ '</a><br><span>' 
		    	 			+ value.DrugDtls 
		    	 			+ '</span></div><div class="col-md-2" style="position:relative">'
		    	 			+'<input type="hidden" name="dname" id="dname"  value="' + value.SearchResult + '">'
		    	 			+'<input type="hidden" name="detail" id="detail"  value="' + value.DrugDtls + '">'
		    	 			+'<input type="hidden" name="id" id="id"  value="' + value.Id + '">'
		    	 			+'<input type="hidden" name="type" id="type"  value="' + value.Type + '">'
		    	 			+'<input type="number" name="qty" min="1" max="10" value="1" style="width:40%;height:20px;" id="qty" class="child" >'
		    	 			+'</div><div class="col-md-2" style="position:relative">'
		    	 			+'<input id="cart1" class="btn btn-info ml-2 child add_to_cart" type="button" name="addcart" value="Add to cart" style="width:75%;height:23px;padding:0;padding-top:2px; font-size:12px;color:#fff;"/>'
		    	 			+'</div></div></li>';
		    	 return elements;
	    	}
	    })
  	}
    return returnData;
}