<?php
include"connect.php";
 
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$mno=$_POST['mno'];
$username=$_POST['username'];
$gender=$_POST['gender'];
$pwd=$_POST['pwd'];


$query="insert into adminreg(fname,mname,lname,mno,username,gender,pwd) values('".$fname."','".$mname."','".$lname."','".$mno."','".$username."','".$gender."','".$pwd."')";


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

