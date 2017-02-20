
<!DOCTYPE html>
<html>
<head>
	<title>Track Panel</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no"/>
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta http-equiv="refresh" content="30" />
	<link rel="stylesheet" href="style/style.css" />

                    </head>
<script >
    function showTrans() 
    {        
    document.getElementById('warehouseDiv').style.display = 'none';
    document.getElementById('readydiv').style.display = 'none';
    document.getElementById('ContainerEnv').style.display = 'none';
    document.getElementById('FinalDelivery').style.display = 'none';
    document.getElementById('TransportStatus').style.display = 'block';  
    
    }
function showWare() {    
    
    document.getElementById('warehouseDiv').style.display = 'block';
    document.getElementById('readydiv').style.display = 'block';
    document.getElementById('ContainerEnv').style.display = 'none';
    document.getElementById('FinalDelivery').style.display = 'none';
    document.getElementById('TransportStatus').style.display = 'none';  
    
}
function showReatail() {    
    
    document.getElementById('warehouseDiv').style.display = 'none';
    document.getElementById('readydiv').style.display = 'none';
    document.getElementById('ContainerEnv').style.display = 'none';
    document.getElementById('FinalDelivery').style.display = 'block';
    document.getElementById('TransportStatus').style.display = 'none';  
    
}
   </script>
<body>
	<div class="leftHalf">
<img class="newappIcon" src="images/Logo.png" alt="Haldiram">
				<h1>
					<span class="blue">Track and Trace Panel</span>
				</h1>
				</br>
				</br>
				<div style="padding:25px">
				<button  onclick="showWare()"style="background-color:#4CAF50; border-radius:25px; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px;margin-left:70px ; cursor: pointer;" >
				Ready For Dispatch				
				</button>
				</br>
				<button  onclick="showTrans()" style="background-color:#4CAF50; border: none; color: white; padding: 15px 44px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px;margin-left:70px ; cursor: pointer;" >
				Transport Status			
				</button>
				</br>
				<button  onclick="showReatail()" style="background-color:#4CAF50; border: none; color: white; padding: 15px 54px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px;margin-left:70px ; cursor: pointer;" >
				Final Delivery				
				</button>
				</div>
				
	</div>
	<div class = "rightHalf">
	<header>
		<div class='title' id='readydiv'>READY FOR DISPATCH 
		<!--<button class='' onclick="toggleAppInfo()" title='Application Information'>
				<img height="15px" width="15px" src='images/Logo.png' alt='detail'/>		
		</button>-->
		</div>
	</header>	
	<section id='appinfo' style='display: none;'>
		<table>
			<!--<tbody>
				<tr><td>This application helps you organize your favorite files.</td></tr>
				<tr><td>Supports all file types, like Audio, Video, Photos, Text etc.</td></tr>
				<tr><td>Click on <img src='images/add.png' alt='add'/> icon to create a new category for your files. Provide a title and description for the category in the text fields.</td></tr>
				<tr><td>To add a file to a given category, Click on 'Browse' button to select a file, and 'Upload' button to upload the file.</td></tr>
				<tr><td>To modify a title or description, Edit the text and press Enter.</td></tr>
				<tr><td>You can add multiple files (of any type) to a category.</td></tr>
				<tr><td>Click on <span class = 'deleteBtn' alt='delete'></span> icon to delete the category.</td></tr>
				
				
			</tbody>-->
		</table>
	</section>
	<section>
	<div id="warehouseDiv" >
		<table id='notes' class='records' border='0' cellspacing='0' cellpadding='0'>
		<tr><th>WAREHOUSE EXIT TIME</th><th>DELIVERY ITEM  <?php $con = mysqli_connect('trident1.database.windows.net','trident','password@123','database_azure');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
else{
	echo "connect";
} ?></th><th>SOURCE</th><th>CARRIER</th><th>RETAIL OUTLET</th></tr>
		<!--<tr><td>7/11/2016 2:45:00 AM</td><td>Rasgulla</td><td style="background-color:#006400";>Warehouse</td><td>ECCO1221</td><td>Outlet Kashmere Gate</td></tr>
		        <!-- <tr><td>31/1/2016 11:00:00 AM</td><td>Barfee</td><td style="background-color:#006400";>Warehouse</td><td>ECCO8791</td><td>Outlet Greater Kailash II</td></tr>
		         <tr><td>31/1/2016 12:00:00 AM</td><td>Rasgulla</td><td style="background-color:#006400";>Warehouse</td><td>ECCO1671</td><td>Outlet Ashram</td></tr>
		         <tr><td>31/1/2016 01:00:00 Am</td><td>Dodha</td><td style="background-color:#006400";>Warehouse</td><td>ECCO2345</td><td>Outlet Rohini</td></tr>
