<?php
  session_start();
if(isset($_SESSION['userid']) && !empty($_SESSION['userid']) && isset($_SESSION['mobile']) && !empty($_SESSION['mobile'])){
  
/* $custid=base64_decode($_GET['user']);*/
$userid=$_SESSION['userid'];
$mobile=$_SESSION['mobile'];
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include '../../include/cssplugin.php';?>
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.0/css/all.min.css"> -->
    <style type="text/css">
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
<body >
	<?php include '../../include/header.php';?>
	<section class="logsection">
		<div class="container">
	        <div class="row">
				<div class="col-md-5 ">
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
		                              	<input type="hidden" name="id"  class="form-control" value="<?php echo $userid;?>" readonly>
                                    <input type="hidden" name="mobile"  class="form-control" value="<?php echo $mobile;?>" readonly>
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
	</section>
<?php include '../../include/footer.php';?>
<!-- <div id="med-loader" class="show fullscreen">
    <img src="images/loader.png" width="150px">
    </div> -->
</body>
<?php include '../../include/jsplugin.php';?>
<script src="https://fast.wistia.net/labs/fresh-url/v1.js" async></script>
</html>
<?php
if(isset($_POST['verify'])){
$userid=$_POST['id'];
$otp=$_POST['otp'];
$mobile=$_POST['mobile'];
    require_once(__ROOT__."/curl_helper.php");
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
               window.location='../user/verify';
               </script>";
      }
      else{
            echo "<script>
            alert('Verified Successfully...$result');
               window.location='../../user/signup';
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