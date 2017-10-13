<?php
$round=$_POST['Round']; 
$file = fopen("room.csv","r");

while(! feof($file)){
	$temp = fgetcsv($file);
	if($temp[2]==$round){
		echo $temp[1];
}	
}

fclose($file);
?>