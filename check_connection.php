<?php
//include db.php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "student_info";
 
$conn = mysqli_connect($servername,$username,$password,$db_name);

if($conn)
{
    // echo "connected sucessfully"."<br>";
}
else{
    die("connection failed"."<br>");
}



?>