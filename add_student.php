<?php
require "connectToDatabase.php";

if(!empty($_POST["student_name"]) || !empty($_POST["department"])){

$sql="INSERT INTO students (student_name, department)
VALUES ('$_POST[student_name]', '$_POST[department]')";

if ($conn->query($sql) === TRUE) {
  echo "</br>";
  echo "Data Inserted successfully";
} else {
  echo "Error Adding into table: " . $conn->error;
}
}else{
  echo "</br>";
  echo "Add Student name and department ";
}

$conn->close();
?>
