<!DOCTYPE html>
<html>
<head>
  <title>Bio-Data</title>
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

       <p class="title">Bio Data</p>
            
            <?php include 'include/ruler.php';?>


             <form  method="POST">
             <table width="457" height="382" border="0" cellpadding="7" cellspacing="9" class="tbupdate">

            <tr>
    <td width="144">
      <label>First Name</label>
       <p class="gettdup"> <?php echo $row['firstname'];?></p>  </td>
    <td width="265">
       <label>Last Name</label><br>
       <p class="gettdup"><?php echo $row['lastname'];?></p></td>
  </tr>
  <tr>
    <td>
       <label>Email Address </label>
        <p class="gettdup"  name="email"><?php echo $row['email'];?> </p>  </td>
    <td>
       <label>Phone Number </label><br>
         <p class="gettdup"><?php echo $row['phone_number'];?> </p>
          </td>
  </tr>
  <tr>
    <td>
       <label>Gender</label><br>
       <p class="gettdup"><?php echo $row['sex'];?> </p>   </td>
    <td>
      
      <label>Date Of Birth: </label><br>
      <p class="gettdup"><?php echo $row['dob'];?> </p>
  </tr>

<tr>
    <td height="41">
       <label>State Origin </label>
       <p class="gettdup"><?php echo $row['sor'];?> </p> </td>
    <td>
       <label>LGA </label><br>
       <p class="gettdup"><?php echo $row['lga'];?> </p>    </td>
  </tr>
        <tr>
   
    <td>
       <label>Address </label><br>
     <textarea class="gettdup"><?php echo $row['address'];?> </textarea>    </td>
  </tr>

  </form>




<?php 
$jes = $row['id'];
$first = $row['firstname'];
$last = $row['lastname'];
$email = $row['email'];
$phone = $row['phone_number'];
$sex = $row['sex'];
$dob = $row['dob'];
$sor = $row['sor'];
$lga = $row['lga'];
$address = $row['address'];

$_SESSION ['me'] = $jes;
$_SESSION ['fr'] = $first;
$_SESSION ['la'] = $last;
$_SESSION ['ph'] = $phone;
$_SESSION ['se'] = $sex;
$_SESSION ['db'] = $dob;
$_SESSION ['so'] = $sor;
$_SESSION ['lg'] = $lga;
$_SESSION ['ad'] = $address;
$_SESSION ['em'] = $email;




 ?>
<tr>
 <td> <a href="bioupdate.php" class="mee">Edit Record</a></td>
</tr>
<tr>
  <td></td>
  <td></td>

</tr>
</table>



<?php
    }
}
?>






</body>
</html>