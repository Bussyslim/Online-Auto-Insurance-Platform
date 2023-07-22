<?php
	session_start();
	include 'includes/conn.php';

	if(!isset($_SESSION['user']) || trim($_SESSION['user']) == ''){
		header('location: index.php');
	}

	$q = "SELECT * FROM users WHERE id = '".$_SESSION['user']."'";
	
	
?>