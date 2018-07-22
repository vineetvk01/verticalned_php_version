<?php

include 'db/initial.php';
$post_id = $_POST['postid'];

$ree = mysqli_query($db,"SELECT `id` FROM `post_likes` WHERE `username` = '".$_SESSION['username']."' AND post_id = ".$post_id."");
if(mysqli_num_rows($ree) > 0){
	mysqli_query($db,"DELETE FROM `post_likes` WHERE `username` = '".$_SESSION['username']."' AND post_id = ".$post_id."");
	}else{
	mysqli_query($db,"INSERT INTO `post_likes`(`post_id`, `username`) VALUES (".$post_id.",'".$_SESSION['username']."')");
	}

?>
