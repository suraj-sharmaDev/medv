<?php
include("includes/db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Admin Dashboard</title>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon"/>
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
            <div class="card-header"><i class="fa fa-table"></i> Quote Submitted</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
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
                  </thead>
                  <tbody>
                <!--  <?php
                  /*              $get_free_vehicle = "select * from booking";
                                $run_free_vehicle = mysqli_query($con, $get_free_vehicle);
                                while($row_free_vehicle = mysqli_fetch_array($run_free_vehicle))
                                {
                                    $id = $row_free_vehicle['id'];
                                    $uid = $row_free_vehicle['uid'];
                                    $booking_no = $row_free_vehicle['booking_no'];
                                    $user_name = $row_free_vehicle['user_name'];
                                    $user_contact = $row_free_vehicle['user_contact'];
                                    $vehicle_type = $row_free_vehicle['vehicle_type'];
                                    $book_as = $row_free_vehicle['book_as'];
                                    $pick_up = $row_free_vehicle['pickup_location'];
                                    $drop = $row_free_vehicle['drop_location'];
                                    $date = $row_free_vehicle['date'];
                                    $transaction_type = $row_free_vehicle['transaction_type'];
                                                    
                                    echo 
                                    "
                                        
                                            <tr>
                                                <td></td>
                                                <td>$uid</td>
                                                <td>$booking_no</td>
                                                <td>$user_name</td>
                                                <td>$user_contact</td>
                                                <td>$vehicle_type</td>
                                                <td>$book_as</td>
                                                <td>$pick_up</td>
                                                <td>$drop</td>
                                                <td>$date</td>
                                                <td>$transaction_type</td>
                                                <td><a href='delete_user_booking.php?id=$id'><button class='btn btn-danger'>Delete</button></a></td>
                                            </tr>
                                        
                                    ";
                                }*/
                            ?>-->
                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                               
                                                <td></td>
                                                <td></td>
                                                <td><a href='delete_user_booking.php?id=$id'><button class='btn btn-success mr-1'>Accept</button></a><a href='delete_user_booking.php?id=$id'><button class='btn btn-danger'>Reject</button></a></td>
                                            </tr>
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

<!-- Mirrored from codervent.com/xmino/table-data-tables.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Jun 2019 09:07:23 GMT -->
</html>
