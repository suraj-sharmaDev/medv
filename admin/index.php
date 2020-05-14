<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Medv | Merchant Login</title>
        <meta charset="utf-8">
        <meta name="veiwport" content="width=device-width,intial-scale=1">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
            <link rel="icon" href="assets/images/loader.png">
<!------ Include the above in your HEAD tag ---------->
	<style>
		body {
  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  max-width: 600px;
  height: 320px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}
	
    /* Made with love by Mutiullah Samim*/

@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 370px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #FFC312;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: -50px;
top: -75px;
}

.input-group-prepend span{
width: 50px;
background-color: #24d5e1;
color: #004a8e;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: #004a8e;
background-color: #24d5e1;
width: 100px;
}

.login_btn:hover{
color: #24d5e1;
background-color: #004a8e;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}

    </style>
	</head>
	<body>
<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h3>Sign In</h3>
                <div class="d-flex justify-content-end social_icon">
                    <!-- <span><i class="fab fa-facebook-square"></i></span>
                    <span><i class="fab fa-google-plus-square"></i></span>
                    <span><i class="fab fa-twitter-square"></i></span> -->
                    <span><img src="assets/images/Logo.png" style="width: 80%"></span>
                </div>
                <h5 class="text-white">To Merchant Panel</h5>
            </div>
            <div class="card-body">
                <form method="post">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                        
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="row align-items-center remember">
                        <input type="checkbox">Remember Me
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Login" class="btn float-right login_btn">
                    </div>
                </form>
            </div>
            <div class="card-footer">
               <!--  <div class="d-flex justify-content-center links">
                    Don't have an account?<a href="#">Sign Up</a>
                </div> -->
                <div class="d-flex justify-content-center">
                    <a href="#">Forgot your password?</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>
<?php

/*include('includes/db.php');*/
if(isset($_POST['submit']))
{
    $admin_email = $_POST['username'];
    $admin_pass = $_POST['password'];
    require_once('curl_helper.php');
    $action = "POST";
$url = 'http://182.18.157.79/medv/api/merch/w/merchLogin?userName='.$admin_email.'&pwd='.$admin_pass;

//create a new cURL resource
$parameters = json_encode(array());
    $result = CurlHelper::perform_http_request($action, $url, $parameters);

$resultData = json_decode($result, TRUE);
    if($result == -1){
         echo "<script>
            alert('User Not Exist');
               window.location='../user';
               </script>";
    }
    else{
       $_SESSION['merchID'] = $resultData['merchID'];
       $_SESSION['name'] = $resultData['name'];
      echo "<script>
            alert('Logged In Successfully');
            window.location='home.php';
      </script>";
      /*print_r($_SESSION['merchID']);
      print_r($_SESSION['name']);
      print_r($resultData['merchID']);
      print_r($resultData['name']);
      print_r($result);
      print_r($resultData);*/
         
    }
    /*$sel_admin = "select * from admin where admin_email = '$admin_email' AND admin_pass = '$admin_pass'";
    $run_admin = mysqli_query($con, $sel_admin);
    $check_admin = mysqli_num_rows($run_admin);
    if($check_admin==1)
    {
        $_SESSION['admin_email'] = $admin_email;
        echo "<script>window.open('home.php','_blank')</script>";
    }
    else
    {
        echo "<script>alert('Admin email Or password is incorrect,Try again!')</script>";
    }*/
}
?>