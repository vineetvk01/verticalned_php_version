<?php
if(!is_logged_in()){
	die(header("location: index.php"));
}else{
	$result = mysqli_query($db, 'SELECT `fname`, `lname`, `username`, `password`, `email`, `phone`, `verified`, `position`, `created`, `facebook`, `img` FROM `users` WHERE `username` = "'.$_SESSION['username'].'" ');
	if(mysqli_num_rows($result) == 1){
		$user = $result->fetch_object();
	}else{
		die("ERROR - 213");
	}
	
}
?>