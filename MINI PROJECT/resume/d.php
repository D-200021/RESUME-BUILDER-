<?php
include"connect.php";
 
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$mno=$_POST['mno'];
$email=$_POST['email'];
$address=$_POST['address'];
$school=$_POST['school'];
$board=$_POST['board'];
$state=$_POST['state'];
$percent=$_POST['percent'];
$grade=$_POST['grade'];
$yop=$_POST['yop'];
$stream=$_POST['stream'];
$collegename=$_POST['collegename'];
$cboard=$_POST['cboard'];
$cstates=$_POST['cstates'];
$cpercents=$_POST['cpercents'];
$collegegrade=$_POST['collegegrade'];
$cyop=$_POST['cyop'];
$gradcollege=$_POST['gradcollege'];
$university=$_POST['university'];
$ustream=$_POST['ustream'];
$firstyear=$_POST['firstyear'];
$fgrade=$_POST['fgrade'];
$secondyear=$_POST['secondyear'];
$sgrade=$_POST['sgrade'];
$thirdyear=$_POST['thirdyear'];
$tgrade=$_POST['tgrade'];
$finalyear=$_POST['finalyear'];
$finalgrade=$_POST['finalgrade'];
$uyop=$_POST['uyop'];
$pgcollege=$_POST['pgcollege'];
$pguniversity=$_POST['pguniversity'];
$pgstream=$_POST['pgstream'];
$pgfirstyear=$_POST['pgfirstyear'];
$pggrade=$_POST['pggrade'];
$pgsecondyear=$_POST['pgsecondyear'];
$pgsgrade=$_POST['pgsgrade'];
$pgyop=$_POST['pgyop'];
$project=$_POST['project'];
$subject=$_POST['subject'];
$pyop=$_POST['pyop'];
$expriance=$_POST['experience'];
$eyear=$_POST['eyear'];
$hobbies=$_POST['hobbies'];
$skill=$_POST['skill'];
$language=$_POST['language'];

$query="insert into detail(fname,lname.gender,dob,mno,email,address,school,board,state,percent,grade,yop,stream,collegename,cboard,cstates,cpercents,collegegrade,cyop,gradcollege,university,ustream,firstyear,fgrade,secondyear,sgrade,thirdyear,tgrade,finalyear,finalgrade,uyop,pgcollege,pguniverity,pgstream,pgfirstyear,pggrade,pgsecondyear,pgsgrade,pgyop,project,subject,pyop,expriance,eyear,hobbies,skill,language) value('".$fname."','".$lname."','".$gender."','".$dob."','".$mno."','".$email."','".$address."','".$school."','".$board."','".$state."','".$percent."','".$grade."','".$yop."','".$stream."','".$collegename."','".$cboard."','".$cstates."','".$cpercents."','".$collegegrade."','".$cyop."','".$gradcollege."','".$university."','".$ustream."','".$firstyear."','".$fgrade."','".$secondyear."','".$sgrade."','".$thirdyear."','".$tgrade."','".$finalyear."','".$finalgrade."','".$uyop."','".$pgcollege."','".$pguniversity."','".$pgstream."','".$pgfirstyear."','".$pggrade."','".$pgsecondyear."','".$pgsgrade."','".$pgyop."','".$project."','".$subject."','".$pyop."','".$expriance."','".$eyear."','".$hobbies."','".$skill."','".$language."')";



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