<?php
require "connectToDatabase.php";

if($_POST["delete"]==""){
  echo "</br>";
  echo "No Records Found To Delete";
  exit;
}

$sql="DELETE FROM students WHERE id='$_POST[delete]'";

if ($conn->query($sql) === TRUE) {
  echo "</br>";
  echo "Student Deleted successfully";
} else {
  echo "Error Updating table: " . $conn->error;
}

$conn->close();
?>
