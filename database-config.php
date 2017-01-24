<?php
  

// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:trident1.database.windows.net,1433; Database = database_azure", "trident", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "trident@trident1", "pwd" => "", "Database" => "database_azure", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:trident1.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

if($conn)
{
 echo"1";  
}
else{
   echo "2";
   
}



   
?>
