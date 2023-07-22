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

  if(!isset($_SESSION['user']) || trim($_SESSION['user']) == ''){
    header('location: index.php');
  }

  $q = "SELECT * FROM users WHERE id = '".$_SESSION['user']."'";
  $result = mysqli_query($con, $q);

      $num = mysqli_num_rows($result);

if ($num == 1) {
  
    while ($row = mysqli_fetch_assoc($result)) { 

      include 'include/navbar.php';?>

       <p class="title">Change Password</p>
            
            <?php include 'include/ruler.php';?>


<form action="password.php" method="POST">

<table width="408" height="138" align="center" cellpadding="7" class="tbupdate">
  <tr bgcolor="#B3B3FF">
    <td colspan="2">
      <div align="center">
      <td><input type="hidden" name="id" value="<?php echo $row['id'];?>"></td>
        <br>
        </div></td>
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

<?php

if(isset($_POST['save'])) {
  $id= $_POST['id'];
  $npass = $_POST['newpass'];
  $cpass = $_POST['confirmpass'];

if (!empty($npass) && !empty($cpass)) {
  

  if ($npass == $cpass) {
    
    $sql = "UPDATE `users` SET `password` = '$npass' WHERE `id` =$id";

   $res =mysqli_query($con, $sql);

    
    $_SESSION ['msg'] = "Password Change Successfully";
    $_SESSION ['cl'] = "success";

    
   ?>



   <br>
<br>
<br>
<br>
<br>
<br>
<br>

   <table width="403" height="85"  class="tbalert">
    
    <tr>
      <td width="317" height="28"><div class="<?php echo $_SESSION ['cl']; ?>" align="center"><?php echo $_SESSION ['msg']; ?></div></td>
      
    </tr>

    <tr bgcolor="#FBA2F4">
      <td width="85"> <div align="center">
        
        <form action="password.php" method="POST">
            <input type="hidden" name="passid" value="<?php echo $id;?>">
           <input type="submit" name="savepass" value="Back" class="btnupda">
</form>



      </div></td> 
    </tr>

</table>

<?Php
    
    
  }else{


    $_SESSION ['msg'] = "New password and Confirm password does not match";
    $_SESSION ['cl'] = "danger";


    ?>


    <br>
<br>
<br>
<br>
<br>
<br>
<br>

<table width="403" height="86"  class="tbupdate">
    
    <tr>
      <td width="317" height="29"><div class="<?php echo $_SESSION ['cl']; ?>" align="center"><?php echo $_SESSION ['msg']; ?></div></td>
      
    </tr>

    <tr bgcolor="#FBA2F4">
      <td width="85"> <div align="center">
        
        <form action="password.php" method="POST">
            <input type="hidden" name="passid" value="<?php echo $id;?>">
           <input type="submit" name="savepass" value="Back" class="btnupda">
</form>



      </div></td> 
    </tr>

</table>



  <?php
}
  
  }else{

    $_SESSION ['msg'] = "New password or Confirm password is Empty";
    $_SESSION ['cl'] = "danger";


    ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<table width="403" height="82"  class="tbalert">
    
    <tr>
      <td width="317" height="25"><div class="<?php echo $_SESSION ['cl']; ?>" align="center"><?php echo $_SESSION ['msg']; ?></div></td>
      
    </tr>

    <tr bgcolor="#FBA2F4">
      <td width="85"> <div align="center">
        
        <form action="password.php" method="POST">
            <input type="hidden" name="passid" value="<?php echo $id;?>">
           <input type="submit" name="savepass" value="Back" class="btnupda">
</form>



      </div></td> 
    </tr>

</table>

<?php
  }

}



    }
}
?>






</body>
</html>