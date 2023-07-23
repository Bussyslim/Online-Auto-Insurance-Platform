<!DOCTYPE html>
<html>
<head>
  <title>Bio-data View</title>
  <link rel="stylesheet" type="text/css" href="back.css">

</head>
<body class="veup">






<?php
session_start();

$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'insure');


if (isset($_GET['edit'])) {
		$ide = $_GET['edit'];
		$q= (" SELECT * FROM users WHERE id = $ide");
	
$result = mysqli_query($con, $q) or die($con->error());
		
		}
?>
<?php 

if (isset($_POST['save'])){
			$idc = $_POST['id'];
    $first = $_POST['first'];
    $last = $_POST['last'];
    $phone = $_POST['phone_number'];
    $sex = $_POST['sex'];
    $dob = $_POST['dob'];
    $sor = $_POST['sor'];
    $lga = $_POST['lga'];
    $address = $_POST['address'];
    

    
$sql = "UPDATE `insure`.`users` SET `firstname` = '$first',`lastname` = '$last',`phone_number` = '$phone
',`sex` = '$sex', `dob` = '$dob',`sor` = '$sor',`lga` = '$lga',`address` = '$address' WHERE `users`.`id` = $idc;";
	$res =mysqli_query($con, $sql);
	?>
	<script> 
  	alert ("Record Updated sucessfully");
  	window.location.href ='bio.php';

</script>
<?php

		}

 ?>
 



<form action="viewbio.php" method="POST">
	<?php 

while ($row = mysqli_fetch_assoc($result)) { ?>	

	 
	
	
	<input type="hidden" name="id" class="gettdup" value="<?php echo $ide ?>" >
    <table width="457" height="382" border="0" align="center" cellpadding="7" cellspacing="9" class="tbupdate">

      



  <tr bgcolor="#9FE4E8">

    <td width="175">

      <label>
      <div align="center">First Name</div>
      </label>
      <div align="center">
        <input type="text" name="first" class="gettdup" value="<?php echo $row['firstname'];?>" >  
      </div></td>
    <td width="209">
       <label>
       <div align="center">Last Name</div>
       </label>
       <div align="center"><br>
          <input type="text" name="last" class="gettdup" value="<?php echo $row['lastname'];?>" >    
       </div></td>
  </tr>
  <tr bgcolor="#9FE4E8">
    
    <td>
       <label>
       <div align="center">Phone Number </div>
       </label>
       <div align="center"><br>
          <input type="text" name="phone_number" class="gettdup" value="<?php echo $row['phone_number'];?>" >    
       </div></td>
          <td>
       <label>
       <div align="center">Gender</div>
       </label>
       <div align="center"><br>
          <input type="text" name="sex" class="gettdup" value="<?php echo $row['sex'];?> " >      
       </div></td>
  </tr>
  <tr bgcolor="#9FE4E8">
    
    <td>
      
      <label>
      <div align="center">Date Of Birth: </div>
      </label>
      <div align="center"><br>
          <input type="text" name="dob" class="gettdup" value="<?php echo $row['dob'];?>" > 
      </div></td>

      <td height="41">
       <label>
       <div align="center">State Origin </div>
       </label>
       <div align="center">
         <input type="text" name="sor" class="gettdup" value="<?php echo $row['sor'];?>" >  
      </div>      </tr>
  
  <tr bgcolor="#9FE4E8">
    
       
    <td>
       <label>
       <div align="center">LGA </div>
       </label>
       <div align="center"><br>
          <input type="text" name="lga" class="gettdup" value="<?php echo $row['lga'];?>" >    
       </div></td>

          <td>
       <label>
       <div align="center">Address </div>
       </label>
       <div align="center"><br>
            <textarea class="gettdup" name="address"><?php echo $row['address'];?> </textarea>
       </div></td>
  </tr>
      <tr bgcolor="#9FE4E8">

        <td colspan="2">
          <label>
          <div align="center">Email 
            </label>
            <br>
            <input type="text" class="gettdup" value="<?php echo $row['email'];?>" > 
        </div></td>
      </tr>

     
       
  
  

<?php } ?>
        <tr bgcolor="#9FE4E8">
    <td colspan="2">
      <div align="center">
        <input type="submit" name="save" value="UPDATE">
        </div></td></tr>
	

</table>

</form>

</body>
</html>
