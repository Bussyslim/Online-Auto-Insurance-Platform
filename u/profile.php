<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
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


<p class="title">Dashboard</p>
            
            <?php include 'include/ruler.php';?>
        
        <div class="alert">
        
       
            
           <p class="msg" ><strong>Hello!</strong> Welcome Back <strong><?php echo $row['firstname'];?>  <?php echo $row['lastname'];?></strong></p> 
            
            
       </div>
    
    
    <div class="dash">
        <br>
            <table width="907" height="119" border="0" cellpadding="5" cellspacing="10">
              <tr>
                <td class="tbdetail" width="190" height="70"><div align="center"><strong>Vechicle Information </strong><br>
                  <br>
                    <strong><?php echo $row['vehicledetail'];?></strong>
                </div></td>
                <td class="tbdetail" width="190"><div align="center"><strong>Type Of Product Buy </strong><br>
                  <br>
        
                <strong><?php echo $row['type'];?></strong> </div></td>
                <td class="tbdetail" width="182"><div align="center"><strong>Type Of Car </strong><br> 
                  <br>
        
          <strong><?php echo $row['vechiclename'];?> </strong></div></td>
                <td class="tbdetail" width="280"><div align="center"><strong>Picture Of The Car</strong> <br>
                  <br>
              <?php if (empty($row['vehiclepic'])) {?>
                   <p> Null</p>
               <?php 
              } else{?>
                <img src="<?php echo"/me/admin/".ltrim($row['vehiclepic']);?>" width="129" height="59"></div></td>
                <?php
              } ?>
                
              </tr>
              
      </table>
        <br>
        <br>
</div>
    <table width="507" height="275" border="0" cellpadding="10" cellspacing="10" class="mainlist">
  <tr>
    <td class="tbaccept" width="463"> <div align="center">Acknoweledgment Data</div></td>
  </tr>
  <tr>
    <td height="214">
  
  <table width="423" height="185" border="0" cellpadding="8" cellspacing="3">
  <tr class="rowbla">
    <td width="151">Identity Number</td>
    <td width="231"><?php echo $row['id'];?></td>
  </tr>
  <tr class="rowbla">
    <td>Name</td>
    <td><?php echo $row['firstname'];?>  <?php echo $row['lastname'];?></td>
  </tr>
  <tr class="rowbla">
    <td>Email</td>
    <td><?php echo $row['email'];?></td>
  </tr>
  <tr class="rowbla">
    <td>Date and Time Register </td>
    <td><?php echo $row['yearreg'];?></td>
  </tr>
  <tr class="rowbla">
    <td>Gender</td>
    <td><?php echo $row['sex'];?></td>
  </tr>
  <tr class="rowbla">
    <td>State</td>
    <td><?php echo $row['sor'];?></td>
  </tr>
  <tr class="rowbla">
    <td>LGA</td>
    <td><?php echo $row['lga'];?></td>
  </tr>
</table>








<?php
    }
}
?>






</body>
</html>