-->
		<tbody></tbody></table>
		</div>
		
		</br></br>
		<div id="TransportStatus">
		<header> TRANSPORT STATUS </header>
		</br>
		<table border="1" id='transport'>
		          <tr><th>TRANSPORT ENTER TIME</th><th>DELIVERY ITEM</th><th>SOURCE</th><th>CARRIER</th><th>RETAIL OUTLET</th></tr>
		         <!-- <tr><td>7/11/2016 2:04:00 PM</td><td>Rasgulla</td><td>Warehouse</td><td style="background-color:#006400";>ECCO1221</td><td>Outlet Kashmere Gate</td></tr>
		         <tr><td>6/10/2016 11:05:00 AM</td><td>Barfee</td><td>Warehouse</td><td style="background-color:#006400";>ECCO8791</td><td>Outlet Greater Kailash II</td></tr>
		         <tr><td>6/10/2016 12:02:00 AM</td><td>Rasgulla</td><td>Warehouse</td><td style="background-color:#006400";>ECCO1671</td><td>Outlet Ashram</td></tr>
		         <tr><td>31/10/2016 01:08:00 AM</td><td>Dodha</td><td>Warehouse</td><td style="background-color:#006400";>ECCO2345</td><td>Outlet Rohini</td></tr>
		         -->
		</table>
		</div>

		
		
		
		<div id="ContainerEnv">
		<header>CONTAINER ENVIRONMENT</header>
		</br>
		<table border="1" id="ContainerTable">
		          <tr><th>TRANPORT</th><th>GYRO ALERT</th><th>TEMPERATURE ALERT</th><th>LOCATION</th></tr>
		       <!--   <tr><td>1</td><td style="background-color:#006400";>ECCO 1221</td><td>NORMAL</td><td>NORMAL</td>                                               <td><a href="https://www.google.es/maps/dir/'52.51758801683297,13.397978515625027'/'52.49083837044266,13.369826049804715'" target="_blank">CLICK HERE</a></td></tr>
		         <tr><td>2</td><td style="background-color:#006400";>ECCO 8791</td><td>NORMAL</td><td style="background-color:#8B0000";>BELOW NORMAL</td>    <td><a href="https://www.google.es/maps/dir/'52.51758801683297,13.397978515625027'/'52.49083837044266,13.369826049804715'" target="_blank">CLICK HERE</a></td></tr>
		         <tr><td>3</td><td style="background-color:#006400";>ECCO 1671</td><td>NORMAL</td><td>NORMAL</td>                                            <td><a href="https://www.google.es/maps/dir/'52.51758801683297,13.397978515625027'/'52.49083837044266,13.369826049804715'" target="_blank">CLICK HERE</a></td></tr>
		         <tr><td>4</td><td style="background-color:#006400";>ECCO 2545</td><td>NORMAL</td><td style="background-color:#8B0000";>BELOW NORMAL</td>   <td><a href="https://www.google.es/maps/dir/'52.51758801683297,13.397978515625027'/'52.49083837044266,13.369826049804715'" target="_blank">CLICK HERE</a></td></tr>
		        --> 
		</table>
		</div>
		
		</br></br>
		<div id="FinalDelivery">
		<header> FINAL DELIVERY STATUS  </header>
		</br>
		<table border="1" id='finaltable'>
             	<tr><th>RETAIL ENTRY TIME</th><th>DELIVERY ITEM</th><th>SOURCE</th><th>CARRIER</th><th>DELIVERY</th><th>RETAIL OUTLET</th></tr>
             	<!--<tr><td>1</td><td>31/1/2016 06:00:00 PM</td><td>Gulab Jamun</td><td>Warehouse</td><td>ECCO 1221</td><td style="background-color:#006400";><input type="checkbox" name="vehicle" value="Bike" checked>Delivered</td><td>Outlet Kashmere Gate</td></tr>
		         <tr><td>2</td><td>31/1/2016 05:00:00 AM</td><td>Kaju Katli</td><td>Warehouse</td><td>ECCO 8791</td><td><input type="checkbox" name="vehicle" value="Bike" >Undelivered</td><td></td></tr>
		         <tr><td>3</td><td>31/1/2016 04:00:00 AM</td><td>Rasgulla</td><td>Warehouse</td><td>ECCO 1671</td><td style="background-color:#ffff00";><input type="checkbox" name="vehicle" value="Bike" checked>Rejected</td><td>Outlet ASHRAM</td</tr>
		         <tr><td>4</td><td>31/1/2016 03:00:00 AM</td><td>Dodha Barfee</td><td>Warehouse</td><td>ECCO 2345</td><td style="background-color:#8B0000";><input type="checkbox" name="vehicle" value="Bike" checked>Unauthorized Delivery</td><td>Outlet Greater Kailash II</td></tr>
		         -->
         </table>
         </div>

	</section>
	<footer>
	<div class='tips'>
			<!-- <button class='detailBtn' onclick="toggleServiceInfo()" title='Service information'>
				<img src='images/detail.png' alt='detail'/>
			-->
			<button class="addBtn" onclick="addItem()" title="add record">
							<!--<img src="images/add.png" alt="add">-->
						</button>
		</div>
		<div id="loadingImage"></div>	
		<br><br><br><br><br>	
		<div id="errorDiv" class='errorMsg'></div>	
		
	</footer>
	<script type="text/javascript" src="/scripts/util.js"></script>
	<script type="text/javascript" src="/scripts/index.js"></script>
	<div id="myImage"><div id="innerImg"></div></div>
	<br><br><br>	
	</div>
</body>
</html>
