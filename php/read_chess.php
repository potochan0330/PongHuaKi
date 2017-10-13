<?php
$file = fopen("chess_posi.csv","r");

$temp= fgetcsv($file);

for($i=0;$i<4;$i++){
	echo $temp[$i]."\t";
}

?>