<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include '../../include/cssplugin.php';?>
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.0/css/all.min.css"> -->
    <style type="text/css">
    	#account .btn{
    		border: 1px solid #004a8e;
    		
    	}
    	#account .btn a{
    		color: #004a8e;
    	}
    	#account .btn:hover {
    		background-color: #004a8e;
    		border:1px solid #24d5e1;
    		
    	}
    	#account .btn:hover a{
    		color: #24d5e1 !important;
    	}
    </style>
</head>
<body >
	<?php include '../../include/header.php';?>
	<nav aria-label="breadcrumb" class="mt-2">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="../../?customerid=<?php echo $custid;?>">Home</a></li>
	    <li class="breadcrumb-item active" aria-current="page">My Account</li>
	  </ol>
	</nav>
	<section id="account">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="container-fluid">
						<div class="shadow p-3 mb-5 bg-white">
							<h4 class="mb-4">Quick Links</h4>
							<nav class="navbar btn">
							  <a class="navbar-brand " href="#">
							  	<div class="row">
							  		<div class="col-md-2">
							  			<i class="fa fa-history"></i>
							  		</div>
							  		<div class="col-md-8">
							  			<span> My Orders</span>
							  		</div>
							  	</div>
							  </a>
							</nav>
							<nav class="navbar  mt-1 btn">
							  <a class="navbar-brand " href="#">
							  	<div class="row">
							  		<div class="col-md-2">
							  			<i class="fa fa-heartbeat"></i>
							  		</div>
							  		<div class="col-md-8">
							  			<span> My Wishlist</span>
							  		</div>
							  	</div>
							  </a>
							</nav>
							<nav class="navbar mt-1 btn">
							  <a class="navbar-brand " href="#">
							  	<div class="row">
							  		<div class="col-md-2">
							  			 <i class="fa fa-h-square" aria-hidden="true"></i>
							  			<!-- <i class="fa fa-file-medical"></i> -->
							  		</div>
							  		<div class="col-md-8">
							  			<span>Records</span>
							  		</div>
							  	</div>
							  </a>
							</nav>
							<nav class="navbar mt-1 btn">
							  <a class="navbar-brand " href="#">
							  	<div class="row">
							  		<div class="col-md-2">
							  			<i class="fa fa-medkit" aria-hidden="true"></i>
							  		</div>
							  		<div class="col-md-8">
							  			<span> My Refills</span>
							  		</div>
							  	</div>
							  </a>
							</nav>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="shadow p-3 mb-5 bg-white">
						<div class="card box">
							<div class="row">
								<div class="col-md-11" style="padding-right: 0px">
									<h4 class="card-header">Personal Info</h4>
								</div>
								<div class="col-md-1" style="padding-right: 0px">
									<a href="#" title="Edit" onclick="edit(this);" style="line-height: 53px"><i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size: x-large;"></i></a>
								</div>
							</div>
							<div class="card-body">
								<div class="displayInfo editSec">
									
										<h2><?php echo $resultData['customerName'] ?></h2>
									
									<address>
									
										Medv CustomerId: <?php echo $custid;?>, <br>
										Address: <?php echo $resultData['liCustAdd'] ?>
										<span class="caps">KARNATAKA</span> ,								    
									    <h6 class="mb-2"><i class="fa fa-lg fa-envelope mr-1"></i> <a href="mailto:<?php echo $r['email'];?>"><?php echo $resultData['email'];?></a></h6>
									
										
									
									     <h6><i class="fa fa-lg fa-phone mr-1"></i> +91 <?php echo $resultData['mobNo'];?> <!-- <small>(To edit phone no. contact customer care)</small> -->
									    <small><a href="javascript:;" onclick="showEditMobileNumberDiv();"><i class="fa fa-edit text-muted"></i> Edit Number</a></small>
									    </h6>											
									</address>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		
	</section>
<?php include '../../include/footer.php';?>
<!-- <div id="med-loader" class="show fullscreen">
    <img src="images/loader.png" width="150px">
    </div> -->
</body>
<?php include '../../include/jsplugin.php';?>
</html>