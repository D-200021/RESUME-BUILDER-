<?php
$servername="localhost";
$username="root";
$password="";
$dbname="resume";
  

$conn=mysqli_connect($servername, $username, $password, $dbname);
   

if(!$conn) {
   die("Connection Failed:" .
 mysqli_connection_error());
}
else{
echo "Successfully inserted";
}
?>
 