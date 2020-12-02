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
  <li><a class="active"  href="tabledatafeedback.php">Feedbaack Table</a></li>
  <li><a href="tabledatadetail.php">Detail Table</a></li>
  <li><a href="tabledataadmin.php">Admin Table</a></li>
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
$query="select * from feedback";
$res=mysqli_query($conn,$query);
?>
<table>
<tr>
    <th>Name</th>
   <th>Email ID</th>
<th>Hear</th>
<th>Rating</th>
<th>Comments</th>
</tr>
<?php
while($row=mysqli_fetch_array($res))
{
echo "<tr>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['hear']."</td>";
echo "<td>".$row['rating']."</td>";
echo "<td>".$row['comments']."</td>";
echo "</tr>";
}
?>
</table>

</body>
</html>
