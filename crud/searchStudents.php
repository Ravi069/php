<?php
require "connectToDatabase.php";

$sql="SELECT id,student_name,department FROM students where department = '$_GET[search]'";

$result = mysqli_query($conn, $sql);
echo "</br>";
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["student_name"]." - Department: " . $row["department"]. "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();

?>

