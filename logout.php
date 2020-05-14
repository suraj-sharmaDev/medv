<?php
require_once('include/constants.php');
session_start();
session_destroy();
echo "<script>alert('LOGOUT Successfully!'), window.open('$URL','_self')</script>";

?>