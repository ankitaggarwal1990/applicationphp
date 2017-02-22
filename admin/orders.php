<html>
<head>


<style> 
input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
	text-align: center;
    background-color: #4CAF50;
    color: white;
}
td {
    text-align: center; /* center checkbox horizontally */
    vertical-align: middle; /* center checkbox vertically */
}
.button {
    background-color: #4CAF50; /* Green */
    
    color: white;
    
    text-align: center;
    
} 
.select{
	
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}
</style>
</head>


<body>

<?php 

//echo $value;
$con = mysqli_connect('localhost','root','','database');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT DISTINCT order_id,destination_id FROM orders";

$result = mysqli_query($con,$sql);

?>
<div>
<table> 
<tr>
<th>ORDER ID</th>
<th>DESTINATION</th>
<th>RFID TAG</th>
<th>TRANSPORT ID</th>
</tr>
<tr>
<form action="func.php" method="POST"> 
<?php
$total_amount= 0;
while($row = mysqli_fetch_array($result)) {
?>
	

<td><input class='select' name="order_id<?php echo $row['order_id'] ?>" value="<?php echo $row['order_id'] ?>" readonly="readonly"> </td>

<td><input class='select' name="destination_id<?php echo $row['destination_id'] ?>" value="<?php echo $row['destination_id'];
?>" readonly="readonly"></td>
<td><?php
$rfid_sql = "SELECT rfid_id FROM rfid_details";
$rfid_result = mysqli_query($con,$rfid_sql);

echo "<select class='select'" ;
while ($rfid_row = mysqli_fetch_array($rfid_result)) {
	
    echo "name='rfid_".$row['order_id']."'><option value='".$rfid_row['rfid_id']."'>".$rfid_row['rfid_id'] ."</option>";
	
}
echo "</select>";

?></td>

	<td><?php
$transporter_sql = "SELECT * FROM `transporter`";
$transporter_result = mysqli_query($con,$transporter_sql);

echo "<select class='select' ";
while ($transporter_row = mysqli_fetch_array($transporter_result)) {
	
    echo "name='transporter".$row['order_id']."'><option value='".$transporter_row['TransporterID']."'>".$transporter_row['TransporterName'] ."</option>";
	
}
echo "</select>";
?></td>
	
</tr>
	  <?php }
mysqli_close($con);


?>

<tr><td></td><td></td><td></td><td><button class="select" name="attach_rfid" type="submit" placeholder="Submit" >Submit</button></td>
  </form></tr>

</table>

</div>

</body>
</html>