<?php
session_start();
$arr_index=$_GET['arr_index'];
$qty = $_GET['qty'];
$_SESSION['cart'][$arr_index]['quantity'] = $qty;
// echo $key = array_search($arr_index, $_SESSION['cart'][0]);
echo "Success";