<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
</style>
</head>
<body>

<ul>
  <li><a href="tabledatareg.php">Registration Table</a></li>
  <li><a href="tabledatafeedback.php">Feedbaack Table</a></li>
  <li><a href="tabledatadetail.php">Detail Table</a></li>
  <li><a class="active" href="tabledfeedbackmin.php">Admin Table</a></li>
<li style="float:right"><a class="active" href="home.html">Sign Out</a></li>
</ul>
</body>
<body>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<head>
<style>
body {
  background-image: url('1.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
</head>

<?php
include"connect.php";
$query="select * from detail";
$res=mysqli_query($conn,$query);
?>
<table>
<tr>
   <th>First Name</th>
   <th>Last name</th>
<th>gender</th>
<th>dob</th>
<th>Mno</th>
<th>email</th>
<th>address</th>
<th>school</th>
<th>board</th>
<th>state</th>
<th>percent</th>
<th>grade</th>
<th>yop</th>
<th>stream</th>
<th>collegename</th>
<th>cboard</th>
<th>cstates</th>
<th>cpercents</th>
<th>collegegrade</th>
<th>cyop</th>
<th>gradcollege</th>
<th>university</th>
<th>ustream</th>
<th>firstyear</th>
<th>fgrade</th>
<th>secondyear</th>
<th>sgrade</th>
<th>thirdyear</th>
<th>tgrade</th>
<th>finalyear</th>
<th>finalgrade</th>
<th>uyop</th>
<th>pgcollege</th>
<th>pguniversity</th>
<th>pgstream</th>
<th>pgfirstyear</th>
<th>pggrade</th>
<th>pgsecondyear</th>
<th>pgsgrade</th>
<th>pgyop</th>
<th>project</th>
<th>subject</th>
<th>pyop</th>
<th>experience</th>
<th>eyear</th>
<th>hobbies</th>
<th>skill</th>
<th>language</th>
</tr>
<?php
while($row=mysqli_fetch_array($res))
{
echo "<tr>";
echo "<td>".$row['fname']."</td>";
echo "<td>".$row['lname']."</td>";
echo "<td>".$row['gender']."</td>";
echo "<td>".$row['dob']."</td>";
echo "<td>".$row['mno']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['address']."</td>";
echo "<td>".$row['school']."</td>";
echo "<td>".$row['board']."</td>";
echo "<td>".$row['state']."</td>";
echo "<td>".$row['percent']."</td>";
echo "<td>".$row['grade']."</td>";
echo "<td>".$row['yop']."</td>";
echo "<td>".$row['stream']."</td>";
echo "<td>".$row['collegename']."</td>";
echo "<td>".$row['cboard']."</td>";
echo "<td>".$row['cstates']."</td>";
echo "<td>".$row['cpercents']."</td>";
echo "<td>".$row['collegegrade']."</td>";
echo "<td>".$row['cyop']."</td>";
echo "<td>".$row['gradcollege']."</td>";
echo "<td>".$row['university']."</td>";
echo "<td>".$row['ustream']."</td>";
echo "<td>".$row['firstyear']."</td>";
echo "<td>".$row['fgrade']."</td>";
echo "<td>".$row['secondyear']."</td>";
echo "<td>".$row['sgrade']."</td>";
echo "<td>".$row['thirdyear']."</td>";
echo "<td>".$row['tgrade']."</td>";
echo "<td>".$row['finalyear']."</td>";
echo "<td>".$row['finalgrade']."</td>";
echo "<td>".$row['uyop']."</td>";
echo "<td>".$row['pgcollege']."</td>";
echo "<td>".$row['pguniversity']."</td>";
echo "<td>".$row['pgstream']."</td>";
echo "<td>".$row['pgfirstyear']."</td>";
echo "<td>".$row['pggrade']."</td>";
echo "<td>".$row['pgsecondyear']."</td>";
echo "<td>".$row['pgsgrade']."</td>";
echo "<td>".$row['pgyop']."</td>";
echo "<td>".$row['project']."</td>";
echo "<td>".$row['subject']."</td>";
echo "<td>".$row['pyop']."</td>";
echo "<td>".$row['experience']."</td>";
echo "<td>".$row['eyear']."</td>";
echo "<td>".$row['hobbies']."</td>";
echo "<td>".$row['skill']."</td>";
echo "<td>".$row['language']."</td>";
echo "</tr>";
}
?>
</table>

</body>
</html>
