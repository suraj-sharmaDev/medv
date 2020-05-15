<?php
 session_start();
/*include '../connect.php';*/
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
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance:textfield;
}
    </style>
</head>
<body>
	<?php include '../include/header.php';?>
<section class="logsection">
	 <div class="container">
        <div class="row">
			<div class="col-md-5 ">
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
          <div class="logo mb-3">
             <div class="col-md-12 text-center">
              <h1>Sign Up</h1>
             </div>
          </div>
          <div class="container">
            <form method="post" name="otp">
              <div class="form-group">
                <label for="exampleInputEmail1">User Name</label>
                <input type="text" name="userid"  class="form-control" id="username" aria-describedby="emailHelp" placeholder="User Name/Email Id" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Mobile Number</label>
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
		</div>
      </div>
    </div>
</section>
<?php  include '../include/footer.php';?>
</body>
<?php include '../include/jsplugin.php';?>
<script src="https://fast.wistia.net/labs/fresh-url/v1.js" async></script>

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
   /* print_r($result);*/
    /*echo $result;
   
      echo "$op";*/
      /*$op = (string)$result;
     echo $op[4];
*/
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
            echo "<script>
            alert('OTP Sent Successfully to $mobile and $id, $result');
               window.location='../user/verify';
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
//login checker implemented on proxy for bypassing http
if(isset($_POST['submit'])){

$username=$_POST['user'];
$pwd=$_POST['password'];

require_once(__ROOT__.'/curl_helper.php');

$proxyUrl = $URL.'/ajax/proxy_site.php';
$action = "POST";
$url = 'http://182.18.157.79/medv/api/customer/w/CustLogin';
$parameters = array(
  "action" => "POST",
  "url" => $url,
  "headers" => "Content-Type: application/json",
  "data" => json_encode(array("userName" => $username, "pwd" => $pwd))
);
//create a new cURL resource
$result = CurlHelper::perform_http_request($action, $proxyUrl, $parameters);

if($result == -1){
  echo "<script>
          alert('User Not Exist');
          window.location='../user';
        </script>";
}
else if(is_numeric($result)){
  echo "<script>
          alert('Logged In Successfully $result');
          window.location='../';
        </script>";
  $_SESSION['custid']=$result;
}else{
  echo "<script>
          alert('API Error')
        </script>";  
}

}
?>
