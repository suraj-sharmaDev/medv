<?php
   require_once('../include/constants.php');
   
   $apiEndpoint = "https://test.cashfree.com";
   $opUrl = $apiEndpoint."/api/v1/order/create";

   $cf_request = array();
   $cf_request["appId"] = $_POST['appId'];
   $cf_request["secretKey"] = $_POST['secretKey'];
   $cf_request["orderId"] = $_POST['orderId']; 
   $cf_request["orderAmount"] = $_POST['orderAmount'];
   $cf_request["orderNote"] = $_POST['orderNote'] ? $_POST['orderNote'] : 'No notes provided';
   $cf_request["customerPhone"] = $_POST['customerPhone'];
   $cf_request["customerName"] = $_POST['customerName'];
   $cf_request["customerEmail"] = $_POST['customerEmail'];

   $cf_request["returnUrl"] = $URL."/ajax/success.php";

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

   print_r($curl_result);
?>