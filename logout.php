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
if not redirected <a href="index1.php">click here</a>.







<?php
include_once 'db/initial.php';

logout();
die(header('location: index.php'));
?>
</body>
</html>