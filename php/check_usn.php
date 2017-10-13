
<?php
$username=$_POST['Username']; 

$file = fopen("user_list.csv","r");

while(! feof($file)){
	$temp = fgetcsv($file);
	if($temp[0]==$username){
		echo 0;
	}
	else{
		echo 1;	
	}
}

fclose($file);
?>