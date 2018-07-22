<?php

include 'db/initial.php';
$post_id = $_POST['postid'];

mysqli_query($db,"DELETE FROM `posts` WHERE `userid`=".$_SESSION['id']." AND `id`=".$post_id."");
mysqli_query($db,"DELETE FROM `post_likes` WHERE `post_id`=".$post_id."");


?>
