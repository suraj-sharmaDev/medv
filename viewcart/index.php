<?php

 session_start();

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
    /*box-shadow: 2px 2px 10px #DADADA;*/
    box-shadow: 0px 0px 20px #333;
    margin: 5px;
    padding: 5px 10px;
    background-color: #fff;
    height: auto;
    border-radius: 5px;
    transition: .3s linear all;
  }

  /*.card-counter:hover{
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }*/

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
.upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
  width: 300px
}

.upload-btn-wrapper .btn {
  /*border: 2px solid gray;*/
  color: #fff;

  background-color: #004a8e;
  padding: 8px 20px;
  border-radius: 8px;
  font-size: 18px;
  font-weight: bold;
  cursor:pointer;
}

.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
#inline-popups .btn {
  /*border: 2px solid gray;*/
  color: #fff;
  text-transform: uppercase;
  background-color: #25d5e2;
  padding: 8px 20px;
  border-radius: 8px;
  font-size: 18px;
  font-weight: bold;
  cursor:pointer;
  width: 300px;
}

/*#inline-popups .btn:before {
    content: "";
    width: 0;
    height: 0;
    position: absolute;
    bottom: 100%;
    right: 35%;
    border-width: 0 0px 16px 20px;
    border-style: solid;
    border-color: #25d5e2 transparent;    
}
#inline-popups .btn:after {
    content: "";
    width: 0;
    height: 0;
    position: absolute;
    bottom: 100%;
    right: 35%;
    border-width: 0 6px 6px 6px;
    border-style: solid;
    border-color: #25d5e2 transparent;    
}*/
#inline-popups{
  position: relative;
}
#third {
    padding-top: 75px;
     margin-bottom: 0px; 
}
#success img{
    width: 40%;
    position: absolute;
    top: -88px;
    left: 30%;
}
input[type="file"] {
  display: block;
}
.imageThumb {
  max-height: 75px;
  border: 2px solid;
  padding: 1px;
  cursor: pointer;
  max-width: 90px;
}
.pip {
  display: inline-block;
  margin: 10px 10px 0 0;
}
.remove {
  display: block;
  background: #444;
  border: 1px solid black;
  color: black;
  text-align: center;
  cursor: pointer;
  position: absolute;
    border-radius: 50%;
    top: 42px;
    padding: 5px;
    padding-top: 0;
    padding-bottom: 0;
    z-index: 10;
}
.remove:hover {
  background: white;
  color: black;
  border: 1px solid black;
}
    </style>
</head>
<body>
	<?php include '../include/header.php';?>
  
<section class="mt-5 mb-5 ">
  <div class="container shadow  mb-5 bg-white rounded" style="padding: 15px 30px">
    <h3 style="color: #000; font-size: 1.5rem;">
      <span style="color:#004a8e;padding-right:5px" id="cart-count-div"></span> 
      items in cart
    </h3>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <!-- Changes made to remove dependency to backend session -->
        <div id="cart-div-view">
          
        </div>
        <!-- end of made changes -->
      </div>
      <div class="col-md-4 text-center">
        <form enctype="multipart/form-data" method="post" >
          <div class="upload-btn-wrapper">
            <button class="btn form-control" >+ Upload Prescription</button>
            <input type="file" name="files[]" class="files" id="image" accept="image/jpg, image/jpeg" />
          </div>
          <div class="form-group">
            <input type="hidden" name="custid" value="<?php echo $custid;?>">
            <input type="checkbox" name="noprecrip" id="noprep" ><span style="text-decoration: underline;padding-left:5px">don't have prescription?</span>
          </div>
        <div id="inline-popups"  class=" mt-4">
          <button type="submit" name="continue" class="continue btn">Continue</button> <!-- href="#test-popup" class="continue btn" data-effect="mfp-zoom-in"></a> -->
        </div>
        </form>
        <div class="container mt-4">
      <div class="card-counter text-left">
        <ul>
        <li>Your Quote Request will be submitted to nearest pharmacy stores.</li>
        <li class="pt-2">We are not selling in MRP. We provide an opportunity for local Pharmacy stores to serve you better with best price.</li>
      </ul>
        
        
      </div>
    </div>
      </div>
    </div>
  </div>
