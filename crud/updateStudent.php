<?php
require "connectToDatabase.php";

if(empty($_POST["update"])){
  echo "</br>";
  echo "No Records Found To Update";
  exit;
}

$sql="SELECT id FROM students where id = '$_POST[update]'";

$result = mysqli_query($conn, $sql);
echo "</br>";
if (mysqli_num_rows($result) > 0) {
  $update_query="UPDATE students SET department='CS' WHERE id='$_POST[update]'";

if ($conn->query($update_query) === TRUE) {
  echo "</br>";
  echo "Data Updated successfully";
} 
} else {
  echo "No Records Found To Update: " . $conn->error;
}
$conn->close();
?>