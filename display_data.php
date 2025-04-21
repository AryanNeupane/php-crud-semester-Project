<?php
include 'check_connection.php';

$sql = "SELECT * FROM student_info";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing=0> 
            <tr>
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Date of Birth</th>
                <th>Address</th>
                <th>Delete</th>
            </tr>";
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"]. "</td>
                <td>" . $row["name"]. "</td>
                <td>" . $row["date"]. "</td>
                <td>" . $row["address"]. "</td>
                <td><a href='delete.php?id=" . $row['id'] . "'>Delete</a></td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
 