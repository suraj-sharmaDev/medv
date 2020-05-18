<?php
require_once('../include/curl_helper.php');
require_once('../include/constants.php');

$user_id = $_POST['userId'];
$addr_id = $_POST['addressId'];
$med_names = $_POST['dname'];
$med_ids = $_POST['id'];
$qty = $_POST['qty'];
$order_comment = $_POST['OrderComment'] != null ? $_POST['OrderComment'] : '';

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
$orderDetail['OrderComment'] = $order_comment;
//Resultant post data

// echo json_encode($orderDetail);

//make a curl request via our proxy

$proxyUrl = $URL.'/ajax/proxy_site.php';
$action = "POST";
$url = 'http://182.18.157.79/medv/api/order/createOrder';
$parameters = array(
    "action" => "POST",
    "url" => $url,
    "headers" => "Content-Type: application/json",
    "data" => json_encode($orderDetail)
);
$result = CurlHelper::perform_http_request($action, $proxyUrl, $parameters);

$result = json_decode($result, true);

$orderId = $result['orderId'];

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo $URL;?>/middleware/localstorage.js"></script>
	<script type="text/javascript" src="<?php echo $URL;?>/middleware/helper.js"></script>
	<script type="text/javascript" src="<?php echo $URL;?>/middleware/compress.js"></script>	
	<script type="text/javascript">
	//we pass the session id to our localstorage instance
	const _localStorage = new localstorage(<?php echo $_SESSION['custid'] ? $_SESSION['custid'] : 0 ; ?>);
	</script>	
	<link href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/blitzer/jquery-ui.css"
	    rel="stylesheet" type="text/css" />
	<div id="placed" style="display: none">
	    Order was Placed!
	</div>
	<div id="error" style="display: none">
	    Order could not be placed!
	</div>	
</body>
</html>

<?php
	if($orderId > 0){
		//time to upload image
		//image upload takes place in browser because the image is stored in
		//localstorage which php has no access to
?>
<script>
	var orderId = <?php echo $orderId ?>;
	console.log(orderId);
	var formData = new FormData();
	var images = _localStorage.uploadImage;
	var	url = 'http://182.18.157.79/medv/api/Image/uploadPrescription';	
	// var url = '<?php echo $URL; ?>' + '/ajax/check.php';
	uploadImage(images, url)
	.then((res)=>{
		$('#placed').dialog({
		    modal: true,
		    title: 'Notify',
		    width: 300,
		    height: 100,
		    open: function(event, ui) {
		        setTimeout(function() {
		            $('#placed').dialog('close');
		            _localStorage.emptyCart();
		            window.location.href = '<?php echo $URL; ?>' + '/user/myaccount/';
		        }, 900);
		    }
		});
	})
	.catch((err)=>{
		console.log(err)
	})

</script>
<?php
	}else{
		echo "
			<script>
	            $('#error').dialog({
	                modal: true,
	                title: 'Notify',
	               width: 300,
	                height: 100,
	                open: function (event, ui) {
	                    setTimeout(function () {
	                        $('#error').dialog('close');
							window.location.href = '$URL/viewcart/';
	                    }, 900);
	                }
	            });
	        </script>
		";
	}
?>