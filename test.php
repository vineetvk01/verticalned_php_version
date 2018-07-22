<?php
include 'db/initial.php';

$res = mysqli_query($db,'SELECT `id` FROM `users` WHERE `username` = "vineet"');
echo mysqli_num_rows($res);

?>