<!DOCTYPE html>
<html>
<head>
  <title>Change Password</title>
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


<p class="title">Change Password</p>
            
            <?php include 'include/ruler.php';



if(isset($_POST['save'])) {
  $id= $_POST['id'];
  $npass = $_POST['newpass'];
  $cpass = $_POST['confirmpass'];


  


if ($npass == $cpass) {
    


    $sql = " UPDATE `admin` SET `password` = '$npass' WHERE `password` =$id";

      $res =mysqli_query($con, $sql);


    $_SESSION ['msg'] = "Password Saved Successfully";
    $_SESSION ['cl'] = "success";

      
    

    ?>


    <table width="403" height="43" align="left">
    
    <tr>
      <td width="317"><div class="<?php echo $_SESSION ['cl']; ?>" align="center"><?php echo $_SESSION ['msg']; ?></div></td>
      
    </tr>
</table>



<?php




  }else{
    

    $_SESSION ['msg'] = "New password and Confirm password does not match";
    $_SESSION ['cl'] = "danger";?>


    <table width="403" height="39" align="center">
    
    <tr>
      <td width="317"><div class="<?php echo $_SESSION ['cl']; ?>" align="center"><?php echo $_SESSION ['msg']; ?></div></td>
      
    </tr>
</table>

<?php

  }

}

?>
    
    
    
    

    
     <form action="change.php" method="POST">

<table width="408" height="138" align="center" cellpadding="7" class="tbupdate">
  <tr bgcolor="#B3B3FF">
    <td >
        <label> 
      Odd Password        </label>      </td>
      <div align="center">
      <td><input type="text" name="id" class="gettdup" placeholder="Odd Password"> </td>
        
        </div>
  </tr>
  <tr bgcolor="#B3B3FF">
    <td>
    <label> 
      New Password        </label>      </td>
      <td>        <input type="text" name="newpass" placeholder="New Password" size="40" class="gettdup">       </td>
  </tr>
  <tr bgcolor="#B3B3FF">
    <td>
      <label>
          Confirm Password          </label>      </td>
      <td>        <input type="text" name="confirmpass" placeholder="Confirm Password" size="40" class="gettdup">       </td>
  </tr>

  <tr bgcolor="#B3B3FF">
    <td colspan="2">
      <div align="center" >
        <input type="submit" name="save" value="Change" class="btnupda" >
        </div></td>
  </tr>
</table> 
</form>
    
        
    
</body>





</html>

    











  <?php 


  
  }
}
?>






</body>
</html>