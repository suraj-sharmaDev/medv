<?php
session_start();

session_destroy();
echo "<script>alert('if you want to continue please login again!'), window.open('index.php','_self')</script>";

?>