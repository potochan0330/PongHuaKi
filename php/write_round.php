<?php
$round_info = fopen('round.csv', 'w');

$round = array ($_POST['Round']);

fputcsv($round_info, $round);

fclose($round_info);
?>