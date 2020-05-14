<?php
session_start();
if(isset($_SESSION['userid']) && !empty($_SESSION['userid']) && isset($_SESSION['mobile']) && !empty($_SESSION['mobile'])){
  $custid=$_SESSION['userid'];
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
					<div id="forth" class="pt-3 mb-2">
					    <div class="myform form ">
	                        <div class="logo mb-3">
	                           <div class="col-md-12 text-center">
	                              <h1 >Signup</h1>
	                           </div>
	                        </div>
		                    <div class="container">
		                        <form method="post" name="registration">
		                           <div class="form-group">
		                              <!-- <label for="exampleInputEmail1">First Name</label> -->
		                              <input type="text"  name="firstname" class="form-control" id="firstname"  placeholder="First Name*">
		                           </div>
		                           <div class="form-group">
		                              <!-- <label for="exampleInputEmail1">Last Name</label> -->
		                              <input type="text"  name="middlename" class="form-control" id="middlename"  placeholder="Middle Name">
		                           </div>
		                           <div class="form-group">
		                              <!-- <label for="exampleInputEmail1">Last Name</label> -->
		                              <input type="text"  name="lastname" class="form-control" id="lastname"  placeholder="Last Name*">
		                           </div>
		                           <div class="form-group">
		                             <!--  <label for="exampleInputEmail1">Email address</label> -->
		                              <input type="email" name="email" id="email"  class="form-control"  aria-describedby="emailHelp" placeholder="Email">
		                           </div>
		                           <div class="form-group">
		                              <!-- <label for="exampleInputEmail1">Password</label> -->
		                              <input type="password" name="password" id="password"  class="form-control" placeholder="Password">
		                              <!--  <span toggle="#password-f" class="fa fa-lg fa-eye field-icon1 toggle-password"></span> -->
		                           </div>
		                           <div class="form-group">
		                              <!-- <label for="exampleInputEmail1">Password</label> -->
		                              <input type="password" name="password_confirm" id="password_confirm"  class="form-control" placeholder="Confirm Password">
		                              <!--  <span toggle="#password-f" class="fa fa-lg fa-eye field-icon1 toggle-password"></span> -->
		                           </div>
		                           <div class="form-group">
		                             <!--  <label for="exampleInputEmail1">Email address</label> -->
		                              <input type="number" name="phone"  class="form-control" id="phone" placeholder="Mobile Number" value="<?php echo $mobile;?>" disabled>
		                              <input type="hidden" name="custid"  class="form-control" id="id" placeholder="Mobile Number" value="<?php echo $_SESSION['userid'];?>" >
		                           </div>
		                           <div class="col-md-12 text-center mb-3">
		                              <input type="submit" name="submit" id="submit" class=" btn btn-block mybtn btn-primary tx-tfm" value="Sign Up">
		                           </div>
		                           <!-- <div class="col-md-12 ">
		                              <div class="login-or">
		                                 <hr class="hr-or">
		                                 <span class="span-or">Sign Up with</span>
		                              </div>
		                           </div> -->
		                           <!-- <div class="col-md-12 ">
		                              <div class="login-or">
		                                 <hr class="hr-or">
		                                 <span class="span-up">Sign Up With</span>
		                              </div>
		                           </div> -->
		                           <!-- <div class="col-md-12 mb-3">
		                              <p class="text-center">
		                                 <a href="javascript:void();" class="google pr-1"><img src="images/google.png" width="80">
		                                 </a>
		                                 <a href="javascript:void();" class="pl-2"><img src="images/facebook.png" width="90">
		                                 </a>
		                              </p>
		                           </div> -->
		                           <div class="col-md-12 ">
		                              <div class="form-group">
		                                 <p class="text-center"><a href="../" id="signin">Already have an account?</a></p>
		                              </div>
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

</html>
<?php
if(isset($_POST['submit'])){
$userid=$_POST['custid'];
$fname=$_POST['firstname'];
$mname=$_POST['middlename'];
$lname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['password_confirm'];
   /* require_once("../curl_helper.php");
    $action = "POST";*/
   $url = 'http://182.18.157.79/medv/api/customer/w/BasicRegistration';
   $ch = curl_init($url);
    $parameters = json_encode(array("custId"=>$userid,
	"firstName"=>$fname,
	"middleName"=>$mname,
	"lastName"=>$lname,
	"eMail"=>$email,
	"pwd"=>$password
));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $parameters);

//set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

//return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//execute the POST request
$result = curl_exec($ch);
/*print_r($result);*/

 if($result == 1){
         echo "<script>
            alert('Registered Successfully');
               window.location='../../user/';
               </script>";
               session_destroy();
      }
      else{
            echo "<script>
            alert('Something Went Wrong...! Failed Register');
               window.location='../../user/signup';
               </script>";
      }
curl_close($ch);
}

?>