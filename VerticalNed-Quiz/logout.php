<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>logging out</title>
</head>

<body>

Logging you out..... <br /><br />
Redirecting to main page...in <span id="count_num"></span>
<br /><br />
if not redirected <a href="index.php">click here</a>.
<script>

function handleTimer(i){
	document.getElementById("count_num").innerHTML = i;
	count--;
	if(count <= 0){
		window.location("index.php");
	}
}

var count = 3;
var timer = setInterval(function() { handleTimer(count); }, 1000);



</script>






<?php
include_once 'db/initial.php';

logout();
//die(header('location: index.php'));
?>
</body>
</html>