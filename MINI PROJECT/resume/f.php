<?php
include"connect.php";
 
$name=$_POST['name'];
$email=$_POST['email'];
$hear=$_POST['hear'];
$rating=$_POST['rating'];
$comments=$_POST['comments'];



$query="insert into feedback(name,email,hear,rating,comments) values('".$name."','".$email."','".$hear."','".$rating."','".$comments."')";


$result=mysqli_query($conn,$query);

if($result)
{
echo"Successfully Inserted";
}
else{

echo"Failed";
}

mysqli_close($conn);

?>
