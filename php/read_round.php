<?php
$file = fopen("round.csv","r");
$temp = fgetcsv($file);
echo $temp[0];
?>