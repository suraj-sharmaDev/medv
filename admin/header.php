<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
   
  </ul>

<ul class="navbar-nav align-items-center right-nav-link">
    
 
    <li class="nav-item language">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
      <ul class="dropdown-menu dropdown-menu-right">
          <li class="dropdown-item"> <i class="flag-icon flag-icon-in mr-2"></i> India</li>
          
        </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile hidden" style=""><img src="assets/images/cc8.jpg" width="35" height="35" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar img-circle" ><img class="align-self-start mr-3" src="assets/images/cc8.jpg" alt="user avatar"> </div>
            <div class="media-body">
            <h6 class="mt-2 user-title">Admin</h6>
            <p class="user-subtitle"><?php echo $uname; ?></p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <a href="changepassword.php"><li class="dropdown-item"><i class="icon-settings mr-2"></i> Change Password</li></a>
        <li class="dropdown-divider"></li>
        <a href="logout.php"><li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li></a>
      </ul>
    </li>
  </ul>


  
     
 
</nav>
</header>
<!--End topbar header-->