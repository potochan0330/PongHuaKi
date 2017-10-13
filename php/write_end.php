<?php
$end = fopen('game_state.csv', 'w');

$end_bol = array ($_POST['endbol']);

fputcsv($end, $end_bol);

fclose($end);
?>