</section>
<style type="text/css">
  .white-popup {
  position: relative;
  background: #FFF;
  padding: 25px;
  width: auto;
  max-width: 800px;
  margin: 0 auto;
  border-radius: 25px;
}

.white-pop{
  position: relative;
  background: #FFF;
  padding: 25px;
  width: auto;
  max-width: 400px;
  margin: 0 auto;
  border-radius: 25px;
}
#success button.mfp-close{
  display: none !important;
}
#success h2{
  padding-top: 60px;
  padding-bottom: 40px;
}
/* 

====== Zoom effect ======

*/
.mfp-zoom-in {
  /* start state */
  /* animate in */
  /* animate out */
}
.mfp-zoom-in .mfp-with-anim {
  opacity: 0;
  transition: all 0.2s ease-in-out;
  transform: scale(0.8);
}
.mfp-zoom-in.mfp-bg {
  opacity: 0;
  transition: all 0.3s ease-out;
}
.mfp-zoom-in.mfp-ready .mfp-with-anim {
  opacity: 1;
  transform: scale(1);
}
.mfp-zoom-in.mfp-ready.mfp-bg {
  opacity: 0.8;
}
.mfp-zoom-in.mfp-removing .mfp-with-anim {
  transform: scale(0.8);
  opacity: 0;
}
.mfp-zoom-in.mfp-removing.mfp-bg {
  opacity: 0;
}
#first,#second{
  padding: 0px;
  margin: 0px;
}
.myform{
  width: 100%;
  border: 0;
}
input:-webkit-autofill,
input:-webkit-autofill:hover, 
input:-webkit-autofill:focus,
textarea:-webkit-autofill,
textarea:-webkit-autofill:hover,
textarea:-webkit-autofill:focus,
select:-webkit-autofill,
select:-webkit-autofill:hover,
select:-webkit-autofill:focus {
  /*-webkit-text-fill-color: green;*/
  /*border: 1px solid green;*/
  -webkit-box-shadow: 0 0 0px 1000px #fff inset;
  transition: background-color 5000s ease-in-out 0s;
}
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
.white-popup ul, .card-counter ul {
  list-style: none;
  margin-left: 0;
  padding-left: 0;
  font-size: 14px;
    padding-top: 13px;
}

.white-popup li, .card-counter li {
  padding-left: 1em;
  text-indent: -1em;
}

