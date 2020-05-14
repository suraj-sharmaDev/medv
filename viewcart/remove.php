<?php
	session_start();
	$dname=$_POST['dname'];
	/*if (($key = array_search($dname, $_SESSION['cart'])) !== false){
		unset($_SESSION['cart'][$key]);
	}*/
	//remove the id from our cart array
	$key = array_search($_POST['dname'], $_SESSION['cart']);	
	unset($_SESSION['cart'][$key]);

	unset($_SESSION['cart'][$_GET['index']]);
	//rearrange array after unset
	$_SESSION['cart'] = array_values($_SESSION['cart']);

	if(count($_SESSION['cart'])!=0){
		header('location: ./');
	}
	else{
		echo "<script>alert('cart is empty');
		window.location='../';
		</script>";
		/*header('location: ../');*/
	}
?>

