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

  if(!isset($_SESSION['admin']) || trim($_SESSION['admin']) == ''){
    header('location: index.php');
  }
  
  $q = "SELECT * FROM admin WHERE role = '".$_SESSION['admin']."'";
  $result = mysqli_query($con, $q);

      $num = mysqli_num_rows($result);

if ($num == 1) {
  
    while ($row = mysqli_fetch_assoc($result)) { 

      include 'include/navbar.php';?>


<p class="title">Vehicle Record View</p>
            
            <?php include 'include/ruler.php';

            $query="SELECT * FROM users";
$result =mysqli_query($con, $query);


?>
<table width="950" cellpadding="7" cellspacing="7" class="tbadmin">
  <tr bgcolor="#D7FFFD">
    
      <th width="17">Id</th>
    <th width="59">Firstame</th>
    <th width="58">Lastame</th>
    <th width="104">Type of Product Buy</th>
    <th width="17">Vehicle Reg No</th>
    <th width="70">Vehicle Make</th>
    <th width="169">Model Of the vehicle</th>
    <th width="114">Engine No</th>
    <th width="44">Charsis No</th>
    <th width="44">Year Manufacture</th>
      <th width="44">Pic</th>
    <th colspan="3">Action</th>
  </tr>
<?php 

while ($row=mysqli_fetch_assoc($result)) { ?>
<tr bgcolor="#FBFBFB">
    
        <td><div align="center"><?php echo $row['id']; ?></div></td>        
        <td><div align="center"><?php echo $row['firstname']; ?></div></td>
         <td><div align="center"><?php echo $row['lastname']; ?></div></td>
        <td><div align="center"><?php echo $row['type']; ?></div></td>
        <td><div align="center"><?php echo $row['vechiclereg']; ?></div></td>
        <td><div align="center"><?php echo $row['vechiclename']; ?></div></td>
        <td><div align="center"><?php echo $row['modelvec']; ?></div></td>
        <td><div align="center"><?php echo $row['engineno']; ?></div></td>
        <td><div align="center"><?php echo $row['chasisno']; ?></div></td>
        <td><div align="center"><?php echo $row['yearma']; ?></div></td>
    <td><div align="center"><img src="<?php echo $row['vehiclepic'];?>" width="129" height="59"></div></td>
    <td width="53"><div align="center"><a class="linkpass" href="veedit.php?edit=<?php echo $row['id']?>">Edit</a></div></td>
  
    
        </tr>
      



  <?php   
  }
    }
}
?>






</body>
</html>