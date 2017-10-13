<?php
$file = fopen("game_state.csv","r");

$temp= fgetcsv($file);

if($temp=="0"){
	echo con; //game not end
}
else{
	echo end;  //game end
}

fclose($file);
?>
