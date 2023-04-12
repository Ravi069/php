<?php
require "connectToDatabase.php";

if(empty($_POST["delete"])){
  echo "</br>";
  echo "Add Student Number To Delete";
  exit;
}

$sql="SELECT id FROM students where id = '$_POST[delete]'";

$result = mysqli_query($conn, $sql);
echo "</br>";
if (mysqli_num_rows($result) > 0) {
  $delete_query="DELETE FROM students WHERE id='$_POST[delete]'";

  if ($conn->query($delete_query) === TRUE) {
    echo "</br>";
    echo "Student Deleted successfully";
  } 
} else {
  echo "No Records Found To Delete " . $conn->error;
}

$conn->close();
?>