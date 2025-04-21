<?php

include "check_connection.php";

/*
$sql  ="INSERT INTO `student_info`(`student_id`,`student_name`, `date_of_birth`, `address`) VALUES ('15','www','1898-05-02','palpa')";

$result = mysqli_query($conn,$sql);

if($result)
{
    echo"inserted sucessfully";
}
else echo "could not insert";

mysqli_close($conn);
*/

$id = $_POST['id'];
$name = $_POST['name'];
$date = $_POST['date'];
$address = $_POST['address'];

$sql  ="INSERT INTO `student_info`(`id`,`name`, `date`, `address`) VALUES ('$id','$name','$date','$address')";



$result = mysqli_query($conn,$sql);

if($result)
{
   header('location:display_data.php');
}
else echo "could not insert";

mysqli_close($conn);


?>