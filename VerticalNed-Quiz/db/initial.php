<?php
//ob_start();
session_start();
require 'connect_db.php';
include 'secure.php';

error_reporting(1);

//set timezone
date_default_timezone_set('Asia/Calcutta');

//application address
//define('DIR','');
//define('SITEEMAIL','noreply@verticalned.com');
 
function is_blocked($ip){
	global $db;
	$result = mysqli_query($db,'SELECT ip_add FROM blocked_ip');
	if(mysqli_num_rows($result) >= 0){
		while($data = $result->fetch_object()){
			if($ip == $data->ip_add)
				return true;
		}
		return false;
	}
}


function login($username,$password){
		global $db;
		$query = "SELECT id, password FROM users WHERE username='".$username."'";
        $result = mysqli_query($db, $query) or die(header('Location:index.php?error=login'));
				if(mysqli_num_rows($result) == 1)
				{	$row = $result->fetch_object();
					if( $password == $row->password)
					{	$_SESSION['loggedin'] = true;
						$_SESSION['username'] = $username;
						$_SESSION['id'] = $row->id;
						
						/*if($rem == 1){
								// ---------- Login Info ---------- //
 								$config_username = $username;
								$config_password = $password;
								 
								// ---------- Cookie Info ---------- //
								 
								$cookie_name = 'vpot_user'; 
								$cookie_time = (3600 * 24 * 30); // 30 days
								setcookie($cookie_name, $config_username, time()+$cookie_time, '/');
								$cookie_name = 'vpot_pass'; 
								setcookie($cookie_name, $config_password , time()+$cookie_time, '/');
															
						}*/
						
						//Check People visits 
						$datetime = date('Y-m-d H:i:s', time());
						if($_SESSION['username'] != "vineet"){
						mysqli_query($db,'INSERT INTO `recent`(`username`, `logintime`, `ipaddress`) VALUES ("'.$_SESSION['username'].'", "'.$datetime.'", "'.$_SERVER['REMOTE_ADDR'].'")');
						}
						
						
						return true;
					}$result->free();
				}else { return false;}
		}
		
		
	function logout(){
		session_destroy();
		//if(isset($_COOKIE['vertical']) && !empty($_COOKIE['vertical']))
		//setcookie("vertical", NULL , time() - 3600);
	}
	

	 function is_logged_in(){
		if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
			return true;
		}
	}	
	
	function get_position($type){
		global $db;
		$result = mysqli_query($db,'SELECT `posi` FROM `position` WHERE id = "'.$type.'"');
		$pos = $result->fetch_object();
		return $pos->posi;
		}
		
	function get_user($id){
		global $db;
		$result = mysqli_query($db, 'SELECT `fname`, `lname`, `username`, `password`, `email`, `phone`, `verified`, `position`, `img` FROM `users` WHERE `id` = "'.$id.'" ');
		if(mysqli_num_rows($result) == 1){
			return $result->fetch_object();
		}
	}
	
	function get_fol($id,$area){
		global $db;
		$result = mysqli_query($db, 'SELECT `userid` FROM `following` WHERE `userid` = '.$id.' AND `followerid` = '.$_SESSION['id'].'');
		if(mysqli_num_rows($result) == 1){
			if($area == 1){
				return 'following';
			}else{
				return '<i class="fa fa-check"></i> &nbsp; Following';
				}
			
		}else{
			if($area == 2){
			return '<i class="fa fa-user"></i> &nbsp; Follow';
			}
		}
	}

//include the user class, pass in the database connection
//include('phpmailer/mail.php');
?>
