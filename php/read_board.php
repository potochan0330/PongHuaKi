<?php
$file = fopen("board_info.csv","r");

$temp= fgetcsv($file);

for($i=0;$i<5;$i++){
	echo $temp[$i]."\t";
}

fclose($file);
?>
