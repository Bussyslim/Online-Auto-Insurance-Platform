<?php 
if (isset($_POST['submit'])) {
    $first = $_POST['fname'];
    $last = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['pnum'];
    $sex = $_POST['sex'];
    $dob = $_POST['year'].'-'.$_POST['month'].'-'.$_POST['day'];
    $suminsured = $_POST['sumin'];
    $address = $_POST['address'];
     $sor = $_POST['sor'];
      $lga = $_POST['lga'];
       $vena = $_POST['vena'];
        $vereg = $_POST['vereg'];
  
  $per = 0.2;
  $ans = $suminsured*$per;
  echo '<body onload="myFunction()" style="margin:0;">

<div id="loader"></div>



<script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
</body>
';
}
 ?>

<html>
<head>
	<title>Get a Quote</title>
  <link rel="stylesheet" type="text/css" href="/me/css/end.css">
    <link rel="stylesheet" type="text/css" href="/me/css/body.css">
</head>
<body>

    
    

        
        
       
    
    
    <div id="getqu">
     
    
  <form action="getquote.php" method="POST">
    <img class="getimg" src= "img/in5.jpg" width="488" height="351">
    <table width="430" height="393" border="0" cellpadding="3" cellspacing="3" class="question">
  <tr>
    <td height="45" colspan="2"><h1><strong>Get a quote</strong></h1></td>
  </tr>
  <tr>
    <td width="144">
      <label>First Name</label>
      <input class="gettxt" type="text" name="fname">    </td>
    <td width="265">
       <label>Last Name</label><br>
       <input class="gettxt" type="text" name="lname"></td>
  </tr>
  <tr>
    <td>
       <label>Email Address </label>
      <input class="gettxt" type="email" name="email">    </td>
    <td>
       <label>Phone Number </label><br>
      <input class="gettxt" type="text" name="pnum">    </td>
  </tr>
  <tr>
    <td>
       <label>Gender</label><br>
       <select class="gettxt" name="sex">
         <option value="">Select option</option>
         <option value="Male">Male</option>
         <option value="Female">Female</option>
       </select>
      
    <td>
      
     <label>Date Of Birth: </label><br>
Day:
  <select name="day" class="date">
    <option value="">select your day</option>
    <option value="01">1</option>
    <option value="02">2</option>
    <option value="03">3</option>
        <option value="04">4</option>
        <option value="05">5</option>
        <option value="06">6</option>
        <option value="07">7</option>
        <option value="08">8</option>
        <option value="09">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
  </select>

  
  Month:
  <select name="month" class="date">
    <option value="">select your mouth</option>
    <option value="01">Jan</option>
    <option value="02">Feb</option>
    <option value="03">Mar</option>
        <option value="04">Apri</option>
        <option value="05">May</option>
        <option value="06">June</option>
        <option value="07">July</option>
        <option value="08">Aug</option>
        <option value="09">Sep</option>
        <option value="10">Oct</option>
        <option value="11">Nov</option>
        <option value="12">Dec</option>
  </select>

   <label>year: </label>
      <input class="dateyear" type="text" name="year">




       </td>
  </tr>
  <tr>
    <td>
       <label>Sum Insured/Value </label>
      <input class="gettxt" type="text" name="sumin">    </td>
    <td>
       <label>Address </label><br>
	   <textarea class="gettxt" name="address"></textarea>    </td>
  </tr>
  <tr>
    <td>
       <label>State Origin </label>
      <input class="gettxt" type="text" name="sor">    </td>
    <td>
       <label>LGA </label><br>
      <input class="gettxt" type="text" name="lga">    </td>
  </tr>
  <tr>
    <td>
      <label>Vehicle Name </label>
      <select class="gettxt" name="vena">
        

