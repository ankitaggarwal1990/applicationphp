<?php
   // define database related variables
   $database = 'database';
   $host = 'localhost';
   $user = 'root';
   $pass = '';

echo "sadas";
   // try to conncet to database
   $dbh = new PDO("mysql:dbname={$database};host={$host};port={3306}", $user, $pass);

   if(!$dbh){

      echo "unable to connect to database";
   }
else
{
   echo "Connect";
}
   
?>
