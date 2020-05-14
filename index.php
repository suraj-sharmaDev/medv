<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
 ?>
 
<!DOCTYPE html>
<html lang="en">
<?php include 'include/cssplugin.php';?>
<body>
	<?php include 'include/header.php';?>
<section>
    <div id="slider-animation" class="carousel slide" data-ride="carousel">
  	<!-- Indicators -->
 	<ol class="carousel-indicators carousel-indicators-numbers">
	    <li data-target="#slider-animation" data-slide-to="0" class="active">1</li>
	    <li data-target="#slider-animation" data-slide-to="1">2</li>
	    <!-- <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li> -->
  	</ol>
  	<!-- The slideshow -->
  	<div class="carousel-inner">
 		<div class="carousel-item active">
        	<img src="images/banner-1.jpg" alt="Los Angeles">
 			<div class="text-box">
        		<div class="row align-items-center">     
            		<div class="col-md-6">
                		<h2 class="wow fadeInUp" data-wow-duration="4s">ALL YOUR HEALTH NEEDS<br> AT YOUR DOOR STEP</h2>
            			<p class="animated fadeInUp" data-wow-duration="2s">Get your Medicine delivered hassle free at<br> your door step from the pharmacy stores<br> when purchsed through MedV </p>
            		</div>
	            	<div class="col-md-6 wow slideInRight" data-wow-duration="4s">
	                	<img src="images/cart2.png">
	                </div>
            	</div>
    		</div>
    	</div>
      	<div class="carousel-item">
      		<img src="images/banner-1.jpg" alt="Chicago">
			<div class="text-box">
            	<div class="row align-items-center">
                    <div class="col-md-6  wow slideInRight" data-wow-duration="4s">
                		<h2>ALL YOUR HEALTH NEEDS<br> AT YOUR DOOR STEP</h2>
            			<p>Get your Medicine delivered hassle free at<br>your door step from the pharmacy stores<br> when purchsed through MedV
            			</p>
            		</div>
            		<div class="col-md-6  wow slideInLeft" data-wow-duration="4s">
               			<img src="images/cart1.png">
               		</div>
        		</div>
    		</div>
  		</div>
	</div>
  	<!-- Left and right controls -->
  	<a class="carousel-control-prev" href="#slider-animation" data-slide="prev">
    <!-- <span class="carousel-control-prev-icon"></span> -->
    	<img src="images/banner-button.png">
  	</a>
  	<a class="carousel-control-next" href="#slider-animation" data-slide="next">
    <!-- <span class="carousel-control-next-icon"></span> -->
    	<img src="images/banner-button2.png">
  	</a>
	</div>
</section>
<section style="background-color: #004a8e" id="track">
	<div class="container pt-3 pb-3">
		<div class="row">
		  <div class="col-md-4 text-center">
		    <img src="images/prescription.png" alt="Prescription" >
			<p >Upload Prescription</p>
		  </div>
		  <hr class="hr1">
		  <div class="col-md-4 text-center">
		    <img src="images/validation1.png" alt="Validation" >
			<p>Get Validated</p>
		  </div>
		 <hr class="hr2">
		  <div class="col-md-4 text-center">
		    <img src="images/door-delivery.png" alt="door-delivery" >
			<br>
			<p>Get Door Delivery</p>
		  </div>
		</div>
	</div>
</section>
<section id="search">
	<div class="container-fluid mt-5">
	<h4 class="pt-5">SEARCH BY CATEGORY</h4>
	</div>
	<hr>
	<div class="container-fluid">
		<main class="grid">
			<img src="images/baby care.jpg" alt="Sample photo">
			  <img src="images/fitness.jpg" alt="Sample photo">
			  <img src="images/family care.jpg" alt="Sample photo">
			  <img src="images/alternate medicines.jpg" alt="Sample photo">
		</main>
		
	</div>
</section>
<section id="search1">
	<div class="container-fluid mt-5">
	<h4 class="pt-5">SEARCH BY CONCERN</h4>
	</div>
	<hr>
	<div class="container-fluid">
		<main class="grid">
			<img src="images/skin care.jpg" alt="Sample photo">
			<img src="images/weight management.jpg" alt="Sample photo">
			<img src="images/pain relief.jpg" alt="Sample photo">
			<img src="images/sexual wellness.jpg" alt="Sample photo">
		</main>
		
	</div>
</section>
<section id="design">
	<div class="container-fluid mt-5 mb-5">
   <div class="row pt-5 pb-5">
    <div class="col " style="text-align: right;">
    	<div class="wow slideInLeft" data-wow-duration="1s">
   <span style="">Assured Quality</span>  
   <img src="images/quality.png" alt="Sample photo" style="margin-right: -70px; vertical-align:middle"> </div><div style="margin-bottom: 20px; margin-top: 10px">
   	
   </div>
   <div class="wow slideInLeft" data-wow-duration="2s">
  <span style="">Assured Savings</span>  <img src="images/savings.png" alt="Sample photo" style="margin-right: 19px; ;vertical-align:middle"></div><div style="margin-bottom: 20px; margin-top: 30px"></div>
  <div class="wow slideInLeft" data-wow-duration="3s">
  <span style="">On Time Delivery</span> <img src="images/timely-delivery.png" alt="Sample photo" style="margin-right: 40px;vertical-align:middle"></div><div style="margin-bottom: 10px; margin-top: 20px"></div>
  <div class="wow slideInLeft" data-wow-duration="4s">
<span style="">Free Door Delivery</span>  <img src="images/door-delivery-2.png" alt="Sample photo" style="margin-right: -57px;vertical-align:middle"></div>
    </div>
    <div class="col">
      <img src="images/home page.jpg" alt="Sample photo" style="max-width:inherit; float:right;" height="550" class="wow slideInRight" data-wow-duration="2s">
    </div>
  </div>
</div>
</section>
<section class="devs pt-5" >
	<div class="container mt-5 mb-5">
		<div class="row pt-5 pb-5">
			<div class="col-md-6" style="text-align: left">
				<h2>Download the MedV App</h2>
				<h5 class="text-dark"> Pharmacy at your Finger Tips</h5>
				<br><br>
				<h4 class="text-dark">Send the link to download the app</h4>
				<form>
				  <div class="form-row align-items-center">
				   
				    <div class="col-auto">
				      <label class="sr-only" for="inlineFormInputGroup">Username</label>
				      <div class="input-group mb-2">
				        <div class="input-group-prepend">
				          <div class="input-group-text">+91</div>
				        </div>
				        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter your Phone Number">
				      </div>
				    </div>
				</div>
				</form>
				<div class="mt-4 pt-4" >
					<img src="images/play-store.jpg" class="pr-3" width='200' height="55">
					<img src="images/app-store.jpg" width='200' height="55">
				</div>
			</div>
		</div>
	</div>
	
</section>


<?php include 'include/footer.php';?>
<!-- <div id="med-loader" class="show fullscreen">
    <img src="images/loader.png" width="150px">
    </div> -->
</body>
<?php include 'include/jsplugin.php';?>
<script type="text/javascript">
	if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</html>