<?php
	session_start();
	include 'include/conn.php';

	if(isset($_POST['save'])){
		$username = $_POST['user'];
		$password = $_POST['password'];

		if (!empty($username) && !empty($password)) {

			$q = " select * from users where email = '$username' && password = '$password'";
			
			$result = mysqli_query($con, $q);

			$num = mysqli_num_rows($result);

			if ($num == 1) {
  
				while ($row = mysqli_fetch_assoc($result)) {

					$p =  $row['id'];
				}
				$_SESSION['user'] = $p;
				header('location: profile.php');
				

			}else{

				$_SESSION['error'] = 'Incorrect Username Or Password';
				$_SESSION ['cll'] = "alertdanger";
				header('location: index.php');
			}

			
		}else{

			$_SESSION['error'] = 'Please the form is reqiured';
			$_SESSION ['cll'] = "alertdanger";
			header('location: index.php');
		}
	
	}else{
		$_SESSION['error'] = 'Input admin credentials first';
		$_SESSION ['cll'] = "alertdanger";
		header('location: index.php');
	}

	

?>