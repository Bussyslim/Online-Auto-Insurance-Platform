<!DOCTYPE html>
<html>
<head>
  <title>Vehicle Update</title>
  <link rel="stylesheet" type="text/css" href="back.css">

</head>
<body class="veup">




<br>
<br>
<br>

<?php  session_start() ?>
<table width="861" height="116" border="0" align="center" cellpadding="5" cellspacing="15">
    <tr>
    
   
    </tr>
  <tr bgcolor="#48A454">
<td width="211" height="86" bgcolor="#D6EDD9"><div align="center">
  <p>Customer Name: </p>
  <p><?php echo $_SESSION ['fr'];?>  <?php echo $_SESSION ['la'];

 ?></p>
</div>
  
<td width="176" bgcolor="#D6EDD9"><div align="center">
  <p>Type of Product Buy: </p>
  <p><?php echo $_SESSION ['ty']; ?></p>
</div></td>
<td width="137" bgcolor="#D6EDD9"><div align="center">
  <p>Vehicle Reg No: </p>
  <p><?php echo $_SESSION ['vreg']; ?></p>
</div></td>
<td width="200" bgcolor="#D6EDD9"><div align="center">
  <p>Vehicle Make: </p>
  <p><?php echo $_SESSION ['vna']; ?></p>
</div></td>
</tr>

</table>

<br>
<br>
<br />


<table align="center" cellpadding="3" cellspacing="3">
<form action="veupdate.php" method="POST" enctype='multipart/form-data'>
  
  <tr bgcolor="#F0F0F0">
    
    <td height="44">Model of Vehicle 
<select name="modelve" class="tbup">
  <option value="">Select Option</option>
  <option value="4Runner">4Runner</option>
<option value="Auris">Auris</option>
<option value="Avalon">Avalon</option>
<option value="Avanza">Avanza</option>
<option value="Avensis">Avensis</option>
<option value="Camry">Camry</option>
<option value="Carina">Carina</option>
<option value="Celica">Celica</option>
<option value="C-HR">C-HR</option>
<option value="Coaster">Coaster</option>
<option value="Condor">Condor</option>
<option value="Corolla">Corolla</option>
<option value="Corona">Corona</option>
<option value="Crown">Crown</option>
<option value="Crown Majesta">Crown Majesta</option>
<option value="Eclipse">Eclipse</option>
<option value="FJ Cruiser">FJ Cruiser</option>
<option value="Fortuner">Fortuner</option>
<option value="Hiace">Hiace</option>
<option value="Highlander">Highlander</option>
<option value="Hilux">Hilux</option>
<option value="Innova">Innova</option>
<option value="Ipsum">Ipsum</option>
<option value="IQ">IQ</option>
<option value="Land Cruiser">Land Cruiser</option>
<option value="Land Cruiser Prado">Land Cruiser Prado</option>
<option value="LiteAce">LiteAce</option>
<option value="Mark X">Mark X</option>
<option value="Matrix">Matrix</option>
<option value="Picnic">Picnic</option>
<option value="Previa">Previa</option>
<option value="Prius">Prius</option>
<option value="RAV4">RAV4</option>
<option value="Reiz">Reiz</option>
<option value="Sequoia">Sequoia</option>
<option value="Sienna">Sienna</option>
<option value="Solara">Solara</option>
<option value="Tacoma">Tacoma</option>
<option value="Tundra">Tundra</option>
<option value="Urban Cruiser">Urban Cruiser</option>
<option value="Venza">Venza</option>
<option value="Verso">Verso</option>
<option value="Yaris">Yaris</option>
</select>
    </td>
    <td>Engine No: 

<input type="text" name="engineno" class="tbup">
    </td>
    
  </tr>
  <tr bgcolor="#F0F0F0">
    <td height="51">Chasis Number: 
      <input type="text" name="chasisno" class="tbup">


    </td>
    <td>Year Manufacture: 
<input type="text" name="yearma" class="tbup">
    </td>
  </tr>
  <tr bgcolor="#F0F0F0">
    
    <td height="46" colspan="2"><div align="center">Picture of the vehicle 
      <input type="file" name="file" class="tbup">
    </div></td>
  </tr>
  <tr bgcolor="#F0F0F0">
    <td height="60" colspan="2"><div align="center">
      <input type="submit" name="sub" value="Update">
    </div></td>

  </tr>
</form>

<?php

$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'insure');


 
if (isset($_POST['sub'])) {

    $idc = $_SESSION ['me'];
    $modelve = $_POST['modelve'];
    $engineno = $_POST['engineno'];
    $chasisno = $_POST['chasisno'];
    $yearma = $_POST['yearma'];
    $vechicledetail = "Yes";
    $file = $_FILES['file']; 




$fileName  = $_FILES['file']['name'];
  $fileTmpName  = $_FILES['file']['tmp_name'];
  $fileSize  = $_FILES['file']['size'];
  $fileError  = $_FILES['file']['error'];
  $fileType  = $_FILES['file']['type'];

  $fileExt = explode('.', $fileName);
// to seperate the name of the file and format(it allow us to determined and pick the format which file to upload (eg 1.jpg the explodde remove the name and relase only the file name after dot  jpg )).

  $fileActualExt = strtolower(end($fileExt));//it allow us to pick only the format from fileExt and convet is to lower case(eg JEPG to jepg)

  $allowed = array('jpg', 'jpeg', 'png', 'pdf' );// this array allow us to pick the fille we want user to upload

  if (in_array($fileActualExt, $allowed)) { // is to check the file that is allow to be upload is been upload
    # code...
    if ($fileError === 0 ) {//to check if there is no error in the file
      if ($fileSize < 1000000 ) {// picture file measure in bytes. u make use kilobyte for the user
        $fileNameNew = uniqid('', true).".".$fileActualExt;  // just change the name of the file from the name it use to upload to numeric form(e.g 1.jpg, 2.jpg 3.jpg) to avoid error of bearing dis name (note: uniquid ('', true) can be change by delearing the variable that contain the name of the user or id. therefore in folder that contain the picture each picture will have the name or id used to represent)

        $fileDestination = 'uploads/'.$fileNameNew;//it mean destination of the file withe the new file name and upload used is the folder you create in with your file that hold all the picture that is been upload.
        move_uploaded_file($fileTmpName, $fileDestination);// to move file deastination to right location

                
      }else{
        echo "Your file is too big!";
      }


    }else{ // if there is error
      echo "There was an error uploading your file!";

    }
  }else{ // if d file upload is not part of the file expectd it will not upload
    echo "you cannot upload file of this type!";

  }


    
$sql = "UPDATE `insure`.`users` SET `vehicledetail` = '$vechicledetail',`vehiclepic` = ' $fileDestination', `modelvec` = '$modelve',
`engineno` = '$engineno',`chasisno` = '$chasisno', `yearma` = '$yearma' WHERE `users`.`id` = $idc";

  $res =mysqli_query($con, $sql);?>


  


<tr bgcolor="#F0F0F0" >
            <td height="48" colspan="2" class="tblink"><div align="center" >
              
             

              <form action="/me/u/vechicleinfo.php" method="POST">
            <input type="hidden" name="search" value="<?php echo $idc ?>" >
           <input type="submit" name="sear" value="Click Continue" class="link">
</form>
    </div></td>
  </tr>



</table>










<?php




}

       



?>

</body>
</html>

