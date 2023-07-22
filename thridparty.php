
<!DOCTYPE html>
<html>
<head>
	<title>Thrid Party</title>
	 <link rel="stylesheet" type="text/css" href="/me/css/end.css">
    <link rel="stylesheet" type="text/css" href="/me/css/body.css">
</head>
<body>
  
    
  
    

 
      
    <div id="thridparty">

    
<table width="327" height="249" border="0" cellpadding="3" cellspacing="3" class="thpcar">
  <tr bgcolor="#45E12F">
    <td height="33" colspan="2"><div align="center">View of the Categories: </div></td>
  </tr>
  <tr>
    <td width="151"><img src="img/car.jpg" width="148" height="142"></td>
    <td width="155"><img src="img/SUV.jpg" width="156" height="147"></td>
  </tr>
  <tr>
    <td><img src="img/van.jpg" width="149" height="135"></td>
    <td><img src="img/truck.jpg" width="156" height="131"></td>
  </tr>
</table>

<form action="thridprocess.php" method="POST">
<table width="538" height="407" border="0" cellpadding="3" cellspacing="3" class="thridque">
  <tr>
    <td height="41" colspan="2"><div align="center"><strong>Thrid Party Insurance</strong></div></td>
  </tr>
  <tr>
    <td width="259">
      <label>First Name:</label><br>
      <input class="gettxt" type="text" name="fname">
    </td>
    <td width="362">
       <label>Last Name:</label><br>
      <input class="gettxt" type="text" name="lname">
    </td>
  </tr>
  <tr>
    <td>
       <label>Email Address: </label>
      <input class="gettxt" type="email" name="email">
    </td>
    <td>
       <label>Phone Number: </label><br>
      <input class="gettxt" type="text" name="pnum">
    </td>
  </tr>
  <tr>
    <td><br>
       <label>Gender:</label><br>
       <select class="gettxt" name="sex" >
         <option value="">Select Option</option>
         <option value="Male">Male</option>
         <option value="Female">Female</option>
       </select>
          </td>
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
  <tr><td>
    <label>Select Your Categories:</label>
      <select class="gettxt" name="catf">
      <option value="">Select Option</option>
      <option value="CAR">CAR</option>
        <option value="SUV">SUV</option>
          <option value="VAN">VAN</option>
          <option value="TRUCK">TRUCK</option>
      
    </select>
   
  </td>

  <td>
    <label>Select Your Categories again:</label>
      <select class="gettxt" name="catl">
      <option value="">Select Option</option>
      <option value="#5000">CAR</option>
        <option value="#5000">SUV</option>
          <option value="#5000">VAN</option>
          <option value="#7500">TRUCK</option>
      
    </select>
      
  
  </td>

  </tr>
<td>
    <label>State Of Origin:</label>
    <input class="gettxt" type="text" name="sor">
  </td>
  <td>
    <label>LGA:</label><br>
    <input class="gettxt" type="text" name="lga">
  </td>
  <tr>
    <td>
    <label>Address:</label><br>
         <textarea class="gettxt" name="address"></textarea>
     </td>
  <td>
    <label>Vechicle Reg No:</label><br>
    <input class="gettxt" type="text" name="veno">
  </td>
    

  </tr>

  <tr>

<td>
    <label>Vechicle Name:</label><br>
    
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



     

  </td>

  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input class="btnsub" type="submit" value="Submit" name="value">
    </div></td>
  </tr>
</table>
</form>

    </div>



        
        
        
        
        
    
    










</body>
</html>