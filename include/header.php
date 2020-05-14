<?php
if(isset($_POST['addcart'])){
  $dname=$_POST['dname'];
  $quantity=$_POST['qty'];
  $type=$_POST['type'];
  $detail=$_POST['detail'];
  $id=$_POST['id'];

    $b=array("product"=>"$dname","quantity"=>"$quantity","type"=>"$type","item_id"=>"$id","drugDtls"=>"$detail");
  /*array_push($_SESSION['cart'],$b);*/ // Items added to cart
  $_SESSION['cart'][  ] =  $b;
}
  


/*echo "<br>Number of Items in the cart = ".sizeof($_SESSION['cart']);
require 'menu.php';*/

?>
<?php 

define('__ROOT__', dirname(__FILE__));
if(isset($_SESSION['custid']) && !empty($_SESSION['custid'])){
  $custid=$_SESSION['custid'];
  require_once(__ROOT__.'/curl_helper.php');
    $action = "GET";
   $url = 'http://182.18.157.79/medv/api/customer/profile';
    /*echo "Trying to reach ...";
    echo $url;*/
    $parameters = array("custId" => $custid);
    $result = CurlHelper::perform_http_request($action, $url, $parameters);
/*print_r($result);*/
$resultData = json_decode($result, TRUE);
$_SESSION['custname']=$resultData['customerName'];
}
else
{
  $custid=" ";
}
if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
  }
?>

<!-- <link rel="stylesheet" type="text/css" href="font/flaticon.css"> -->
<style type="text/css">
  body{
    font-family: 'Muli',sans-serif;
  }
  .navigation{
    border-bottom: 1px solid #004a8e;
  }
  input[type='search']{
    width: 400px !important;
  }
  .btn-medv{
    border-radius: 17px;
    background-color: #004a8e;
    color: #fff;
    text-transform: uppercase;
    border: 1px solid #24d5e1;
    font-size:12px;
  }
  .btn-medv:hover{
    border: 1px solid #004a8e;
    background-color: transparent;
  }
  /*input#search {
    background-image: url(images/search-button.png);
    background-size: auto;
    background-repeat: no-repeat;
    text-indent: 20px;
    background-position: left;
}*/
.navbar-nav{
  line-height: 60px;
}
.navbar-nav li .dropdown-menu .dropdown-item{
  line-height: 25px;
  /*color: #fff;*/
}
.navbar-nav li .cartdrop .dropdown-item{
  line-height: 25px;
  color: #fff;
}
.navbar-nav li .dropdown-menu .dropdown-item:hover
{
  background-color: #004a8e;
  color: #24d5e1 !important;
}
.navbar-nav li .cartdrop .dropdown-item:first-child{
  color: #24d5e1 !important;
}
.navbar-nav li .cartdrop .dropdown-item:first-child:hover{
  color: #24d5e1 !important;
}
.navbar-nav li .cartdrop .dropdown-item:hover{
  color: #fff !important;
}
.dropdown-menu .dropdown-item .btn{
  background-color: #24d5e1;
  color: #fff !important;
}
.dropdown-menu .dropdown-item .btn:hover{
  background-color: #fff !important;
  color: #004a8e !important;
  font-weight: bold;
}
.navbar-nav li a span{
  color: #000;
  
  font-size: 15px;
}
.navbar-nav li{
  padding: 0px 10px;
 
}
.navbar-nav li .list-group .list-group-item{
  line-height: 30px;
  font-size: 12px;
  color: #000;
}
.navbar{
  height: auto;
  padding-top: 0px;
  padding-bottom: 0px;
}
.navbar-nav li .form-control{
  height: calc(1.5em + 0.50rem + 2px);
  font-size:0.9rem;
}
.inner-addon,.right-addon { 
    position: relative; 
}

/* style icon */
.inner-addon img {
  position: absolute;
  padding: 10px;
  pointer-events: none;
  top: 21px;

}
.right-addon .btn-search{
  position: absolute;
  height: calc(1.5em + 0.50rem + 2px);
    top: 24px;
    line-height: initial;
    right: 17px;
    border-radius: 0 .25rem .25rem 0;
    background-color: #004a8e;
    color: #fff;
    border:0;
    font-size: 14px;
    padding: 6px;
    text-indent: 0;
}
.dropdown-menu{
  left:unset;
}
.child{
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
}
html {
  --scrollbarBG: #CFD8DC;
  --thumbBG: #90A4AE;
}
.list-group::-webkit-scrollbar {
  width: 11px;
}
.list-group{
  width: 600px;
  height: 500px;
  overflow: auto;
  border-top: 1px solid rgba(0,0,0,0.125);
  border-top-left-radius: .25rem;
  border-top-right-radius: .25rem;
  scrollbar-width: thin;
  scrollbar-color: var(--thumbBG) var(--scrollbarBG);
}.list-group::-webkit-scrollbar-track {
  background: var(--scrollbarBG);
}
.list-group::-webkit-scrollbar-thumb {
  background-color: var(--thumbBG) ;
  border-radius: 6px;
  border: 3px solid var(--scrollbarBG);
}
.list-group-item a{
  color: #000;
}
.list-group-item a:hover{
text-decoration: none;
color: #004a8e;
}
.list-group-item:hover{
  background: #f4f7fb;
}
#result,#mycart{
  display: none;
}
.list-group-item:nth-child(even) { background: #f4f7fb; }
.right-addon input { text-indent: 20px; padding-right: 68px; }
.cartct{
  padding: 2px 4px;
    font-size: 11px !important;
    font-weight: bold;
    border-radius: 10px;
    background-color: #004a8e;
    position: absolute;
    margin-left: 30px;
    line-height: 1;
    color: #fff !important;

}
.list-group-item input{
       text-indent: unset;
   padding-right: unset;
}
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
 /* -webkit-appearance: none;
  margin: 0;*/
}

