
<?php
    session_start();
    //if(isset($_SESSION['admin'])){
     // header('location:home.php');
    //}
    ?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="/me/css/body.css">
    <link rel="stylesheet" type="text/css" href="/me/css/end.css">
    <link rel="stylesheet" type="text/css" href="mini.css">

</head>
<body>


      


<div id="loog">

  

<table width="364" border="0" cellspacing="3" cellpadding="3" class="tablog" >
      <tr>
        <td height="131" colspan="2"><div align="center"></div></td>
      </tr>
      <tr>
         <?php if(isset($_SESSION['error'])){?>
        <td colspan="2" ><div class="<?php echo  $_SESSION ['cll'] ?>" align="center"> <?php echo $_SESSION['error'] ?></div><?php  unset($_SESSION['error']);}  ?>
       </td>
        
      </tr>
  
      
      <tr bgcolor="#87DAF1">
        <td height="41" colspan="2"><div align="center">
          <h1><strong>Log in </strong></h1>
        </div></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <form action="login.php" method="POST">
        <td height="46"><div align="center">Username:</div></td>
        <td><input type="text" class="box" placeholder="Enter your Username" name="user" /></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td height="44"><div align="center">Password:</div></td>
        <td><input type="password" id="password"  class="box" placeholder="Enter your Password" name="password" /></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td height="36" colspan="2"><p align="right"><input type="checkbox" onClick="passwordHider();"/> 
      Show Password</p></td>
	  
	  <script type="text/javascript">
	function passwordHider(){
		var input = document.getElementById('password');
		
		if(input.type === "password"){
			input.type = "text";
		}else{
			input.type = "password";
		}
	}
</script>
    </tr>
      <tr bgcolor="#FFFFFF">
        <td height="46" colspan="2"><div align="center">
      <input type="submit"  value="Login" class="btn"  name="save" /> 
    </div></td>
      </tr>
      </form>
      <tr bgcolor="#FFFFFF">
        <td colspan="2"><div align="right"><strong><em><a class="forget" href="forgetpassword.php">Forget password </a></em></strong></div></td>
      </tr>

      
  </table>
    
    
</div>
    
    



</body>
</html>




