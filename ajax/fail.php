<?php
	//This page was created basically to return from cashfree checkout
	//but when the order creation was error
	$array = array('message' => 'error');
	echo json_encode($array);
?>