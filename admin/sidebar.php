<?php
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    if(isset($_SESSION['merchID'])){
      $mid = $_SESSION['merchID'];
      $uname = $_SESSION['name'];
    }
    
?>

<style type="text/css">
  .inputfile {
  width: 0.1px;
  height: 0.1px;
  opacity: 0.1;
  overflow: hidden;
  position: absolute;
  z-index: -1;
 
 
}
.content:hover{
  display: block;
}
.content label{
 cursor: pointer;
 text-transform: capitalize;
 font-weight:normal;
 color: white;
}
</style>
 <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="home.php">
       <img src="assets/images/Logo.png" class="img-fluid" alt="logo icon" style="height: 50px">
       <h5 class="logo-text"><b><i></i></b></h5>
     </a>
   </div>

   <div class="user-details">
    
    <div class="side-avatar mb-3" style="background-image: url(assets/images/cc8.jpg); background-repeat: no-repeat; background-size:contain;">
      
      <!-- <img class='side-user-img img-fluid' src='admin/<?php echo $admin_pic;?>' > -->
      
      <div class="content">
        
        <a href="#"  data-toggle="modal" data-target="#profile">Change</a>

      </div>
     
    </div>
    
     
    <div class="text-center">
      <h6 class="mb-0 text-white"><?php echo $uname; ?></h6>
    </div>
    </div>

   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="home.php" class="waves-effect">
          <i class="zmdi zmdi-view-dashboard"></i> <span><b>DASHBOARD</b></span>
        </a>
      </li>
      <li>
        <a href="NewOrder.php" class="waves-effect">
          <i class="zmdi "></i> <span><b>New Order</b></span>
        </a>
      </li>
      <li>
        <a href="quote.php" class="waves-effect">
          <i class="zmdi "></i> <span><b>Quote Submitted</b></span>
        </a>
      </li>
      <li>
        <a href="confirmed.php" class="waves-effect">
          <i class="zmdi "></i> <span><b>Confirmed Order</b></span>
        </a>
      </li>
      <li>
        <a href="dispatched.php" class="waves-effect">
          <i class="zmdi "></i> <span><b>Dispatched Order</b></span>
        </a>
      </li>
      <!-- <li>
        <a href="managepages.php" class="waves-effect">
          <i class="zmdi "></i> <span><b>Manage Pages</b></span>
        </a>
    
      </li> -->
     <!--  <li>
        <a href="tarrif.php" class="waves-effect">
          <i class="zmdi zmdi-view-dashboard"></i> <span><b>Tariff</b></span>
        </a>
    
      </li> -->
      <!-- <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-card-travel"></i>
          <span><b>Current Status</b></span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="free_vehicle.php"><i class="zmdi zmdi-long-arrow-right"></i>Free Vehicle</a></li>
        </ul>
      </li> -->
      <!-- <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-chart"></i> <span><b>Trip Booking</b></span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="agent_booking.php"><i class="zmdi zmdi-long-arrow-right"></i>Agent Booking</a></li>
          <li><a href="user_booking.php"><i class="zmdi zmdi-long-arrow-right"></i>User Booking</a></li>
          <li><a href="regulars.php"><i class="zmdi zmdi-long-arrow-right"></i>Regular Trip</a></li>
          <li><a href="intercity.php"><i class="zmdi zmdi-long-arrow-right"></i>Intercity Bookings</a></li>
          
        </ul>
       </li> -->
     <!-- <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-invert-colors"></i> <span><b>Cancel Booking</b></span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="user_cancellation.php"><i class="zmdi zmdi-long-arrow-right"></i>User Cancellation</a></li>
          <li><a href="agent_cancellation.php"><i class="zmdi zmdi-long-arrow-right"></i>Agent Cancellation</a></li>
        </ul>
      </li> -->
      <!-- <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-invert-colors"></i> <span><b>Registration</b></span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="adminregister.php"><i class="zmdi zmdi-long-arrow-right"></i>Admin</a></li>
            <li><a href="ruser.php"><i class="zmdi zmdi-long-arrow-right"></i>View User</a></li>
          <li><a href="agent.php"><i class="zmdi zmdi-long-arrow-right"></i>Agent</a></li>
          <li><a href="rvehicle.php"><i class="zmdi zmdi-long-arrow-right"></i>Vehicle</a></li>
          <li><a href="rdriver.php"><i class="zmdi zmdi-long-arrow-right"></i>Driver</a></li>
        </ul>
      </li> -->
      <!-- <li>
        <a href="assign_driver.php" class="waves-effect">
          <i class="fa fa-car"></i> <span><b>Assign driver</b></span>
        </a>
    
      </li> -->
    
      <!-- <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-invert-colors"></i> <span><b>Payment</b></span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="payment_list.php"><i class="zmdi zmdi-long-arrow-right"></i>Payment List</a></li>
          <li><a href="make_payment.php"><i class="zmdi zmdi-long-arrow-right"></i>Make Payment</a></li>
          <li><a href="pending_payment.php"><i class="zmdi zmdi-long-arrow-right"></i>Pending Payment</a></li>
         
        </ul>
      </li> -->
      <!-- <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-invert-colors"></i> <span><b>Wallet</b></span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="driver_wallet.php"><i class="zmdi zmdi-long-arrow-right"></i>Driver Wallet</a></li>
          <li><a href="agent_wallet.php"><i class="zmdi zmdi-long-arrow-right"></i>Agent Wallet</a></li>
          <li><a href="user_wallet.php"><i class="zmdi zmdi-long-arrow-right"></i>User Wallet</a></li>
        </ul>
      </li> -->
      <!-- <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-invert-colors"></i> <span><b>Reports</b></span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="booking.php"><i class="zmdi zmdi-long-arrow-right"></i>Booking</a></li>
          <li><a href="cancel_booking.php"><i class="zmdi zmdi-long-arrow-right"></i>Cancel Booking</a></li>
          <li><a href="summary_attendence.php"><i class="zmdi zmdi-long-arrow-right"></i>Attendence</a></li>
        </ul>
      </li> -->
      
      <li>
        <a href="logout.php" class="waves-effect">
          <i class="icon-power mr-2"></i> <span><b>Logout</b></span>
        </a>
    
      </li>
            
      <li>
    
    </ul>
   
   </div>
   <div class="modal" tabindex="-1" role="dialog" id="profile">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Update Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="" enctype="multipart/form-data">
      <div class="modal-body">
        
      <div class="side-avatar mb-3" style="background-image: url(assets/images/cc8.jpg); background-repeat: no-repeat; background-size:contain;">
      
      <img class='side-user-img' src='admin/<?php echo $admin_pic;?>' >
      
      <div class="content">
        
        <input type="file" name="file" id="file" class="inputfile"/>
        <label for="file"  name="pic">Change</label>

      </div>
     
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" name="upload" value="upload">
      </div>
    </form>
    </div>
  </div>
</div>
<?php 
if(isset($_POST['upload'])){

        $file=$_FILES['file']['name'];
          move_uploaded_file($_FILES['file']['tmp_name'],"admin/$file");
          $update= "update admin set admin_pic='$file' where admin_email='$admin_email'";
          $disp=mysqli_query($con,$update);
          if($disp){
            echo "<script>
              window.location='index.php';
            </script>";
          }
          else{
            echo "<script>alert('Failed to upload profile pic..!')
              
            </script>";
          }
          }
  
   ?>