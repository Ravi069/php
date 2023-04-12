<?php

$state_names = array(
"Tamilnadu" => array("Chennai","Kovai","Tuticorin"),
"Kerala",
"Karnataka"
);

echo "<pre>";
print_r($state_names);
echo "</pre>";

echo $state_names["Tamilnadu"][1];
?>
