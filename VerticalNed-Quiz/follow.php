<?php

include 'db/initial.php';

$user = $_POST['user'];
$status = 1;
if(isset($_GET['q'])&& !empty($_GET['q'])){
	$q = $_GET['q'];
	if($q == 'check'){
		$result = mysqli_query($db,'SELECT `id` FROM `following` WHERE `followerid` = "'.$_SESSION['id'].'" AND `userid` = "'.$user.'"');
		if(mysqli_num_rows($result) > 0){
			echo "<i class='fa fa-check'></i> &nbsp; Following";
		}else{
			echo "<i class='fa fa-user'></i> &nbsp; Follow";
		}
		
	}
	else if($q == 'del'){
		mysqli_query($db,'DELETE FROM `following` WHERE `followerid` = "'.$_SESSION['id'].'" AND `userid` = "'.$user.'"');
		//echo "<i class='fa fa-user'></i> &nbsp; Follow";
	}
	else if($q == 'fol'){
		mysqli_query($db,'INSERT INTO `following` (`userid`, `followerid`) VALUES ("'.$user.'" , "'.$_SESSION['id'].'")');
		//echo "<i class='fa fa-user'></i> &nbsp; Follow";
	}
	
}


?>