.white-popup li:before, .card-counter li:before {
  content: "*";
  padding-right: 8px;
  font-size: 15px;
  font-weight: bolder;
}
</style>
<div id="test-popup" class="white-popup mfp-with-anim mfp-hide">
  <div class="row">
    <div class="col-md-6" style="border-right: 1px solid #aaa">
      <img src="../images/loginpopup.png" style="width: 100%">
      <ul>
        <li>Your Quote Request will be submitted to nearest pharmacy stores.</li>
        <li>We are not selling in MRP. We provide an opportunity for local Pharmacy stores to serve you better with best price.</li>
      </ul>
    </div>
    <div class="col-md-6">
      
        <!-- <div class="row">
      <div class="col-md-5 "> -->
      <div id="first" >
        <div class="myform form ">
           <div class="logo mb-3">
             <div class="col-md-12 text-center">
              <h1>Login</h1>
             </div>
          </div>
          <div class="container">
                   <form method="post" name="login">
                           <div class="form-group">
                              <!-- <label for="exampleInputEmail1">Email address</label> -->
                              <input type="text" name="user"  class="form-control"  placeholder="User Name" autocomplete="off">
                           </div>
                           <div class="form-group">
                              <!-- <label for="exampleInputEmail1">Password</label> -->
                              
                              <input type="password" name="password" id="password-field"  class="form-control" placeholder="Password">
                        <span toggle="#password-field" class="fa fa-lg fa-eye field-icon toggle-password"></span>
                           </div>
                           <div class="form-group">
                              <p class="text-center">By signing up you accept our <a href="#">Terms Of Use</a></p>
                           </div>
                           <div class="col-md-12 text-center ">
                              <input type="submit" name="submit" id="submit" class="btn btn-block mybtn btn-primary tx-tfm" value="Login">
                           </div>
                           <div class="col-md-12 text-right">
                            <div class="form-group">
                                 <p><a href="#">Forgot Password?</a></p>
                              </div>
                           </div>
                           <div class="col-md-12 ">
                              <div class="login-or">
                                 <hr class="hr-or">
                                 <span class="span-or">or</span>
                              </div>
                           </div>
                           <div class="col-md-12 mb-3">
                              <p class="text-center">
                                 <a href="javascript:void();" class="google pr-1"><img src="../images/google.png" width="80">
                                 </a>
                                 <a href="javascript:void();" class="pl-2"><img src="../images/facebook.png" width="90">
                                 </a>
                              </p>
                           </div>
                           <div class="form-group">
                              <p class="text-center">New on MedV? <a style="cursor: pointer; color: #0069d9" id="signup">Sign up here</a></p>
                           </div>
                        </form>
                 </div>
        </div>
      </div>
      <div id="second">
        <div class="myform form">
          <div class="logo mt-5 mb-3">
             <div class="col-md-12 text-center">
              <h1>Sign Up</h1>
             </div>
          </div>
          <div class="container">
            <form method="post" name="otp">
              <div class="form-group">
                <!-- <label for="exampleInputEmail1">Enter User Name</label> -->
                <input type="text" name="userid"  class="form-control" id="username" aria-describedby="emailHelp" placeholder="User Name/Email Id" autocomplete="off">
              </div>
              <div class="form-group">
                <!-- <label for="exampleInputEmail1">Enter Mobile Number to receive<br>One Time Password (OTP)</label> -->
                <input type="number" name="mobile" id="mobile" class="form-control" placeholder="Mobile No.">
              </div>
                     <div class="col-md-12 text-center mt-4">
                        <input type="submit" name="getotp" id="getotp" class=" btn btn-block mybtn btn-primary tx-tfm" value="Get Otp">
                     </div>
                     <div class="form-group mt-5">
                        <p class="text-center">Already have an account? <a href="#" id="signin">LogIn</a> here</p>
                     </div>
            </form>
                 </div>
        </div>
      </div>
      
    <!-- </div>
      </div> -->
  
    </div>
  </div>
</div>

<div id="otppopup" class="white-popup mfp-with-anim mfp-hide">
  <div class="row">
    <div class="col-md-6" style="border-right: 1px solid #aaa">
      <img src="../images/loginpopup.png" style="width: 100%">
      <ul>
        <li>Your Quote Request will be submitted to nearest pharmacy stores.</li>
        <li>We are not selling in MRP. We provide an opportunity for local Pharmacy stores to serve you better with best price.</li>
      </ul>
    </div>
    <div class="col-md-6">
      <div id="third">
          <div class="myform form">
              <div class="logo mb-3">
                <div class="col-md-12 text-center">
                  <h1>Verify OTP</h1>
                </div>
              </div>
              <div class="container">
                  <form method="post" name="verify">
                    <!-- <div class="form-group">
                              <label for="exampleInputEmail1">Username</label> -->
                              <input type="text" name="id"  class="form-control" value="<?php echo $_SESSION['userid']?>" readonly>
                              <input type="text" name="mobile"  class="form-control" value="<?php echo $_SESSION['mobile']?>" readonly>
                          <!-- </div> -->
                          <div class="form-group">
                              <label for="exampleInputEmail1">Enter OTP</label>
                              <input type="number" name="otp"  class="form-control" id="otp" placeholder="Enter OTP" autocomplete="off">
                          </div>
                         <!-- <div class="form-group">
                            <label for="exampleInputEmail1">Mobile Number</label>
                            <input type="number" name="mobile" class="form-control" placeholder="Mobile No.">
                         </div> -->
                          <div class="col-md-12 text-center mt-4">
                              <input type="submit" name="verify" id="verify" class=" btn btn-block mybtn btn-primary tx-tfm" value="Verify OTP">
                          </div>
                          <div class="form-group mt-5">
                              <p class="text-center">Already have an account? <a href="../" id="signup">LogIn here</a></p>
                          </div>
                  </form>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>
