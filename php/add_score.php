<?php
$username=$_POST['Username']; 

if(file_exists('user_list.csv')){
	
	$file = file_get_contents("user_list.csv");
	$temp = explode("\n", $file);
	$temp2 = array();
	
	for($i=0;$i<sizeof($temp);$i++){
		$temp2[$i] = explode(",", $temp[$i]);
	}
	
	for($i=0;$i<sizeof($temp2);$i++){
		if($username==$temp2[$i][0]){
			//echo $r[5];
			$temp2[$i][5]++;
			//echo $r[5];
		}
	}
	
	//var_dump($temp2[2]);
	
	for($i=0;$i<sizeof($temp2);$i++){
			$temp2[$i]=implode(",", $temp2[$i]);
	}

	
	$temp2 = implode("\n", $temp2);
	
	file_put_contents("user_list.csv", $temp2);
}

?>
