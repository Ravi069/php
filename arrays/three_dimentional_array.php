<?php
$state_names = array(
  "Tamilnadu" => array(
  "Chennai",
  "Kovai",
  "Tuticorin" => array("Vilathikulam","Kovilpatti","Ettayapuram")),
  "Kerala",
  "Karnataka"
  
  );
  echo "<pre>";
  print_r($state_names);
  echo "</pre>";

  echo $state_names["Tamilnadu"]["Tuticorin"][0];
?>
