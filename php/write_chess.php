<?php
$chess_info = fopen('chess_posi.csv', 'w');

//storing format
//Redchess1, Redchess2, Bluechess1, Bluechess2
 
$chess = array($_POST['Rchess1'], $_POST['Rchess2'], $_POST['Bchess1'], $_POST['Bchess2']);


fputcsv($chess_info, $chess);


fclose($chess_info);

?>