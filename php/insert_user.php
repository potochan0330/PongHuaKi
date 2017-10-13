<?php
//$user_info = fopen('user_list.csv', 'a');

$user_data = array($_POST['Account'], $_POST['Password'], $_POST['Sex'], $_POST['Location_lat'], $_POST['Location_lng'], ($_POST['Score']));

file_put_contents("user_list.csv" , implode(",",$user_data)."\n",FILE_APPEND);

//fclose($user_info);
?>