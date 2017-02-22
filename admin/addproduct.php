<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) || $role!="admin"){
      header('Location: index.php?err=2');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Haldiram</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
  
  <nav class="w3-sidenav w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold" id="mySidenav"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-padding-xlarge w3-hide-large w3-display-topleft w3-hover-white" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Haldiram</b></h3>
  </div>
  <!--<a href="#" onclick="w3_close()" class="w3-padding w3-hover-white">Home</a> 
  <a href="#showcase" onclick="w3_close()" class="w3-padding w3-hover-white">Ready For Dispatch</a> 
  <a href="#services" onclick="w3_close()" class="w3-padding w3-hover-white">Track Product</a> 
  <a href="#designers" onclick="w3_close()" class="w3-padding w3-hover-white">Analytical Insight</a> 
  <a href="#packages" onclick="w3_close()" class="w3-padding w3-hover-white">Alerts</a>-->
  
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
  
    
        

     <div class="container homepage">
      <div class="row">
         <div class="col-md-3"></div>
            <div class="col-md-6">
			  <table  class="table" id='transport'>				   
		      </table>
			  
            </div>
          <div class="col-md-3"></div>
        </div>
    </div>    
	
	<div class="login">
       <legend class="legend" >ADD PRODUCT</legend>
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
</div>
  
	

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>