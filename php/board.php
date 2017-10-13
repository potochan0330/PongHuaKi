<?php
$board_info = fopen('board_info.csv', 'w');

$board_data= array($_POST['chess1'], $_POST['chess2'],  $_POST['chess3'],  $_POST['chess4'],  $_POST['chess5']);

fputcsv($board_info , $board_data);

fclose($board_info);
?>