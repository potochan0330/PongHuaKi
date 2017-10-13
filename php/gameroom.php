<?php

if(!file_exists('room.csv')){

	$room_info = fopen('room.csv', 'w');

	$room_data = array("player1", $_POST['Username'], $_POST['Player']);

	fputcsv($room_info, $room_data);

	fclose($room_info);
	
	echo("0");
}
else{
	$room_info = fopen('room.csv', 'a');

	$room_data = array("player2", $_POST['Username'], $_POST['Player']+1);

	fputcsv($room_info, $room_data);

	fclose($room_info);
	
	echo("1");

}
?>