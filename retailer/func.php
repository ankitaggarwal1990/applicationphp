<?php 
print_r($_POST);

$con = mysqli_connect('127.0.0.1:49646','azure','6#vWHD_$','localdb');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");


if(isset($_POST['place_order'])){
	
	
$sql="SELECT * FROM products";

$result = mysqli_query($con,$sql);


$query2 = "SELECT * FROM `orders` WHERE order_id=(SELECT MAX(order_id) FROM `orders`)";
$result2 = mysqli_query($con,$query2);
$orderid =0;
while($row2 = mysqli_fetch_array($result2)) {
$orderid = $row2['order_id'];
}
$orderid= $orderid + 1;

echo $orderid;
while($row = mysqli_fetch_array($result)) {
	//echo $row['productID'];
	$product = $row['productID'];
	if(isset($_POST[$product])){
		$quantity1 = "quantity".$_POST[$product];
		$quantity = $_POST[$quantity1];
		
		$query = "INSERT INTO `orders`(`order_id`, `product_id`, `quantity`, `rfid_tag_id`, `destination_id`, `transport_id`, `product_total_amount`) VALUES ('$orderid','$product','$quantity',0,0,0,0)"
		$result1 = mysqli_query($con,$query);
	}
}


		header('Location: finalorder.php?order='.$orderid.'');
}

if(isset($_POST['final_order']))
{
	$orderno = $_POST['final_order'];
	$query = "UPDATE `orders` SET `status`=1 WHERE `order_id`= $orderno";		
    $result1 = mysqli_query($con,$query);
	header('Location: orders.php');
	
	
}	


?>
