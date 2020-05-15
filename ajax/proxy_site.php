<?php
//This was created to help bypass same_origin
	header("Access-Control-Allow-Origin: *");
	$action = $_POST['action'];
	$url = $_POST['url'];
	$data = $_POST['data'];
	$headers = $_POST['headers'] ? $_POST['headers'] : false;	
	if($headers){
		$headers = array($headers);
	}

	//Create a cURL handle.
	$curl = curl_init($url);
	//Create an array of custom headers.

	// $data = '{"userName" : "prema", "pwd" : "prema@123"}';

	//Use the CURLOPT_HTTPHEADER option to use our
	//custom headers.

	if($headers){
		curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
	}

	if($action == 'POST'){
		curl_setopt($curl, CURLOPT_POST, 1);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
	}
	//Set options to follow redirects and return output
	//as a string.
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
	 
	//Execute the request.
	$result = curl_exec($curl);

	echo $result;

?>