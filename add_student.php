<?php
require "connectToDatabase.php";

$sql="INSERT INTO students (student_name, department)
VALUES ('$_POST[student_name]', '$_POST[department]')";

if ($conn->query($sql) === TRUE) {
  echo "</br>";
  echo "Data Inserted successfully";
} else {
  echo "Error Adding into table: " . $conn->error;
}

$conn->close();

?>