<option value="">Select Option</option>
<option value="Honda">Honda</option>
<option value="Toyota">Toyota</option>
<option value="Kia">Kia</option>
<option value="Hyundai">Hyundai</option>
<option value="Nissan">Nissan</option>
<option value="Ford">Ford</option>
<option value="BMW">BMW</option>
<option value="Lexus">Lexus</option>
<option value="Mazda">Mazda</option>
<option value="Volkswagen">Volkswagen</option>
<option value="Infiniti">Infiniti</option>
<option value="Acura">Acura</option>
<option value="Mitsubishi">Mitsubishi</option>
<option value="Alfa Romeo">Alfa Romeo</option>
<option value="Ferrari">Ferrari</option>
<option value="Suzuki">Suzuki</option>
<option value="GM">GM</option>
<option value="Audi">Audi</option>
<option value="Jeep">Jeep</option>
<option value="Lincoln">Lincoln</option>
<option value="Chrysler">Chrysler</option>
<option value="Chevrolet">Chevrolet</option>
<option value="Cadillac">Cadillac</option>
<option value="Rover">Rover</option>
<option value="Mini">Mini</option>
<option value="Rolls Royce">Rolls Royce</option>
<option value="Bentley">Bentley</option>
<option value="Land Rover">Land Rover</option>
<option value="Others">Others</option>
<option value="Volvo">Volvo</option>
<option value="Peugeot">Peugeot</option>
<option value="Renault">Renault</option>
<option value="Skoda">Skoda</option>
<option value="Buick">Buick</option>
<option value="Pontiac">Pontiac</option>
<option value="Porsche">Porsche</option>
<option value="Subaru">Subaru</option>
<option value="Liberty">Liberty</option>
<option value="CHERRY">CHERRY</option>
<option value="Wrangler">Wrangler</option>
<option value="Opel">Opel</option>
<option value="Tata">Tata</option>
<option value="Isuzu">Isuzu</option>
<option value="Innoson">Innoson</option>
<option value="DODGE">DODGE</option>
<option value="Hummer">Hummer</option>
<option value="GAC">GAC</option>
<option value="CHEVROLET">CHEVROLET</option>
<option value="GMC">GMC</option>
<option value="BMW">BMW</option>
<option value="HONDA">HONDA</option>
<option value="SsangYong">SsangYong</option>
<option value="CHEROKEE">CHEROKEE</option>
<option value="VOLVO">VOLVO</option>
<option value="Mercedes Benz">Mercedes Benz</option>
<option value="Mahindra">Mahindra</option>
<option value="JAGUAR">JAGUAR</option>
<option value="Scion">Scion</option>
</select>



      </select>
        </td>
    <td> <label>Vehicle Reg No: </label><br>
      <input class="gettxt" type="text" name="vereg"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input class="btnsub"  type="submit" value="CACULATE" name="submit">
    </div></td>
  </tr>
</table>
</form>

<div style="display:none;" id="myDiv" class="animate-bottom">

<table width="452" height="251" border="0" cellpadding="3" cellspacing="3">
<tr bgcolor="#FFFFFF">
<td height="80" colspan="2"><div align="center"> <br> 
</div>
  <h2 align="center">AUTO Insurance PLC</h2></td>
  </tr>
<tr bgcolor="#FFFFFF">
<td colspan="2"><p>Dear <em><strong><?php echo $last;?> <?php echo $first;?></strong></em> , </p>
  <p ><strong>Sum Insured/Value:  #<?php echo $suminsured;?> </strong></p>
  <p align="center"><strong>Price Information: </strong></p>
  <p align="center">Annual = <strong>#<?php echo $ans; ?></strong>.</p></td>
  </tr>
