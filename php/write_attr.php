<?php

$file ='chess_attr.csv';

//storing format
//chess_id, attribute_name, value

$attr = $_POST['ID']."\t".$_POST['Attribute']."\t".$_POST['Value']."\n";

file_put_contents($file, $attr, FILE_APPEND | LOCK_EX);
?>