<div id="success" class="white-pop mfp-with-anim mfp-hide">
  <img src="../images/login_icon.png" class="animated zoomIn">
  <h2 class="text-center">Login Success!</h2>
</div>
<?php  include '../include/footer.php';?>
</body>
<?php include '../include/jsplugin.php';?>
<script src="https://fast.wistia.net/labs/fresh-url/v1.js" async></script>
<script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script type="text/javascript">
  //Initialization for the page
  changeContentInView();

  //function call to remove the medicine from localstorage
  function remove_med(key){
    _localStorage.removeFromCart(key);
    changeContentInView();
    //clean the header field too
    changeContentInCart();
  }
  //call to regeneratorscript
  $('#inline-popups').magnificPopup({
  delegate: 'a',
  removalDelay: 500, //delay removal by X to allow out-animation
  callbacks: {
    beforeOpen: function() {
       this.st.mainClass = this.st.el.attr('data-effect');
    }
  },
  midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
});

  //When the quantity is changed don't make ajax request
  //rather change the value in localstorage
  function qtyChange(el){
    id = $(el).parent('div').find('.arr_index').val();
    qty = $(el).val();    
    if(qty > 9){
      alert('The quantity should be less than 9');
      changeContentInView();
    }else{
      _localStorage.incCart(id, qty);
      changeContentInCart();    
    }
  }

  $(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $(".files").on("change", function(e) {
      var clickedButton = this;
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < 3; i++) {
        var f = files[i];
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove\">X</span>" +
            "</span>").insertAfter(clickedButton);
          $(".remove").click(function(){
            $(this).parent(".pip").remove();

          });
          });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});
  $('.continue').attr('disabled', 'disabled');
  $("#image").on("change", function() {
    if($(this).val()){
      $('#noprep').attr('disabled', 'disabled');
      $('.continue').removeAttr('disabled');
      /*if ($("#image")[0].files.length > 3) {
        alert("You can select only 3 images");
    } else {
        $("#imageUploadForm").submit();
    }*/
    }
    else{
      $('#noprep').removeAttr('disabled');
    }
});
  $(function() {
    $('#noprep').click(function() {
        if ($(this).is(':checked')) {
            $('#image').attr('disabled', 'disabled');
            $('.continue').removeAttr('disabled');
        } else {
            $('#image').removeAttr('disabled');
            $('.continue').attr('disabled', 'disabled');
        }
    });
});
</script>
</html>

<?php

