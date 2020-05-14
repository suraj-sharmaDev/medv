<?php
session_start();
$addressId = isset($_POST['address_id'])?$_POST['address_id']:0;
$custId = $_SESSION['custid'];
$address = isset($_POST['address'])?$_POST['address']:'';
$landmark = isset($_POST['landmark'])?$_POST['landmark']:'';
$pincode = isset($_POST['pincode'])?$_POST['pincode']:'';
$locality = isset($_POST['locality'])?$_POST['locality']:'';
$mobile = isset($_POST['mobile'])?$_POST['mobile']:'';
$addlebel = isset($_POST['addtype'])?$_POST['addtype']:'home';

$ret_arr = [];

$ch = curl_init();
$postData = array(
	"AddressId" => $addressId,
	"CustomerId" => $custId,
	"AddLabel" => $addlebel,
	"Address" => $address,
	"Location" => $locality,
	"LandMark" => $landmark,
	"MobNo" => $mobile,
	"GEOLat" => "0.00",
	"GEOLng" => "0.00",
	"PIN" => $pincode,
	"Token" => null,
	"DeviceId" => null,
);
curl_setopt_array($ch, array(
	CURLOPT_URL => 'http://182.18.157.79/medv/api/customer/CreateOrUpdateCustAdd',
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => json_encode($postData),
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_HTTPHEADER =>  array(
                            'Content-Type: application/json',
                            'Connection: Keep-Alive'
                            )
	
));

$output = curl_exec($ch);
curl_close($ch);
// if(curl_error($ch)) {
//     $ret_arr['err'] = curl_error($ch);
// }

// require_once('../../include/curl_helper.php');
// $action = "POST";
// $url = 'http://182.18.157.79/medv/api/customer/CreateOrUpdateCustAdd';
// $parameters = array(
// 				"AddressId" => $addressId,
// 				"CustomerId" => $custId,
// 				"AddLabel" => $addlebel,
// 				"Address" => $address,
// 				"Location" => $locality,
// 				"LandMark" => $landmark,
// 				"MobNo" => $mobile,
// 				"GEOLat" => "1.23",
// 				"GEOLng" => "2.22",
// 				"PIN" => $pincode,
// 				"Token" => null,
// 				"DeviceId" => null,
// 			);
// $output = CurlHelper::perform_http_request($action, $url, json_encode($postData));

$ret_arr['jsn'] = $postData;
$ret_arr['result'] = $output;
echo json_encode($ret_arr);