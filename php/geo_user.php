<?php

	$file = file_get_contents("user_list.csv");
	$temp = explode("\n", $file);
	$temp2 = array();
	
	for($i=0;$i<sizeof($temp);$i++){
		$temp2[$i] = explode(",", $temp[$i]);
	}
	echo json_encode($temp2);
	

?>