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
/* $conn_name = 'localhost';	
$user_db = 'id1533288_vineetdeveloper';
$pass_db = 'qwerty123';
$db_name = 'id1533288_verticalned'; */ 

//Taking the connection here.
$db = new mysqli($conn_name,$user_db,$pass_db,$db_name);
if($db->connect_errno)
 { die('Sorry! Under Maintainance. Will be back in a while.'); 
   }
?>