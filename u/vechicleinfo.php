<!DOCTYPE html>
<html>
<head>
  <title>Vehicle Information</title>
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

       <p class="title">Vehicle Information</p>
            
            <?php include 'include/ruler.php';


$vepic =  $row['vehiclepic'];



if (!empty($vepic)) { ?>

  <table width="880" border="0" cellspacing="10" cellpadding="15" class="vecuinfo">
      <tr bgcolor="#7CB5C5">
        <td width="203">

<p align="center">Customer Name:</p>
    
      <p align="center"><?php echo $row['firstname'];?> <?php echo $row['lastname'];?></p>        </td>
        <td width="202">
<p align="center">Type Of Product Buy:</p>
      <p align="center"><?php echo $row['type'];?></p>        </td>
        <td width="205">
          <p align="center">Registration No:</p>          <p align="center"><?php echo $row['vechiclereg'];?></p></td>
        <td width="125">
          <p align="center">Vehicle Make </p>          <p align="center"><?php echo $row['vechiclename'];?></p></td></tr>
</table>

      <br>
      <br>
      
      <table width="486" height="413" border="0" cellpadding="3" cellspacing="3"  class="veinfo">
  
  <tr>
    <td bgcolor="#F5F5F5"><div align="center">Model of Vehicle 
    </div>      <p align="center"><?php echo $row['modelvec'];?></p>    </td>
    <td bgcolor="#F5F5F5"><div align="center">Engine No:
    </div>      <p align="center"><?php echo $row['engineno'];?></p>     </td>
  </tr>
  <tr>
    <td bgcolor="#F5F5F5"><div align="center">Chasis Number:
    </div>      <p align="center"><?php echo $row['chasisno'];?></p>    </td>
    <td bgcolor="#F5F5F5"><div align="center">Year Manufacture:
    </div>      <p align="center"><?php echo $row['yearma'];?></p>    </td>
  </tr>
  <tr>
    <td bgcolor="#F5F5F5" colspan="2"><div align="center">Picture of the vehicle 
    </div>      <p align="center"><img src="<?php echo"/me/admin/".ltrim($row['vehiclepic']);?>" width="387" height="210"></p>    </td>
  </tr>

  
</table>

<?php
 
}else{

$jes = $row['id'];
$first = $row['firstname'];
$last = $row['lastname'];
$type = $row['type'];
$vereg = $row['vechiclereg'];
$vena = $row['vechiclename'];

$_SESSION ['me'] = $jes;
$_SESSION ['fr'] = $first;
$_SESSION ['la'] = $last;
$_SESSION ['ty'] = $type;
$_SESSION ['vreg'] = $vereg;
$_SESSION ['vna'] = $vena;


echo $_SESSION ['me'];

header("location: /me/admin/veupdate.php");


}





    }
}
?>






</body>
</html>