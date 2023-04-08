<?php
require "connectToDatabase.php";

$sql="UPDATE students SET department='CS' WHERE id='$_POST[update]'";

if ($conn->query($sql) === TRUE) {
  echo "</br>";
  echo "Data Updated successfully";
} else {
  echo "Error Updating table: " . $conn->error;
}

$conn->close();

?>

