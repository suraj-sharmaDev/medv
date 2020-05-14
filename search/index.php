<?php
 session_start();
 $search=base64_decode($_GET['search']);
?>


<!DOCTYPE html>
<html lang="en">
  <head>


    <?php include '../include/cssplugin.php';?>
    <style type="text/css">
.field-icon {
  float: right;
  margin-right: 8px;
  margin-top: -23px;
  position: relative;
  z-index: 2;
  cursor:pointer;
}
.field-icon1 {
  float: right;
  right:32px;
  top: 44%;
  position: absolute;
  z-index: 2;
  cursor:pointer;
}
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  margin: 0;
}
.card-counter{
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 100px;
    border-radius: 5px;
    transition: .3s linear all;
  }

  .card-counter:hover{
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }

  .card-counter.primary{
    background-color: #007bff;
    color: #FFF;
  }
   .card-counter i{
    font-size: 5em;
    opacity: 0.2;
  }

  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 32px;
    display: block;
  }

  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 65px;
    font-style: italic;
    text-transform: capitalize;
    opacity: 0.5;
    display: block;
    font-size: 18px;
  }
/* Firefox */
input[type=number] {
  -moz-appearance:textfield;
}
    </style>
</head>
<body>
	<?php include '../include/header.php';?>
<section class="mt-5 mb-5 ">
  <div class="container shadow p-3 mb-5 bg-white rounded">
    <form>
      <input type="hidden" id="searched" value="<?php echo $search;?>">
    </form>
    <h3 style="color: #000">Showing Result for "<b style="color:#004a8e"><?php echo $search;?></b>"</h3>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div id="searchall"></div>
      </div>
      <div class="col-md-4">
        <div class="container ">
      <div class="card-counter">
        
        <span class="count-numbers">12</span>
        <span class="count-name">Flowz</span>
        <i class="fa fa-code-fork"></i>
      </div>
    </div>
      </div>
    </div>
  </div>
</section>
<?php  include '../include/footer.php';?>
</body>
<?php include '../include/jsplugin.php';?>
<script src="http://fast.wistia.net/labs/fresh-url/v1.js" async></script>
<script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>
<script type="text/javascript">
   $(window).on('load', function() {
    /*$('#search').load(function(){*/
        $('#searchall').html('');
          var searchField = $('#searched').val();
          var expression = new RegExp(searchField, "i");
          var url = 'http://182.18.157.79/medv/api/drug/serDrug?drugName=' + searchField;
        $.getJSON(url,function(data){
         /* console.log(data);*/
          $.each(data, function(key,value){
            if(value.SearchResult.search(expression) != -1){
              var elements = '<div class="shadow p-3 mb-3 bg-white rounded"><form class="inner-addon" method="post"><div class="row"><div class="col-md-2" style="position:relative">';
                if(value.Type == "Capsule/Tablet") {    
                  elements +='<img src="../svg/003-drugs.svg" style="top:unset; width:65px">';
                }
                else if(value.Type == "Drops"){
                  elements +='<img src="../svg/013-eye-drops.svg" style="top:unset; width:65px">';
                }
                else if(value.Type == "Suspension"){
                  elements +='<img src="../svg/011-medicine-2.svg" style="top:unset; width:65px">';
                }
                else if(value.Type == "Injection"){
                  elements +='<img src="../svg/007-vaccine.svg" style="top:unset; width:65px">';
                }
                else if(value.Type == "Syrup"){
                  elements +='<img src="../svg/020-syrup.svg" style="top:unset; width:65px">';
                }
                else if(value.Type == "Capsule"){
                  elements +='<img src="../svg/001-pills.svg" style="top:unset; width:65px">';
                }
                else if(value.Type == "Tablet"){
                  elements +='<img src="../svg/006-drug-1.svg" style="top:unset; width:65px">';
                }
                else if(value.Type == "Cream"){
                  elements +='<img src="../svg/005-moisturizer.svg" style="top:unset; width:65px">';
                }
                else if(value.Type == "Lotion"){
                  elements +='<img src="../svg/019-cosmetics.svg" style="top:unset; width:65px">';
                }
                else if(value.Type == "Other"){
                  elements +='<img src="../svg/008-doctor.svg" style="top:unset; width:65px">';
                }
                else if(value.Type == "gel"){
                  elements +='<img src="../svg/001-gel.svg" style="top:unset; width:65px">';
                }
                else if(value.Type == "Solution"){
                  elements +='<span class="flaticon-potion" style="font-size:40px; vertical-align:text-top"></span>';
                }
                else if(value.Type == "Liquid"){
                  elements +='<img src="../svg/004-patient.svg" style="top:unset; width:65px">';
                }
                else if(value.Type == "Ointment"){
                  elements +='<img src="../svg/017-ointment.svg" style="top:unset; width:65px">';
                }
                elements += '</div><div class="col-md-6"><a href="#">'+value.SearchResult+'</a><br><span>'+value.DrugDtls+'</span></div><div class="col-md-2" style="position:relative"><input type="hidden" name="dname" id="dname"  value="'+value.SearchResult+'"><input type="hidden" name="detail" id="detail"  value="'+value.DrugDtls+'"><input type="hidden" name="id" id="id"  value="'+value.Id+'"><input type="hidden" name="type" id="type"  value="'+value.Type+'"><span class="quant">Qty:</span><input type="number" value="1" name="qty" min="1" max="10" style="width:63%;height:30px;" id="qty" class="child qty" ></div><div class="col-md-2" style="position:relative"><input id="cart1" class="btn btn-info ml-2 child" type="submit" name="addcart" value="Add to cart" style="width:75%;height:23px;padding:0;padding-top:2px; font-size:12px;color:#fff;"/></div></div></form></li>';



                $('#searchall').append(elements);

              
            }
            else{
              $('#result').append('<div class="list-group-item"><span>No Data Found</span></div>')
            }
          })
     /*   });*/
    });
   });
</script>

</html>

