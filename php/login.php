<?php
$username=$_POST['Username']; 
$password= $_POST['Password'];

$file = fopen("user_list.csv","r");
$flag =0;

while(! feof($file)){
	$temp = fgetcsv($file);
	//var_dump($temp);
	if($username==$temp[0] && $password==$temp[1])
		$flag =1;
}
fclose($file);
echo $flag;
?>