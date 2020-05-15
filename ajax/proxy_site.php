<?php
require_once('../include/curl_helper.php');

$action = $_POST['action'];
$url = $_POST['url'];
$parameters = $_POST['parameters'];
//create a new cURL resource
$result = CurlHelper::perform_http_request($action, $url, $parameters);
print_r($result);

?>