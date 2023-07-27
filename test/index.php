<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password,"students");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql="select * from student_details";
$query=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($query))
{
echo $row['Name']." ".$row['reg_no'];
}
?>