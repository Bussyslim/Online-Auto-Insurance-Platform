<?php
    session_start();
    if(isset($_SESSION['user'])) {
     header('location: /me/u/profile.php');

    }elseif (isset($_SESSION['admin'])) {
    	header('location: /me/u/profile.php');
    }else{
    	//header('location: /me/u/profile.php');
    }
    ?>