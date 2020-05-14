<?php
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
  if(!isset($_SESSION['merchID'])){
    header('location:../admin');
  }
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>MedV | Merchant Dashboard</title>
  <!--favicon-->
  <link rel="icon" href="assets/images/loader.png" type="image/x-icon"/>
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
 
</head>

<body>

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

 <!--Start sidebar-wrapper-->
  <?php include 'sidebar.php';?>
   <!--End sidebar-wrapper-->
<?php include 'header.php';?>




<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">

     <div class="row mt-4">
       <div class="col-12 col-lg-6 col-xl-3">
         <div class="card rounded-0">
           <div class="card-body">
             <div class="media align-items-center">
               <div class="media-body">
                 <p class="mb-0">Live Orders</p>
                 <h5 class="mb-0">  <?php /*$sql = "select count(id) AS total from booking where status ='now' ";
                                        $result = mysqli_query($con,$sql);
                                        $values = mysqli_fetch_assoc($result);
                                        $num_rows = $values['total'];
                                        echo $num_rows;*/ 
                                    ?> <small class="extra-small-font py-1 px-2 rounded mb-0"></small></h5>
               </div>
               <div class="w-icon">
                 <i class="fa fa-cart-arrow-down"></i>
               </div>
             </div>
           </div>
           <canvas id="dash1-chart-1" height="45"></canvas>
         </div>
       </div>
       <div class="col-12 col-lg-6 col-xl-3">
         <div class="card rounded-0">
           <div class="card-body">
             <div class="media align-items-center">
               <div class="media-body">
                 <p class="mb-0">Scheduled Orders</p>
                 <h5 class="mb-0"><?php /*$sql = "select count(id) AS total from booking where status ='later' ";
                                        $result = mysqli_query($con,$sql);
                                        $values = mysqli_fetch_assoc($result);
                                        $num_rows = $values['total'];
                                        echo $num_rows;*/ 
                                    ?> <small class="extra-small-font py-1 px-2 rounded mb-0"></small></h5>
               </div>
               <div class="w-icon">
                 <i class="fa fa-car" aria-hidden="true" style="color: greenyellow;"></i>
               </div>
             </div>
             
           </div>
           <canvas id="dash1-chart-2" height="45"></canvas>
         </div>
       </div>
       <div class="col-12 col-lg-6 col-xl-3">
         <div class="card rounded-0">
           <div class="card-body">
             <div class="media align-items-center">
               <div class="media-body">
                 <p class="mb-0">Completed Orders</p>
                 <h5 class="mb-0"><?php /*$sql = "select count(id) AS total from booking_history ";
                                        $result = mysqli_query($con,$sql);
                                        $values = mysqli_fetch_assoc($result);
                                        $num_rows = $values['total'];
                                        echo $num_rows;*/ 
                                    ?> <small class="extra-small-font py-1 px-2 rounded"></small></h5>
               </div>
               <div class="w-icon">
                 <i class="fa fa-car" aria-hidden="true" style="color:orange"></i>
               </div>
             </div>
             
           </div>
           <canvas id="dash1-chart-3" height="45"></canvas>
         </div>
       </div>
       <div class="col-12 col-lg-6 col-xl-3">
         <div class="card rounded-0">
           <div class="card-body">
             <div class="media align-items-center">
               <div class="media-body">
                 <p class="mb-0">Earnings</p>
                 <h5 class="mb-0">  <?php
                                        /*$query = "select sum(transaction) as `sumtransaction` from booking_history"; 
                                        $result = mysqli_query($con,$query);
                                        $data = mysqli_fetch_array($result);
                                        echo $data['sumtransaction'];*/
                                    ?>
                                     <small class="extra-small-font py-1 px-2 rounded"></small></h5>
               </div>
               <div class="w-icon">
                <i class="zmdi zmdi-balance-wallet text-success"></i>
               </div>
             </div>
             
           </div>
           <canvas id="dash1-chart-4" height="45"></canvas>
         </div>
       </div>
      <!--  <div class="col-12 col-lg-6 col-xl-3">
         <div class="card rounded-0">
           <div class="card-body">
             <div class="media align-items-center">
               <div class="media-body">
                 <p class="mb-0">Total Agent</p>
                 <h5 class="mb-0">  <?php $sql = "select count(id) AS total from agent";
                                        $result = mysqli_query($con,$sql);
                                        $values = mysqli_fetch_assoc($result);
                                        $num_rows = $values['total'];
                                        echo $num_rows; 
                                    ?> <small class="extra-small-font py-1 px-2 rounded mb-0"></small></h5>
               </div>
               <div class="w-icon">
                 <i class="fa fa-user"></i>
               </div>
             </div>
           </div>
           <canvas id="dash1-chart-1" height="45"></canvas>
         </div>
       </div> -->
       <!-- <div class="col-12 col-lg-6 col-xl-3">
         <div class="card rounded-0">
           <div class="card-body">
             <div class="media align-items-center">
               <div class="media-body">
                 <p class="mb-0">Total User</p>
                 <h5 class="mb-0"><?php $sql = "select count(id) AS total from user";
                                        $result = mysqli_query($con,$sql);
                                        $values = mysqli_fetch_assoc($result);
                                        $num_rows = $values['total'];
                                        echo $num_rows; 
                                    ?> <small class="extra-small-font py-1 px-2 rounded mb-0"></small></h5>
               </div>
               <div class="w-icon">
                 <i class="fa fa-user" aria-hidden="true" style="color: greenyellow;"></i>
               </div>
             </div>
             
           </div>
           <canvas id="dash1-chart-2" height="45"></canvas>
         </div>
       </div> -->
       <!-- <div class="col-12 col-lg-6 col-xl-3">
         <div class="card rounded-0">
           <div class="card-body">
             <div class="media align-items-center">
               <div class="media-body">
                 <p class="mb-0">Total Driver</p>
                 <h5 class="mb-0"><?php $sql = "select count(id) AS total from driver";
                                        $result = mysqli_query($con,$sql);
                                        $values = mysqli_fetch_assoc($result);
                                        $num_rows = $values['total'];
                                        echo $num_rows; 
                                    ?> <small class="extra-small-font py-1 px-2 rounded mb-0"></small></h5>
               </div>
               <div class="w-icon">
                 <i class="fa fa-user" aria-hidden="true" style="color: greenpink;"></i>
               </div>
             </div>
             
           </div>
           <canvas id="dash1-chart-2" height="45"></canvas>
         </div>
       </div> -->
      <!--  <div class="col-12 col-lg-6 col-xl-3">
         <div class="card rounded-0">
           <div class="card-body">
             <div class="media align-items-center">
               <div class="media-body">
                 <p class="mb-0">Total Vehicle</p>
                 <h5 class="mb-0"><?php $sql = "select count(id) AS total from vehicle_reg ";
                                    $result = mysqli_query($con,$sql);
                                    $values = mysqli_fetch_assoc($result);
                                    $num_rows = $values['total'];
                                    echo $num_rows; 
                                ?> 
                            </h5>
                 
               </div>
                <div class="w-icon">
                 <i class="fa fa-car"></i>
               </div> 
             </div>
           </div>
           <canvas id="dash1-chart-1" height="45"></canvas>
         </div>
       </div> 

     </div>--><!--end row-->

    <!-- <div class="row">
        <div class="col-12 col-lg-12 col-xl-12">
            <div class="card rounded-0">
                <div class="card-body">
                    <div class="row row-group align-items-center">
                        <div class="col-12 col-lg-12 col-xl-3 text-center">
                            <div class="icon-box gradient-branding">
                                <i class="fa fa-car"></i>
                            </div>
                            <h5 class="mb-0 mt-2"><?php $sql = "select count(id) AS total from free_vehicle ";
                                $result = mysqli_query($con,$sql);
                                $values = mysqli_fetch_assoc($result);
                                $num_rows = $values['total'];
                                echo $num_rows; 
                                ?>
                            </h5>
                            <p class="mb-0">Total Free Vehicle Available</p>
                            <hr>
                            <div class="icon-box gradient-ibiza">
                               <i class="fa fa-car"></i>
                            </div>
                            <h5 class="mb-0">  <?php $sql = "select count(id) AS total from intercity_bookings";
                                        $result = mysqli_query($con,$sql);
                                        $values = mysqli_fetch_assoc($result);
                                        $num_rows = $values['total'];
                                        echo $num_rows; 
                                    ?> <small class="extra-small-font py-1 px-2 rounded mb-0"></small></h5>
                            <p class="mb-0">Total Intercity Bookings</p>
                        </div>
                        <div class="col-12 col-lg-12 col-xl-3 text-center">
                            <div class="icon-box gradient-branding">
                                <i class="fa fa-car"></i>
                            </div>
                            <h5 class="mb-0 mt-2"><?php $sql = "select count(id) AS total from agent_booking ";
                                    $result = mysqli_query($con,$sql);
                                    $values = mysqli_fetch_assoc($result);
                                    $num_rows = $values['total'];
                                    echo $num_rows; 
                                ?> 
                            </h5>
                            <p class="mb-0">Agent Booking</p>
                            <hr>
                            <div class="icon-box gradient-ibiza">
                               <i class="fa fa-car"></i>
                            </div>
                            <h5 class="mb-0 mt-2"><?php $sql = "select count(id) AS total from agent_cancellation ";
                                $result = mysqli_query($con,$sql);
                                $values = mysqli_fetch_assoc($result);
                                $num_rows = $values['total'];
                                echo $num_rows; 
                                ?>
                            </h5>
                            <p class="mb-0">Agent Cancellation</p>
                        </div>
                        <div class="col-12 col-lg-12 col-xl-3 text-center">
                            <div class="icon-box gradient-branding">
                                <i class="fa fa-car"></i>
                            </div>
                            <h5 class="mb-0 mt-2"><?php $sql = "select count(id) AS total from agent_cancellation ";
                                    $result = mysqli_query($con,$sql);
                                    $values = mysqli_fetch_assoc($result);
                                    $num_rows = $values['total'];
                                    echo $num_rows; 
                                ?> 
                            </h5>
                            <p class="mb-0">User Booking</p>
                            <hr>
                            <div class="icon-box gradient-ibiza">
                               <i class="fa fa-car"></i>
                            </div>
                            <h5 class="mb-0 mt-2"><?php $sql = "select count(id) AS total from booking ";
                                $result = mysqli_query($con,$sql);
                                $values = mysqli_fetch_assoc($result);
                                $num_rows = $values['total'];
                                echo $num_rows; 
                                ?>
                            </h5>
                            <p class="mb-0">User Cancellation</p>
                        </div>
                        <div class="col-12 col-lg-12 col-xl-3 text-center">
                            <div class="icon-box gradient-branding">
                                <i class="fa fa-user"></i>
                            </div>
                            <h5 class="mb-0 mt-2"><?php $sql = "select count(id) AS total from feedback ";
                                    $result = mysqli_query($con,$sql);
                                    $values = mysqli_fetch_assoc($result);
                                    $num_rows = $values['total'];
                                    echo $num_rows; 
                                ?> 
                            </h5>
                            <p class="mb-0">Feedback</p>
                            <hr>
                            <div class="icon-box gradient-ibiza">
                               <i class="fa fa-car"></i>
                            </div>
                            <h5 class="mb-0 mt-2"><?php $sql = "select count(id) AS total from regular_trip ";
                                $result = mysqli_query($con,$sql);
                                $values = mysqli_fetch_assoc($result);
                                $num_rows = $values['total'];
                                echo $num_rows; 
                                ?>
                            </h5>
                            <p class="mb-0">Regular Trips</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --><!--End Row--> 
    </div>
    <!-- End container-fluid-->

   </div>
   <!--End content-wrapper-->
   <!--Start Back To Top Button-->
   <!--  <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a> -->
    <!--End Back To Top Button-->
  
  <!--Start footer-->
  <?php include 'footer.php';?>
  <!--End footer-->
  
  </div><!--End wrapper-->
  

  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  
  <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>

  <!-- Chart js -->
  <script src="assets/plugins/Chart.js/Chart.min.js"></script>
  <script src="assets/plugins/Chart.js/Chart.extension.js"></script>
  <!-- Sparkline JS -->
  <script src="assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
    <!-- Easy Pie Chart JS -->
  <script src="assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
   <!-- Knob Chart -->
  <script src="assets/plugins/jquery-knob/excanvas.js"></script>
  <script src="assets/plugins/jquery-knob/jquery.knob.js"></script>
   <script>
     $(function() {
        $(".knob").knob();
      });
   </script>
  <!--Peity Chart -->
  <script src="assets/plugins/peity/jquery.peity.min.js"></script>

  <script src="assets/js/index.js"></script>

</body>


</html>
