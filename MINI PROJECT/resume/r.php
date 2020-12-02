<?php
include"connect.php";
 
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$mno=$_POST['mno'];
$username=$_POST['username'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$pwd=$_POST['pwd'];


$query="insert into reg(fname,mname,lname,mno,username,age,gender,pwd) values('".$fname."','".$mname."','".$lname."','".$mno."','".$username."','".$age."','".$gender."','".$pwd."')";


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

