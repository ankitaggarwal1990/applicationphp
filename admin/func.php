<?php

require '../database-config.php';

print_r($_POST);

if(isset($_POST['submitted'])){
$product = $_POST['productid'];
$type = $_POST['producttype'];
$productprice = $_POST['productprice'];
$perishduration   = $_POST['perishduration'];
$weight = $_POST['weight'];
	$name= $POST['productname'];

	echo $name;
	$query = "INSERT INTO `products` (`productID`, `productType`, `productPrice`, `perishDuration`, `weight`,`product_name`, `status`) VALUES ('$product', '$type', '$productprice', '$perishduration', '$weight', '$name', 0)";
	
	//mysql_select_db('database');
	//$retval = mysql_query($query,$conn);
	$query1 = $dbh->exec($query);
	
	
	if($query1)
	{
		echo "Submitted";
		//header('Location: addproduct.php?err=1');
	}
	else{
		echo "error";
		//header('Location: addproduct.php?err=2');
	}
}
if(isset($_POST['transportsubmitted'])){
	
$id = $_POST[transporterid];
$name = $_POST[transportername];
$acct_number = $_POST[accountnumber];
$phone_number   = $_POST[phonenumber];


	$query = "INSERT INTO `transporter` (`TransporterID`, `TransporterName`, `AccountNo`, `Ph no`) VALUES ('$id', '$name', '$acct_number', '$phone_number')";
	
	//mysql_select_db('database');
	//$retval = mysql_query($query,$conn);
	$query1 = $dbh->exec($query);
	
	
	if($query1)
	{
		echo "Submitted";
		header('Location: transporter.php?err=1');
	}
	else{
		echo "error";
		header('Location: transporter.php?err=2');
	}
}


if(isset($_POST['devicesubmitted'])){
$deviceid = $_POST[deviceid];
$devicetype = $_POST[devicetype];
$devicekey = $_POST[devicekey];
$hostname   = $_POST[hostname];
$movable   = $_POST[movable];
$locationID   = $_POST[locationID];
$devicenames   = $_POST[devicenames];


	$query = "INSERT INTO `devices`(`Deviceid`, `DeviceType`, `DeviceKey`, `hostname`, `Locationid`, `isMovable`, `DeviceName`) VALUES ('$deviceid', '$devicetype', '$devicekey', '$hostname', '$locationID', '$movable', '$devicenames')";
	
	//mysql_select_db('database');
	//$retval = mysql_query($query,$conn);
	$query1 = $dbh->exec($query);
	
	
	if($query1)
	{
		echo "Submitted";
		header('Location: device.php?err=1');
	}
	else{
		echo "error";
		header('Location: device.php?err=2');
	}
}




if(isset($_POST['retailerasubmitted'])){
$retailerid = $_POST[retailerid];
$locationid = $_POST[locationid];
$retailername = $_POST[retailername];


	$query = "INSERT INTO `retailer`(`RetailerID`, `LocationID`, `RetailerName`) VALUES ('$retailerid', '$locationid', '$retailername')";
	
	//mysql_select_db('database');
	//$retval = mysql_query($query,$conn);
	$query1 = $dbh->exec($query);
	
	
	if($query1)
	{
		echo "Submitted";
		header('Location: retailers.php?err=1');
	}
	else{
		echo "error";
		header('Location: retailers.php?err=2');
	}
}






if(isset($_POST['contactsubmitted'])){
$warehouseid = $_POST[warehouseid];
$warehousename = $_POST[warehousename];
$location = $_POST[location];
$contact_no = $_POST[contact_no];


	$query = "INSERT INTO `warehouse`(`warehouse_name`, `warehouse_id`, `location`, `contact_no`) VALUES ('$warehouseid', '$warehousename', '$location', '$contact_no')";
	
	//mysql_select_db('database');
	//$retval = mysql_query($query,$conn);
	$query1 = $dbh->exec($query);
	
	
	if($query1)
	{
		echo "Submitted";
		header('Location: warehouses.php?err=1');
	}
	else{
		echo "error";
		header('Location: warehouses.php?err=2');
	}
}





?>
