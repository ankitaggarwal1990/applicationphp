
<?php
$con = mysqli_connect('trident1.database.windows.net','trident','password@123','database_azure');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
else{
	echo "connect";
}

?>
