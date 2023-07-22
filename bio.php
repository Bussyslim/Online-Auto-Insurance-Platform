<!DOCTYPE html>
<html>
<head>
  <title>Bio Data</title>
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


<p class="title">Bio Data View</p>
            
            <?php include 'include/ruler.php';

            $query="SELECT * FROM users";
$result =mysqli_query($con, $query);


?>
<table width="950" cellpadding="7" cellspacing="7" class="tbadmin">
  <tr bgcolor="#D7FFFD">
    
    <th width="17">Id</th>
    <th width="59">Firstame</th>
    <th width="58">Lastame</th>
    <th width="104">Email</th>
    <th width="17">Phone Number</th>
    <th width="70">Gender</th>
    <th width="169">Date Of Birth</th>
    <th width="114">State Of Origin</th>
    <th width="44">LGA</th>
    <th width="44">Address</th>
    <th colspan="3">Action</th>
  </tr>
<?php 

while ($row=mysqli_fetch_assoc($result)) { ?>
<tr bgcolor="#FBFBFB">
        <td><div align="center"><?php echo $row['id']; ?></div></td>
        <td><div align="center"><?php echo $row['firstname']; ?></div></td>
         <td><div align="center"><?php echo $row['lastname']; ?></div></td>
        <td><div align="center"><?php echo $row['email']; ?></div></td>
        <td><div align="center"><?php echo $row['phone_number']; ?></div></td>
        <td><div align="center"><?php echo $row['sex']; ?></div></td>
        <td><div align="center"><?php echo $row['dob']; ?></div></td>
        <td><div align="center"><?php echo $row['sor']; ?></div></td>
        <td><div align="center"><?php echo $row['lga']; ?></div></td>
        <td><div align="center"><?php echo $row['address']; ?></div></td>
    <td width="53"><div align="center" ><a  class="linkpass" href="viewbio.php?edit=<?php echo $row['id']?>">Edit</a></div></td>
  
    
        </tr>



<?php 
}  
  }
}
?>






</body>
</html>