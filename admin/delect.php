<?php
session_start();

$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'insure');


if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		$de= "DELETE FROM users WHERE id=$id";
		mysqli_query($con, $de);
		
	}

  ?>
  <script> 
  	alert ("FILE IS ALREADY DELETED");
  	window.location.href ='profile.php';

</script>



