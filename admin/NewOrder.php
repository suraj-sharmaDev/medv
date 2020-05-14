<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
if(isset($_SESSION['merchID'])&& !empty($_SESSION['merchID']))
{
  $merchID=$_SESSION['merchID'];
  require_once('curl_helper.php');
    $action = "GET";
   $url ='http://182.18.157.79/medv/api/order/getOpenOrder';
    /*echo "Trying to reach ...";
    echo $url;*/
    $parameters = array("merchId" => $merchID);
    $result = CurlHelper::perform_http_request($action, $url, $parameters);
$resultData = json_decode($result, TRUE);
/*print_r($resultData);*/
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
 <!--End topbar header-->
    <?php include 'header.php';?>
 <!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <!-- <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Data Tables</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Xmino</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
         </ol>
	   </div>
	   <div class="col-sm-3">
       <div class="btn-group float-sm-right">
        <button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Setting</button>
        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
        <span class="caret"></span>
        </button>
        <div class="dropdown-menu">
          <a href="javaScript:void();" class="dropdown-item">Action</a>
          <a href="javaScript:void();" class="dropdown-item">Another action</a>
          <a href="javaScript:void();" class="dropdown-item">Something else here</a>
          <div class="dropdown-divider"></div>
          <a href="javaScript:void();" class="dropdown-item">Separated link</a>
        </div>
      </div>
     </div>
     </div> -->
    <!-- End Breadcrumb-->
    

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> New Orders</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Order Id</th>
                        <th>User Name</th>
                        <th>User Contact</th>
                       <!--  <th>User Email</th> -->
                        <th>Delivery Address</th>
                        
                        <th>Distance</th>
                        <th>Order Date</th>
                        <th>Prescription</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    /*echo $result;*/
                    $i=0;
                     foreach ($resultData as $key => $value) {
                     $i++;
                    ?>
                    <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $value['Order_Id'];?></td>
                    <td><?php echo $value['Customer_fName'];?></td>
                    <td><?php echo $value['mobNo'];?></td>
                    <!-- <td></td> -->
                    <td><?php echo $value['Address'];?><br>Landmark:<?php echo $value['LandMark'];?></td>
                    
                    <td><?php echo $value['Dist'];?></td>
                   
                    <td><?php echo $value['OrderDate'];?></td>
                    <td><a href="<?php $value['Prescription_Path'];?>">prescription</a></td>
                    <td><a href='quote_booking_order.php?id=<?php echo $value['Order_Id'];?>'><button class='btn btn-success mr-1'>Accept</button></a><a href='delete_user_booking.php?id=$id'><button class='btn btn-danger'>Reject</button></a></td>
                </tr>
              <?php } ?>
                <!-- <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Order Id</th>
                        <th>User Name</th>
                        <th>User Contact</th>
                        <th>User Address</th>
                        <th>User Email</th>
                        <th>Delivery Address</th>
                        <th>Date</th>
                        <th>Transaction Type</th>
                        <th>Action</th>
                    </tr>
                </tfoot> -->
                </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
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

  <!--Data Tables js-->
  <script src="assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/jszip.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>

    <script>
     $(document).ready(function() {
      //Default data table
       $('#default-datatable').DataTable();


       var table = $('#example').DataTable( {
        lengthChange: false,
       /* buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]*/
      } );
 
     table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
      
      } );

    </script>
	
</body>
</html>
