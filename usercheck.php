<?php
include_once 'db/initial.php';

$username = $_POST['user'];
if(strlen($username)>8 && strlen($username)<15){
	$result = mysqli_query($db,'SELECT `id` from `users` where `username`="'.$username.'"');
	if(mysqli_num_rows($result)>0){
		echo '<i class="fa fa-times" aria-hidden="true" style="color:red"></i>';
	}else{
		echo '<i class="fa fa-check" aria-hidden="true" style="color:green"></i>';
	}
}else if(strlen($username)==0){
	echo '<i class="fa fa-pencil" aria-hidden="true"></i>';
}else{
	echo '<i class="fa fa-times" aria-hidden="true" style="color:red"></i>';
}

?>