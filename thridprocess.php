<?php 

$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'insure');

 ?>
<?php

if (isset($_POST['value'])) {
    $first = $_POST['fname'];
    $last = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['pnum'];
    $pass = $_POST['pnum'];
    $type = 'Thrid Party Insurance';
    $vedet = 'No';
    $sex = $_POST['sex'];
    $dob = $_POST['year'].'-'.$_POST['month'].'-'.$_POST['day'];
    $catf = $_POST['catf'];
    $catl = $_POST['catl'];
    $sor = $_POST['sor'];
    $lga = $_POST['lga'];
    $address = $_POST['address'];
    $vena = $_POST['vena'];
    $vereg = $_POST['veno'];
    $payst = 'Not_paid';


    }

if (!empty($first) && !empty($last) && !empty($email) && !empty($phone) && !empty($pass) && !empty($type) && !empty($vedet) && !empty($sex) && !empty($dob) && !empty($catf) && !empty($catl) && !empty($sor) && !empty($lga) && !empty($address) && !empty($vena) && !empty($vereg)) {


$qy= " insert into users (firstname , lastname , email , phone_number , password , type , vehicledetail , sex , dob , vecat , vecatpay , sor , lga , address , vechiclename , vechiclereg , payst) values ('$first' ,'$last' , '$email' , '$phone' , '$pass' , '$type' , '$vedet' , '$sex' , '$dob' , '$catf' , '$catl' , '$sor','$lga' , '$address' , '$vena' , '$vereg' , '$payst') ";

mysqli_query($con, $qy);






    

}else{
    $_SESSION['msg'] = "All field is requried";
   


}



 ?>

 <!DOCTYPE html>
<html>
<head>
    <title> Thrid Party</title>
    <link rel="stylesheet" type="text/css" href="/me/css/end.css">
    <link rel="stylesheet" type="text/css" href="/me/css/body.css">
</head>
<body onLoad="myFunction()" style="margin:0;">

<div id="loader"></div>

    
    <div class="thpr">
<div style="display:none;" id="sus" class="animate-bottom">


  <div align="center"><img src="img/sign.png" width="112" height="133"><br>
    <img src= "img/th1.gif" width="331" height="160"> 
  </div>
  <p align="center">Dear  <em><strong><?php echo $last;?>  <?php echo $first;?></strong></em>,  Your<strong> Username is <?php echo $email;?></strong>  and your <strong>password is <?php echo $phone;?> </strong>.<br>
  Click on Login button and login to complete your car profile. <br>Payment is done as you will be instucted by the company.  </p>

 
    <br>
    
    <table width="462" border="0"  class="linkth">
        <tr>
        <td width="216"><div align="center"><a href="/me/u/index.php" class="btnlin" >Login</a></div></td>
        <td width="224"><div align="center"><a href="index.html"  class="btnlin">Home Page</a></div></td>
        </tr>
    
</table>


</div>
</div>
<script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("sus").style.display = "block";
}
</script>




</body>
</html>