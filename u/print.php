<!DOCTYPE html>
<html>
<head>
  <title>Print Preview</title>
</head>
<body>




<?php
session_start();

$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'insure');


if (isset($_GET['edit'])) {
		$ide = $_GET['edit'];
		$q= (" SELECT * FROM payments WHERE id = $ide");
	
$result = mysqli_query($con, $q) or die($con->error());
		
		}
?>




<form action="payment.php" method="POST">
	<?php 

while ($row = mysqli_fetch_assoc($result)) { ?>	
    
    
    
    <table width="698" border="0" align="center" cellpadding="3" cellspacing="3">
        <tr>
    <td colspan="2"><hr /> </td>
    
  </tr>
  <tr >
    <td width="190" height="109"></td>
    <td width="334"><div align="center"><strong>AUTO INSURANCE PLC </strong></div></td>
      
  </tr>
        <tr>
    <td colspan="2"><hr /> </td>
    
  </tr>
  <tr >
    <td colspan="2"><div align="center"><strong>ONLINE PAYMENT RECEPIT</strong></div></td>
   
  </tr>
        
        <tr>
    <td colspan="2"><hr /> </td>
    
  </tr>
    <tr>
    <td><strong>Payment ID </strong></td>
    <td>    <?php echo $row['id'];?></td>
  </tr>
  <tr>
    <td><strong>Identity Number </strong></td>
    <td>    <?php echo $row['userid'];?></td>
  </tr>
  <tr>
    <td><strong>Name</strong></td>
    <td>    <?php echo $row['firstname'];?> <?php echo $row['lastname'];?></td>
  </tr>
  <tr>
    <td><strong>Type Of Product Buy </strong></td>
    <td> <strong><?php echo $row['type'];?></strong>   </td>
  </tr>
  <tr>
    <td><strong>Amount To Pay </strong></td>
    <td><strong><?php echo $row['amttopaid'];?></strong> </td>
  </tr>
  <tr>
    <td><strong>LGA</strong></td>
    <td><?php echo $row['lga'];?></td>
  </tr>
  <tr>
    <td><strong>State Of Origin</strong> </td>
    <td><?php echo $row['sor'];?></td>
  </tr>
  <tr>
    <td><strong>Transaction ID </strong></td>
    <td><?php echo $row['transid'];?></td>
  </tr>
  <tr>
    <td><strong>RRR</strong></td>
    <td><?php echo $row['rrr'];?></td>
  </tr>
  <tr>
    <td><strong>Amount Paid </strong></td>
    <td><strong><?php echo $row['amtpaid'];?></strong></td>
  </tr>
  <tr>
    <td><strong>Payment Status </strong></td>
    <td><?php echo $row['payst'];?></td>
  </tr>
  <tr>
    <td><strong>Payment Date and Time </strong></td>
    <td><?php echo $row['paydate'];?></td>
  </tr>
   <tr>
    <td colspan="2"><hr /> </td>
    
  </tr>
  
  <tr>
    <td colspan="2"> <div align="center"><img src="<?php echo"/me/admin/" .$row['repic'];?>" width="260" height="260"></div></td>
    
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <p><strong>Scan Me </strong></p>
      <p>You Are <strong><em>SATISFIED</em> </strong></p>
    </div></td>
    
  </tr>
        <tr>
    <td colspan="2"><hr /> </td>
    
  </tr>


  <tr>
   <td colspan="2"><div align="center">
     <form><input type="button" name="print" value="Print" onclick="window.print()"></form>
     </div></td>
</tr>

  



	 
	
    

    
    
    
    <input type="hidden" name="payid" value="<?php echo $row['userid'];?>">
          
	
<?php } ?>
        <tr>
	 <td colspan="2"><div align="center">
	   <input type="submit" name="savepay" value="Back To Payment History" class="link">
	   </div></td>
</tr>

</table>

</form>


</body>
</html>