<tr bgcolor="#FFFFFF">
  <td width="252">
    <div align="right">
      <form action="process.php" method="POST">
          <input type="hidden" name="fname" value="<?php echo $first; ?>">
          <input type="hidden" name="lname" value="<?php echo $last; ?>">
          <input type="hidden" name="email" value="<?php echo $email; ?>">
          <input type="hidden" name="pnum"  value="<?php echo $phone; ?>">
          <input type="hidden" name="sex" value="<?php echo $sex; ?>">
          <input type="hidden" name="dob" value="<?php echo $dob; ?>">
          <input type="hidden" name="sumin" value="<?php echo $suminsured; ?>">
          <input type="hidden" name="annpa" value="<?php echo $ans; ?>">
          <input type="hidden" name="address" value="<?php echo $address; ?>">
           <input type="hidden" name="sor" value="<?php echo $sor; ?>">
            <input type="hidden" name="lga" value="<?php echo $lga; ?>">
             <input type="hidden" name="vena" value="<?php echo $vena; ?>">
              <input type="hidden" name="vereg" value="<?php echo $vereg; ?>">
      <input class="btnfea" type="submit" name="save" value="PROCCED">
      </form>
    </div></td>
  <td width="160"><div align="right"><a class="linlfea" href="getquote.php">Re-calculate</a></div></td>
  </tr>
</table>










<table width="767" height="762" border="0"  cellpadding="3" cellspacing="3" class="fea">
  <tr>
    <td colspan="2"><div align="center"><strong>Product Information:</strong></div></td>
  </tr>
  <tr>
    <td width="676"><div align="left"><strong>Features</strong></div></td>
    <td width="64"><div align="center"><strong>Premium</strong></div></td>
  </tr>
  <tr bordercolor="#CAFF95" bgcolor="#D9FFFF">
    <td height="58">N1 million 3rd party property damage</td>
    <td><div align="center"><img src="img/sign.png" width="31" height="33" ></div></td>
  </tr>
  <tr>
    <td height="50">Unlimited 3rd party bodily injury or death liability</td>
    <td><div align="center"><img src="img/sign.png" width="31" height="33" ></div></td>
  </tr>
  <tr bordercolor="#CAFF95" bgcolor="#D9FFFF">
    <td>Full value for stolen vehicle (no deduction for depreciation)</td>
    <td><div align="center"><img src="img/sign.png" width="31" height="33" ></div></td>
  </tr>
  <tr>
    <td>No deductible on accidental damage to your car</td>
    <td><div align="center"><img src="img/sign.png" width="31" height="33" ></div></td>
  </tr>
  <tr bordercolor="#CAFF95" bgcolor="#D9FFFF">
    <td height="59">Cash back after 24 months without a claim</td>
    <td><div align="center">15% </div></td>
  </tr>
  <tr>
    <td height="52">Car insurance discount for male drivers 45 and above</td>
    <td><div align="center">15% </div></td>
  </tr>
  <tr bordercolor="#CAFF95" bgcolor="#D9FFFF">
    <td height="54">Car insurance premium payable in 6 equal instalments paid monthly</td>
    <td><div align="center"><img src="img/sign.png" width="31" height="33" ></div></td>
  </tr>
  <tr>
    <td height="54">Personal accident benefit for policy holder</td>
    <td><div align="center">#500,000 </div></td>
  </tr>
  <tr bordercolor="#CAFF95" bgcolor="#D9FFFF">
    <td height="56">Personal accident benefit for occupants of insured vehicles</td>
    <td><div align="center">#200,000 </div></td>
  </tr>
  <tr>
    <td height="64">Free Towing</td>
    <td><div align="center"><img src="img/sign.png" width="31" height="33" ></div></td>
  </tr>
  <tr bordercolor="#CAFF95" bgcolor="#D9FFFF">
    <td height="51">Replacement of your vehicle or the cash equivalent</td>
    <td><div align="center"><img src="img/sign.png" width="31" height="33" ></div></td>
  </tr>
  <tr>
    <td height="42">Personal Claims Relationship Manager</td>
    <td><div align="center"><img src="img/sign.png" width="31" height="33" ></div></td>
  </tr>
</table>



 

</div>




    
    
    </div>
    
    




</body>
</html>