<?php
include 'check_connection.php';

$id = $_GET['id'];
$sql = "DELETE FROM student_info WHERE id=$id";

$result = mysqli_query($conn, $sql);
if($result){
    header('Location: display_data.php');
} else {
    echo "Error while deleting";
}

mysqli_close($conn);
?>
