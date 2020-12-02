<?php
 if($_SERVER['REQUEST_METHOD']=='POST'){
     $username = $_POST['username'];
     $pwd = $_POST['pwd'];
 
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'resume');
    $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

     $sql = "SELECT * FROM reg WHERE username = '$username' AND pwd='$pwd' ";

    	$result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);

      // If result matched $username and $pwd, table row must be 1 row

    	if($count == 1){
    	     include 'welcome.php';
            
             include 'detail.html';
    	}
    	else{
    	    echo"INVALID PASSWORD";
    	}
    	mysqli_close($conn);
 }

?>