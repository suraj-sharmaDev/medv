<?php 
//if(isset($_POST['addcart'])){
    session_start();
    $ret_array = [];
    $dname=$_POST['dname'];
    $quantity=$_POST['qty'];
    $type=$_POST['type'];
    $detail=$_POST['detail'];
    $id=$_POST['id'];

    $b=array("product"=>"$dname","quantity"=>"$quantity","type"=>"$type","item_id"=>"$id","drugDtls"=>"$detail");
    //array_push($_SESSION['cart'],$b); // Items added to cart
    $_SESSION['cart'][  ] =  $b;
    // echo count($_SESSION['cart']);
    $ret_array['msg'] = 'Success';
    $ret_array['count'] = count($_SESSION['cart']);
    $ret_array['productname'] = $dname;
    $ret_array['qty'] = $quantity;
    
    echo json_encode($ret_array);
    
//}