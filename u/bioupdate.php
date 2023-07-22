<?php session_start() ?>




<!DOCTYPE html>
<html>
<head>
  <title>bio Update</title>
    <link rel="stylesheet" type="text/css" href="back.css">
</head>
<body class="veup">


<br>
<br>
<br>


<form  method="POST" action="bioupdate.php"> 
        <input type="hidden" name="id" class="gettdup" value="<?php echo $_SESSION ['me'];?>" >
    <table width="457" height="382" border="0" align="center" cellpadding="7" cellspacing="9" class="tbupdate">

  <tr bgcolor="#9FE4E8">

    <td width="175" bgcolor="#F2F2F2">

      <label>
      <div align="center">First Name</div>
      </label>
      <div align="center">
        <input type="text" name="first" class="gettdup" value="<?php echo $_SESSION ['fr'];?>" >  
      </div></td>
    <td width="209">
       <label>
       <div align="center">Last Name</div>
       </label>
       <div align="center"><br>
          <input type="text" name="last" class="gettdup" value="<?php echo $_SESSION ['la'];?>" >    
       </div></td>
  </tr>
  <tr bgcolor="#9FE4E8">
    
    <td>
       <label>
       <div align="center">Phone Number </div>
       </label>
       <div align="center"><br>
          <input type="text" name="phone_number" class="gettdup" value="<?php echo $_SESSION ['ph'];?>" >    
       </div></td>
          <td bgcolor="#F2F2F2">
       <label>
       <div align="center">Gender</div>
       </label>
       <div align="center"><br>
          <input type="text" name="sex" class="gettdup" value="<?php echo $_SESSION ['se'];?>" >      
      </div></td>
  </tr>
  <tr bgcolor="#9FE4E8">
    
    <td bgcolor="#F2F2F2">
      
      <label>
      <div align="center">Date Of Birth: </div>
      </label>
      <div align="center"><br>
          <input type="text" name="dob" class="gettdup" value="<?php echo $_SESSION ['db'];?>" > 
      </div></td>

      <td height="41">
       <label>
       <div align="center">State Origin </div>
       </label>
       <div align="center">
         <input type="text" name="sor" class="gettdup" value="<?php echo $_SESSION ['so'];?>" >  
      </div>      </tr>
  
  <tr bgcolor="#9FE4E8">
    
       
    <td>
       <label>
       <div align="center">LGA </div>
       </label>
       <div align="center"><br>
          <input type="text" name="lga" class="gettdup" value="<?php echo $_SESSION ['lg'];?>" >    
       </div></td>

          <td bgcolor="#F2F2F2">
       <label>
       <div align="center">Address </div>
       </label>
       <div align="center"><br>
            <textarea class="gettdup" name="address"><?php echo $_SESSION ['ad'];?> </textarea>
      </div></td>
  </tr>
      <tr bgcolor="#9FE4E8">

        <td colspan="2">
          <label>
          <div align="center">Email 
            </label>
            <br>
            <input type="text" class="gettdup" value="<?php echo $_SESSION ['em'];?>" > 
        </div></td>
      </tr>

     
       
  <tr bgcolor="#9FE4E8">
    <td colspan="2" bgcolor="#F2F2F2">
      <div align="center">
        <input type="submit" name="biosave" value="UPDATE">
      </div></td></tr>
  </table>

</form>

<?php

$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'insure');


 
if (isset($_POST['biosave'])) {

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

  $res =mysqli_query($con, $sql);?>


<table align="center" bgcolor="#9DF4F0">
<tr bgcolor="#F0F0F0" >
            <td height="48" colspan="2" class="tblink"><div align="center" >
              
             

              <form action="biodata.php" method="POST">
            <input type="hidden" name="email" value="<?php echo $idc ?>" >
           <input type="submit" name="saveinfo" value="Click Continue" class="link">
</form>
    </div></td>
</tr>
</td></tr></table>
<?php
}
  ?>












</body>
</html>
