<!DOCTYPE html>
<html>
<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) || $role!="admin"){
      header('Location: ../index.php?err=2');
    }
?>

<title>HALDIRAM</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

<link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<body>

<!-- Sidenav/menu -->
<nav class="w3-sidenav w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold" id="mySidenav"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-padding-xlarge w3-hide-large w3-display-topleft w3-hover-white" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Haldiram</b></h3>
  </div>
  <a href="#" onclick="w3_close()" class="w3-padding w3-hover-white">Home</a> 
  <a href="#showcase" onclick="w3_close()" class="w3-padding w3-hover-white">Ready For Dispatch</a> 
  <a href="#services" onclick="w3_close()" class="w3-padding w3-hover-white">Track Product</a> 
  <a href="#designers" onclick="w3_close()" class="w3-padding w3-hover-white">Analytical Insight</a> 
  <a href="#packages" onclick="w3_close()" class="w3-padding w3-hover-white">Alerts</a>
  
  <a href="index.php">ALERTS</a>
  <a href="addproduct.php">ADD PRODUCTS</a>
  <a href="products.php">PRODUCTS</a>
		  <a href="location.php">ADD LOCATION</a>
		  <a href="warehouses.php">ADD WAREHOUSES</a>		  
		  <a href="transporter.php">ADD TRANSPORTER</a>
		  <a href="retailers.php"> ADD RETAILERS</a>
		  <a href="rfid.php"> ADD RFID TAG</a>
		  <a href="productattach.php">PRODUCT ATTACH WITH RFID TAG</a>
		  <a href="orders.php">ORDERS</a>
		  <a href="attach.php">ORDERS ATTACH WITH RFID AND TRANSPORTER</a>
		  <a href="track.php">TRACK PRODUCT</a>
		  <a href="logout.php">LOGOUT</a>
          <a href="#">HI!  <?php echo $_SESSION['sess_username'];?></a>
  
  
  <a href="../logout.php" class="w3-padding w3-hover-white">Logout</a>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-btn w3-red w3-border w3-border-white w3-margin-right" onclick="w3_open()">?</a>
  <span>FlexiMobility</span>
</header>

<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Add Product</b></h1>
    <!--<h1 class="w3-xxxlarge w3-text-red"><b>Ready For Dispatch.</b></h1>-->
    <hr style="width:50px;border:5px solid red" class="w3-round">
	
	<form action="func.php" method="post">
  <div class="input"><label> <input name="productid" type="text" placeholder="PRODUCT ID" required/></label></div>
  <div class="input"><label><input name="producttype" type="text" placeholder="PRODUCT TYPE" required/></label></div>
  <div class="input"><label> <input name="productprice" type="text" placeholder="PRODUCT PRICE" required/></label></div>
  <div class="input"><label><input name="perishduration" type="text" placeholder="PERISH DURATION" required/></label></div>
  <div class="input"><label><input name="weight" type="text" placeholder="WEIGHT" required/></label></div>
  <button class="submit" name="submitted" type="submit" placeholder="Submit" >→</button>
  </form>
  <div class="feedback">
  <?php 

                                $errors = array(
                                    1=>"Submitted Successfully!",
                                   2=>"Not Successfully!"
                                  );

                                $error_id = isset($_GET['err']) ? (int)$_GET['err'] : 0;

                                if ($error_id == 1) {
                                       echo '<p class="text-danger">'.$errors[$error_id].'</p>';
                                  }elseif ($error_id == 2) {
                                     echo '<p class="text-danger">'.$errors[$error_id].'</p>';
                                  }
                               ?>  
  	
  </div>
	
  
  
  
<!-- End page content -->
</div>

<!-- W3.CSS Container 
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="http://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">TridentGBS</a></p></div>
-->
<script>
// Script to open and close sidenav
function w3_open() {
    document.getElementById("mySidenav").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>
