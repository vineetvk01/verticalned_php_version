<?php

	include '../db/initial.php';
	
	$ans_array = $_POST['ansarray'];
	
	$_SESSION['test_ans'] = $ans_array;
	print_r($_SESSION['test_ans']);


?>