/* Firefox */
input[type=number] {
  /*-moz-appearance: textfield;*/
}
.dropdown .cartdrop:after {
    content: "";
    width: 0;
    height: 0;
    position: absolute;
    bottom: 100%;
    right: 48%;
    border-width: 0 6px 6px 6px;
    border-style: solid;
    border-color: #004a8e transparent;    
}
.cartdrop{
  background-color: #004a8e;
  top: 62px;
  left: -110px;
  width: 300px;
}
.dropdown .cartdrop .dropdown-divider{
  border-top:1px solid #aaa;
}
.dropdown .cartdrop:before {
    content: "";
    width: 0;
    height: 0;
    position: absolute;
    bottom: 100%;
    right: 48%;
    border-width: 0 8px 8px 8px;
    border-style: solid;
    border-color: #004a8e transparent;    
}
.inner-addon,.right-addon { 
    position: relative; 
}

/* style icon */
.inner-addon img, .inner-addon .quant{
  position: absolute;
  padding: 10px;
  pointer-events: none;
  top: 21px;

}
.inner-addon .quant{
  position: absolute;
  padding: 0px;
  pointer-events: none;
  top: 12px;
  left:30px;
  z-index: 99;
  color: #6e6f71;

}
.inner-addon .qty { 
  text-indent: 33px;
  padding-left: 4px;
}
.qty::placeholder{
  color: #000;
}
.right-addon .btn-search{
  position: absolute;
  height: calc(1.5em + 0.50rem + 2px);
    top: 24px;
    line-height: initial;
    right: 17px;
    border-radius: 0 .25rem .25rem 0;
    background-color: #004a8e;
    color: #fff;
    border:0;
    font-size: 14px;
    padding: 6px;
    text-indent: 0;
}
</style>
</head>
<body>
<div class="container-fluid bg-white navigation shadow sticky-top">
<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <a class="navbar-brand" href="<?php echo $URL ?>/index.php"><img src="<?php echo $URL;?>/images/Logo.png" alt="logo" class="img-fluid" width="130"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" >
    
    <ul class="navbar-nav mx-auto my-auto" >
      <li class="nav-item">
        <!-- <div class="inner-addon left-addon">
    <i class="glyphicon glyphicon-user"></i>
    <input type="text" class="form-control" />
</div> -->
        <form class="form-inline my-2 my-lg-0 nav-link inner-addon right-addon" >
          <img src="<?php echo $URL;?>/images/search-button.png">
          <input class="form-control mr-sm-2" type="search" minlength="2" name="search" id="search" placeholder="Search for all your medical needs" aria-label="Search" autocomplete="off" required title="3 characters minimum">

