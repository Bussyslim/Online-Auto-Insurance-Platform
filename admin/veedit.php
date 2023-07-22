<!DOCTYPE html>
<html>
<head>
  <title>Edit vehicle information</title>
  <link rel="stylesheet" type="text/css" href="back.css">

</head>
<body class="veup">






<?php
session_start();

$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'insure');


if (isset($_GET['edit'])) {
		$ide = $_GET['edit'];
		$q= (" SELECT * FROM users WHERE id = $ide");
	
$result = mysqli_query($con, $q) or die($con->error());
    
}



if (isset($_POST['sub'])) {

    $idc = $_POST['id'];
    $type = $_POST['type'];
    $vereg = $_POST['vereg'];
    $modelve = $_POST['modelve'];
    $engineno = $_POST['engineno'];
    $chasisno = $_POST['chasisno'];
    $yearma = $_POST['yearma'];
    $vena = $_POST['vena'];
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


    
$sql = "UPDATE `insure`.`users` SET `type` = '$type' , `vechiclereg` = '$vereg' , `vehiclepic` = ' $fileDestination', `modelvec` = '$modelve',
`engineno` = '$engineno',`chasisno` = '$chasisno', `yearma` = '$yearma' , `vechiclename` = '$vena' WHERE `users`.`id` = $idc";

  $res =mysqli_query($con, $sql);?>


<script> 
  	alert ("Record Updated sucessfully");
  	window.location.href ='veh.php';

</script>


<?php




}

       



?>




<?php
		
while ($row = mysqli_fetch_assoc($result)) { ?>	

   
 <form action="veedit.php" method="POST" enctype='multipart/form-data'>
     <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <table align="center" cellpadding="3" cellspacing="3">
      <br>
      <br>
      <br>

      <tr>
    
   
    </tr>
	
     <tr bgcolor="#48A454">

  
<td width="176"><div align="center">
  Type of Product Buy:
  <input type="text" name="type" value="<?php echo $row['type']; ?>">
</div></td>
<td width="137"><div align="center">
  Vehicle Reg No: 
   <input type="text" name="vereg" value="<?php echo $row['vechiclereg']; ?>">
</div></td>
        </tr>
    
  
  <tr bgcolor="#F0F0F0">
   
    <td height="44">Model of Vehicle
        <input type="text" name="modelve" value="<?php echo $row['modelvec']; ?>" >
      </td>
    <td>Engine No: 

<input type="text" name="engineno" value="<?php echo $row['engineno']; ?>">
    </td>
    
  </tr>
  <tr bgcolor="#F0F0F0">
    <td height="51">Chasis Number: 
      <input type="text" name="chasisno" value="<?php echo $row['chasisno']; ?>">


    </td>
    <td>Year Manufacture: 
<input type="text" name="yearma" value="<?php echo $row['yearma']; ?>">
    </td>
  </tr>
  <tr bgcolor="#F0F0F0">
      
      
<td width="200"><div align="center">
  Vehicle Make: 
  <input type="text" name="vena" value="<?php echo $row['vechiclename']; ?>">
</div></td>

    
    <td height="46" ><div align="center">Picture of the vehicle
        
<input type="file" name="file">
    </div></td>
  </tr>
  
    
<?php } 

        ?>
	<tr bgcolor="#F0F0F0">
    <td height="60" colspan="2"><div align="center">
      <input type="submit" name="sub" value="Update">
    </div></td>

  </tr>
    </table>
</form>

</body>
</html>
