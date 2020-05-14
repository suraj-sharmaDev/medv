<?php
session_start();
$URL = 'http://gwebsolution.com/demo/medv';
session_destroy();
echo "<script>alert('LOGOUT Successfully!'), window.open('$URL','_self')</script>";

?>