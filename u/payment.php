<!DOCTYPE html>
<html>
<head>
  <title>Payment History</title>
   <link rel="stylesheet" type="text/css" href="/me/css/pro.css">
</head>
<body>

<?php 
session_start();
 
  include 'include/conn.php';

  if(!isset($_SESSION['user']) || trim($_SESSION['user']) == ''){
    header('location: index.php');
  }

  $q = "SELECT * FROM users WHERE id = '".$_SESSION['user']."'";
  $result = mysqli_query($con, $q);

      $num = mysqli_num_rows($result);

if ($num == 1) {
  
    while ($row = mysqli_fetch_assoc($result)) { 

      include 'include/navbar.php';?>

       <p class="title">Payment History</p>
            
            <?php include 'include/ruler.php';
            $p =  $row['id'];

            $b= (" SELECT * FROM payments WHERE userid = $p");
  
            $resultt = mysqli_query($con, $b) or die($con->error());

            ?>


    
    

<table width="982" border="0" cellpadding="2" cellspacing="3" bgcolor="#336633" class="tbpay">
  <tr bgcolor="#DDFFFF">
    <td width="91">Tansaction Id </td>
    <td width="129">RRR</td>
  <td width="48">Id No </td>
    <td width="157">Name</td>
  <td width="191"> Type of Product Buy</td>
    <td width="97">Amount to Pay </td>
    <td width="92">Amount Paid </td>
    
  </tr>

 <?php  while ($row = mysqli_fetch_assoc($resultt)) { ?>
   <tr bgcolor="#DDFFFF">
    <td width="91"><?php echo $row['transid'];?></td>
    <td width="129"><?php echo $row['rrr'];?></td>
  <td width="48"><?php echo $row['userid'];?></td>
    <td width="157"><?php echo $row['firstname'];?> <?php echo $row['lastname'];?> </td>
  <td width="191"> <?php echo $row['type'];?> </td>
    <td width="97"><?php echo $row['amttopaid'];?> </td>
    <td width="92"><?php echo $row['amtpaid'];?> </td>
       <td width="118"><a href="print.php?edit=<?php echo $row['id']?>">Print</a></td>
   
  </tr>






  <?php
}
    }
}
?>






</body>
</html>