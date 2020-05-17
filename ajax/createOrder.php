<?php
require_once('../include/curl_helper.php');
require_once('../include/constants.php');

$user_id = $_POST['userId'];
$addr_id = $_POST['addressId'];
$med_names = $_POST['dname'];
$med_ids = $_POST['id'];
$qty = $_POST['qty'];

$orderDetail = array();
$medOrders = array();

for ($i=0; $i < sizeof($med_names); $i++) { 
	$listOrder = array(
		"MedicineId" => $med_ids[$i],
		"Order_Qty" => $qty[$i]
	);

	array_push($medOrders, $listOrder);
}
$orderDetail['Order_Id'] = 0;	//since creating a order orderId=0
$orderDetail['Customer_Id'] = $user_id;
$orderDetail['Address_Id'] = $addr_id;
$orderDetail['liOrdDtls'] = $medOrders;

//Resultant post data

echo json_encode($orderDetail);

//make a curl request via our proxy

$proxyUrl = $URL.'/ajax/proxy_site.php';
$action = "POST";
$url = 'http://182.18.157.79/medv/api/customer/w/CustLogin';
$parameters = array(
    "action" => "POST",
    "url" => $url,
    "headers" => "Content-Type: application/json",
    "data" => json_encode($orderDetail)
);
$result = CurlHelper::perform_http_request($action, $proxyUrl, $parameters);

echo "<script>console.log('API Message : ', $result)</script>"
?>