<?php
//Give the connection name :
$conn_name = 'localhost';
	
//Give the username :
$user_db = 'root';
//Give the password :
$pass_db = '';
// Give the database name :
$db_name = 'vn_db';


//Online Server :
/*$conn_name = 'mysql8.000webhost.com';	
$user_db = 'a7241163_gopoj';
$pass_db = 'qwerty123';
$db_name = 'a7241163_gopo';*/


//Taking the connection here.
$db = new mysqli($conn_name,$user_db,$pass_db,$db_name);
if($db->connect_errno)
 { die('Sorry! Under Maintainance. Will be back in a while.'); 
   }
?>