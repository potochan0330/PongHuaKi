<?php
$file = fopen("chess_attr.csv","r");

while(! feof($file)){
	$temp = fgetcsv($file);
	for($i=0;$i<3;$i++)
		echo $temp[$i]."\t";
}
unlink('chess_attr.csv');

fclose($file);
?>