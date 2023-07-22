<?php
session_start();

$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'insure');


if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		$de= "DELETE FROM payments WHERE id= $id";
		mysqli_query($con, $de);
		
	}

  ?>
  <script> 
      alert ("Payment Record Is Already Deleted");
  	
  	window.location.href ='payview.php';

</script>



