<!DOCTYPE html>
<html>
<head>
  <title>Vehicle Update</title>
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
			$id = $_POST['id'];
			$first = $_POST['first'];
           $last= $_POST['last'];
		   $type = $_POST['type'];
        $vecatpay = $_POST['vecatpay'];
        $lga = $_POST['lga'];
        $sor = $_POST['sor'];
        $trans = $_POST['transid'];
        $rrr = $_POST['rrr'];
        $amtp = $_POST['amtp'];
        $pays = $_POST['pays'];
        

require_once 'phpqrcode/qrlib.php';
$path = 'images/';

$file = $path.uniqid().".png";

$text = "Auto Insurance PLC. Payment made successfull. ID no = $id Name = $first $last  Transaction ID = $trans RRR = $rrr Amount Paid = $amtp Type of product buy = $type  THANK YOU!!! ";

QRcode::png($text, $file, 'L', 4, 2);

    

    
    
    

    
    $sql= " insert into payments (userid , transid , rrr , firstname , lastname , type , amttopaid , amtpaid , payst , lga , sor , repic) values ('$id' ,'$trans' , '$rrr' , '$first' , '$last' , '$type' , '$vecatpay' , '$amtp' , '$pays' , '$lga' , '$sor' , '$file') ";
    
	$res =mysqli_query($con, $sql);
	?>
	<script> 
  	alert ("Payment Updated sucessfully");
  	window.location.href ='payview.php';

</script>
<?php

		}

 ?>
 



<form action="payreg.php" method="POST">
	<?php 

while ($row = mysqli_fetch_assoc($result)) { ?>	

	
  <table width="360" height="386" border="0" align="center" cellpadding="3" cellspacing="3">


<tr>
   
</tr>



  <tr bgcolor="#F7F7F7">
  
    <td colspan="2" bgcolor="#33CC99"><div align="center">Register Payment </div></td>
    
  </tr>
    <tr bgcolor="#F7F7F7">
    <td width="148">Identity No </td>
    <td width="170"><p><?php echo $row['id']; ?></p></td>
  </tr>
  <tr bgcolor="#F7F7F7">
    <td>Firstname</td>
    <td><p><?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?></p> </td>
  </tr>
  <tr bgcolor="#F7F7F7">
    <td>Type Of Product Buy </td>
    <td><p><?php echo $row['type']; ?></p></td>
  </tr>
  <tr bgcolor="#F7F7F7">
    <td>Amount To Pay </td>
    <td><p><?php echo $row['vecatpay']; ?></p></td>
  </tr>
  <tr bgcolor="#F7F7F7">
    <td>LGA</td>
    <td><?php echo $row['lga']; ?></td>
  </tr>
  <tr bgcolor="#F7F7F7">
    <td>State Of Origin </td>
    <td><?php echo $row['sor']; ?></td>
  </tr>
        
        <form action="payreg.php" method="POST">
            
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="hidden" name="first" value="<?php echo $row['firstname']; ?>">
        <input type="hidden" name="last" value="<?php echo $row['lastname']; ?>">
        <input type="hidden" name="type" value="<?php echo $row['type']; ?>">
        <input type="hidden" name="vecatpay" value="<?php echo $row['vecatpay']; ?>">
        <input type="hidden" name="lga" value="<?php echo $row['lga']; ?>">
        <input type="hidden" name="sor" value="<?php echo $row['sor']; ?>">
        
        
     <tr bgcolor="#F7F7F7">
    <td>Transaction ID </td>
    <td><input type="text" name="transid"></td>
  </tr>
  <tr bgcolor="#F7F7F7">
    <td>RRR</td>
    <td><input type="text" name="rrr"></td>
  </tr>
  <tr bgcolor="#F7F7F7">
    <td>Amount Paid </td>
    <td><input type="text" name="amtp"></td>
  </tr>
  <tr bgcolor="#F7F7F7">
    <td>Payment Status </td>
    <td><select name="pays">
        <option value="Paid">Paid</option>
        <option value="Not Full Paid">Not Full Paid</option>
        
        </select></td>
  </tr >    
    
	
<?php } ?>
	
    <tr bgcolor="#F7F7F7">
        <td colspan="2"><div align="center"><input type="submit" name="save" value="Make Payment"></div></td>
  </tr>

</form>
    
    </table>
    
    
  
</body>
</html>