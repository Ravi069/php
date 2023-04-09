<?php
require "connectToDatabase.php";

if(($_POST["student_name"]=="") || ($_POST["department"]=="")){
  echo "</br>";
  echo "No Records Found To Add";
  exit;
}

$sql="INSERTs INTO students (student_name, department)
VALUES ('$_POST[student_name]', '$_POST[department]')";

if ($conn->query($sql) === TRUE) {
  echo "</br>";
  echo "Data Inserted successfully";
} else {
  echo "Error Adding into table: " . $conn->error;
}

$conn->close();
?>
