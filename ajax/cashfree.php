<?php
   require_once('../include/constants.php');
   
   if($_GET['env']=='test'){
	   $apiEndpoint = "https://test.cashfree.com";
   }else{
	   $apiEndpoint = "https://api.cashfree.com";   	
   }
   $opUrl = $apiEndpoint."/api/v1/order/create";

   $cf_request = array();
   $cf_request["appId"] = $_GET['appId'];
   $cf_request["secretKey"] = $_GET['secretKey'];
   $cf_request["orderId"] = $_GET['orderId']; 
   $cf_request["orderAmount"] = $_GET['orderAmount'];
   $cf_request["orderNote"] = $_GET['orderNote'] ? $_GET['orderNote'] : 'No notes provided';
   $cf_request["customerPhone"] = $_GET['customerPhone'];
   $cf_request["customerName"] = $_GET['customerName'];
   $cf_request["customerEmail"] = $_GET['customerEmail'];

   $cf_request["returnUrl"] = $URL."/ajax/complete.php";

   $timeout = 10;
   
   $request_string = "";
   foreach($cf_request as $key=>$value) {
     $request_string .= $key.'='.rawurlencode($value).'&';
   }
   
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL,"$opUrl?");
   curl_setopt($ch,CURLOPT_POST, count($cf_request));
   curl_setopt($ch,CURLOPT_POSTFIELDS, $request_string);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
   $curl_result=curl_exec ($ch);
   curl_close ($ch);

   $decoded = json_decode($curl_result, true);
   if($decoded['paymentLink']){
   	header("Location: ".$decoded['paymentLink']);
   }else{
   	header("Location: ".$URL.'/ajax/fail.php');
   }
?>