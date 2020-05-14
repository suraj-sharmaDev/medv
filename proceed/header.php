<?php
  if(isset($_SESSION['custid']) && !empty($_SESSION['custid'])){
  $custid=isset($_SESSION['custid'])?$_SESSION['custid']:0;
  $mobNo=isset($_SESSION['mobNo'])?$_SESSION['mobNo']:'';
  $email=isset($_SESSION['email'])?$_SESSION['email']:'';
  $custname=isset($_SESSION['custname'])?$_SESSION['custname']:'';
}
?>
<?php
if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
  }
/*print_r($_SESSION['cart']);*/
?>

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


<div class="container-fluid bg-white navigation shadow sticky-top">
<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <a class="navbar-brand" href="<?php echo $URL ?>/index.php"><img src="<?php echo $URL;?>/images/Logo.png" alt="logo" class="img-fluid" width="130"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" >
    
    <ul class="navbar-nav" >
      <li class="nav-item ">
        <a href="" class="nav-link disabled"><div style="width:25px;height: 25px;background-color: #004a8e;border-radius: 50%;float: left;margin-top: 17px;position: relative;margin-right: 5px;"><span style="color: #24d5e1;position: absolute;top: -17px; left: 8px; ">1</span></div> My Cart</a>
      </li>
      <li class="nav-item ">
        <a href="" class="nav-link disabled "><div style="width:25px;height: 25px;background-color: #004a8e;border-radius: 50%;float: left;margin-top: 17px;position: relative;margin-right: 5px;"><span style="color: #24d5e1;position: absolute;top: -17px; left: 8px; ">2</span></div> Order Summary</a>
      </li>
      <li class="nav-item">
        <a href="" class="nav-link text-dark"><div style="width:25px;height: 45px;background-color: #004a8e;border-bottom-left-radius: 50%;border-bottom-right-radius: 50%;float: left;padding-top: 17px;position: relative;margin-right: 5px;"><span style="color: #24d5e1;position: absolute;top: -17px; left: 8px; padding-top: 18px;">3</span></div> Request Quote</a>
      </li>
    </ul>
    
  </div>
</nav>
</div>