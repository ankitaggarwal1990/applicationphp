<?php 
print_r($_POST);

$con = mysqli_connect('127.0.0.1:49646','azure','6#vWHD_$','localdb');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
else{
	echo "connect";
}


if(isset($_POST['place_order'])){

	
	$sql="SELECT * FROM products";

$result = mysqli_query($con,$sql);


$query2 = "SELECT * FROM `orders` WHERE order_id=(SELECT MAX(order_id) FROM `orders`)";
$result2 = mysqli_query($con,$query2);
$orderid =0;
while($row2 = mysqli_fetch_array($result2)) {
 echo $orderid = $row2['order_id'];
}
	//echo "asdfghjkl";
}



?>