if(isset($_POST['getotp'])){
$mobile=$_POST['mobile'];
$userid=$_POST['userid'];
$uid=base64_encode($userid);
    require_once(__ROOT__.'/curl_helper.php');
    $action = "GET";
   $url = 'http://182.18.157.79/medv/api/customer/w/SingUp_CreateOTP';
    /*echo "Trying to reach ...";
    echo $url;*/
    $parameters = array("mobNo" => $mobile,"UserId" => $userid);
    $result = CurlHelper::perform_http_request($action, $url, $parameters);
     if($result){
      $op = (string)$result;
      $v=$op[4];
      if($v == '0'){
         echo "<script>
            alert('User Already Exist');
               window.location='../user';
               </script>";
      }
      else{
        $id=substr($op,-5,4);
        $customerid=intval($id);
            echo "<script>alert('success');
                  $.magnificPopup.open({
                    items: {
                      src: '#otppopup'
                    },
                    type: 'inline',
                    mainClass: 'mfp-zoom-in'
                  });
            </script>";
        $_SESSION['mobile']=$mobile;
        $_SESSION['userid']=$userid;
      }
     
    }
    else{
      echo "<script>
            alert('failed');
      </script>";
    }
}
?>
<?php
if(isset($_POST['submit'])){
$username=$_POST['user'];
$pwd=$_POST['password'];
require_once(__ROOT__.'/curl_helper.php');
    $action = "POST";
$url = 'http://182.18.157.79/medv/api/customer/w/CustLogin?userName='.$username.'&pwd='.$pwd;
//create a new cURL resource
$parameters = json_encode(array());
    $result = CurlHelper::perform_http_request($action, $url, $parameters);

    if($result == -1){
         echo "<script>
            alert('User Not Exist');
               $.magnificPopup.open({
                    items: {
                      src: '#test-popup'
                    },
                    type: 'inline',
                    mainClass: 'mfp-zoom-in'
                  });
               </script>";
    }
    else{
      define('__ROOT__', dirname(__FILE__));
      $custid=$result;
  require_once(__ROOT__.'/curl_helper.php');
    $action = "GET";
   $url = 'http://182.18.157.79/medv/api/customer/profile';
    /*echo "Trying to reach ...";
    echo $url;*/
    $parameters = array("custId" => $custid);
    $result = CurlHelper::perform_http_request($action, $url, $parameters);
/*print_r($result);*/
$resultData = json_decode($result, TRUE);
$_SESSION['custid']=$resultData['custId'];
$_SESSION['custname']=$resultData['customerName'];
$_SESSION['mobNo']=$resultData['mobNo'];
$_SESSION['email']=$resultData['email'];
      echo "<script>
            alert('Logged In Successfully $result');
            $.magnificPopup.open({
                    items: {
                      src: '#success'
                    },
                    type: 'inline',
                    mainClass: 'mfp-zoom-in'
                  });
            window.location='../proceed';
      </script>";
      /*header('location:../proceed');*/
     /* $_SESSION['custid']=$result;*/
    }
}
?>

<?php
if(isset($_POST['verify'])){
$userid=$_POST['id'];
$otp=$_POST['otp'];
$mobile=$_POST['mobile'];
    require_once(__ROOT__.'/curl_helper.php');
    $action = "GET";
   $url = 'http://182.18.157.79/medv/api/customer/w/ValidateOTP';
    $parameters = array("userId" => $userid,"OTP" => $otp);
    $result = CurlHelper::perform_http_request($action, $url, $parameters);
   /* print_r($result);*/
    /*echo $result;
   
      echo "$op";*/
      /*$op = (string)$result;
     echo $op[4];
*/
    if($result){
      if($result == -1){
         echo "<script>
            alert('Entered Wrong OTP....!Please Try Again...!');
               $.magnificPopup.open({
                    items: {
                      src: '#otppopup'
                    },
                    type: 'inline',
                    mainClass: 'mfp-zoom-in'
                  });
               </script>";
      }
      else{
            echo "<script>
            alert('Verified Successfully...$result');
               $.magnificPopup.open({
                    items: {
                      src: '#success'
                    },
                    type: 'inline',
                    mainClass: 'mfp-zoom-in'
                  });
               </script>";
               $_SESSION['userid']=$result;
               $_SESSION['mobile']=$mobile;
      }
     
    }
    else{
      echo "<script>
            alert('failed');
      </script>";
    }
}

?>
<?php
if(isset($_POST['continue'])){
if($_POST['custid']!=" "){
    echo "<script>
    window.location='../proceed';
    </script>";
  }
    else{
      echo "<script>
        $.magnificPopup.open({
                    items: {
                      src: '#test-popup',
                    },
                    type: 'inline',
                    mainClass: 'mfp-zoom-in'
                  });
      </script>";
      
    }
  }
?>