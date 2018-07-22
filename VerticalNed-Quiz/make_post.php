<?php
include 'db/initial.php';

if(isset($_POST['userpost']) && !empty($_POST['userpost'])){
	$post = $_POST['userpost'];
	$datetime = date('Y-m-d H:i:s', time());
	mysqli_query($db,'INSERT INTO `posts`(`userid`, `post`, `moment`) VALUES ('.$_SESSION['id'].', "'.$post.'" , "'.$datetime.'" )');
}

?>