<!-- Use case on click of search button don't do anything than fetching the data inside dataset of drop down -->
          <input type="button" class="btn btn-search" id="srcBtn" name="searchall" value="Search">

          <ul class="list-group" id="result" style="position: absolute;"></ul>
        </form>
      </li>
      <li class="nav-item" style="
    line-height: 77px;"><a class="btn btn-medv my-2 my-sm-0" href="upload.php">Upload Prescription</a></li>
      <?php
      if(empty($_SESSION['cart'])){
        ?>
        <li class="nav-item ml-5 "  style="position: relative">
        <a href="" class="nav-link disabled" ><img src="<?php echo $URL;?>/images/cart.png" style="position: fixed"> <span id="cart-count" class="cartct">0</span></a></li>
        <?php
      }
     
      else{
      ?>
          <li class="nav-item ml-5 dropdown "  style="position: relative">
        <a href="#" class="nav-link" id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'><img src="<?php echo $URL;?>/images/cart.png" style="position: fixed"> <span id="cart-count" class="cartct"><?php echo count($_SESSION['cart']); ?></span></a>
          <ul class='dropdown-menu cartdrop' aria-labelledby='navbarDropdown'>
          <li class="dropdown-item"><span>Order Summary</span><span class="cart_summ_ct" style="padding-left: 94px"><?php echo count($_SESSION['cart']); ?></span><span> item(s)</span></li>
          <li class='dropdown-divider'></li>
          <li class='dropdown-item pt-2 pb-2 cart-items-list'>
            <?php
            if(isset($_SESSION['cart'])){

             
              foreach ($_SESSION['cart'] as $item_id =>$val) {
                $product=$val['product'];
                $quantity=$val['quantity'];
                $type=$val['type'];
                echo "<div class='row' style='font-size:12px'><div class='col-md-8'>$product</div><div class='col-md-4'>Qty: $quantity</div></div>"; 
              }
             

              }else{
              echo "cart is empty";
              }
              ?>
            </li>
          
          <li class='dropdown-item pt-2'><a href="<?php echo $URL;?>/viewcart" class="btn">PROCEED TO CART</a></li>
        </ul>
        </li>
      <?php } ?>
      
      <li class="nav-item ml-5" >
        <?php
        if($custid!=" "){
          
          echo "<a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'><img src='$URL/images/account.png'><span>".$resultData['customerName']."</span> </a>
          <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
          <a class='dropdown-item' href='$URL/user/myaccount'>My Account</a>
          <a class='dropdown-item' href='#'>My Wishlist</a>
          <a class='dropdown-item' href='#'>Health Records</a>
          <a class='dropdown-item' href='#'>My Orders</a>
          <a class='dropdown-item' href='#'>My Refills</a>
          <div class='dropdown-divider'></div>
          <a class='dropdown-item' href='$URL/logout.php'>Sign Out</a>
        </div>
          ";
        }
        else
        {
          echo "<a class='nav-link' href='$URL/user/' ><img src='$URL/images/account.png'><span> SignIn/SignUp</span> </a>";
        }
        
        ?>
      </li>
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>-->
      <!-- <li class="nav-item">
        <a class="nav-link" href="#" ><img src="images/account.png" ><span class="pt-1"> For Buyers</span></a>
      </li>  -->
    </ul>
    
  </div>
</nav>
</div>
 <script type="text/javascript">
 
   /* var globalTimeout = null; */
 /*function clicksearch(){
    var searchField = $('#search').val();
    window.location = "search/?search="+searchField;
    } */   
 $(document).ready(function() {
      /*if (globalTimeout != null) {
    clearTimeout(globalTimeout);
  }*/
  /*globalTimeout = setTimeout(function() {
    globalTimeout = null;*/

    // $("html").click(function() {
    //   $("#result").hide();
    //   // $("#mycart").hide();
    // });

    // $("#result").click(function(e) {
    //     e.stopPropagation();
    // });
    $('html').click(function(event) {
        if ($(event.target).closest('#result').length === 0) {
            $('#result').hide();
        }
    });
});
let searchField = document.getElementById('search');
timeout = null;   
//when typing
searchField.addEventListener('keyup', function (e){
  clearTimeout(timeout);
  if ($(this).val().length >= 3) {
    timeout = setTimeout(function () {
          $('#result').show('slow');
          $('#result').html('');
          var searchField = $('#search').val();
          search(searchField)
          .then((result)=>{
            $('#result').append(result);
            console.log(result)
          })
          .catch((err)=>{
            console.log(err)
          })
       }, 1000);
  }
  else{
    $('#result').hide('slow');
  }
});
//when clicked search button
 $('#srcBtn').click(()=>{
  $('#result').hide('slow');
  clearTimeout(timeout);
  if($('#search').val().length >=3 ){
    $('#result').show('slow');
    $('#result').html('');    
    search($('#search').val())
    .then((result)=>{
      $('#result').append(result);
      console.log(result);
    })
    .catch((err)=>{
      console.log(err)
    })    
  }
 });

 $('#cart1').click(function(){
    $('#navbarDropdown').click(function(){
      $('.cartdrop').show('fade');
    });
  })
  
    // $(document).on('click','.add_to_cart',function(e){
    //   e.preventDefault();
    //   var $this = $(this);
    //   var url = $(this).parents('form').attr('action');
    //   //alert(url);
    //   $.ajax({
    //     url: url,
    //     type: 'post',
    //     dataType: 'json',
    //     data: $(this).parents("form").serialize(),
    //     success: function(resp) {
    //         console.log(resp);
    //         $('.cartct').text(resp.count);
    //         $('.cart_summ_ct').text(resp.count);
    //         $('.cart-items-list').append("<div class='row' style='font-size:12px'><div class='col-md-8'>"+resp.productname+"</div><div class='col-md-4'>Qty: "+resp.qty+"</div></div>");
    //     }
    //   })
    // //   $.get(url,{},function(){});
    // })
  
</script>
<?php
if(isset($_POST['searchall'])){
$search=base64_encode($_POST['search']);
echo "<script>
window.location = '$URL/search/?search=$search';
</script>";

}
?>
