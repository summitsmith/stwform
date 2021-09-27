<?php session_start(); /* Starts the session */
	
	/* Check Login form submitted */	
	if(isset($_POST['Submit'])){
		/* Define username and associated password array */
		$logins = array('summit' => 'ficland','stud032' => 'nambi','stud031' => 'kemigisha','stud033' => 'charles','stud034' => 'geofrey','stud035' => 'blessing','stud036' => 'kayongo','stud037' => 'fahad','stud038' => 'flavia','stud039' => 'henry','stud040' => 'benita','stud041' => 'jamira');
		
		/* Check and assign submitted Username and Password to new variable */
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		
		/* Check Username and Password existence in defined array */		
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			/* Success: Set session variables and redirect to Protected page  */
			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:index.php");
			exit;
		} else {
			/*Unsuccessful attempt: Set error message */
			$msg="<span style='color:red'>Invalid Login Details</span>";
		}
	}
?>


<!DOCTYPE html>
<html>
  <title>Welcome to Holy Trinity Website - login, Sign up or be A Guest </title>


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="layout/sum.css">
<link rel="icon" href="images/icon.png" type="image/x-icon">
<body class="w3-container">

<h2>Hallo, Welcome to Holy Trinity Online Platform</h2>

<button onclick="document.getElementById('id01').style.display='block'" class="w3-btn w3-green w3-large">Login</button>

<div id="id01" class="w3-modal">
  <span onclick="document.getElementById('id01').style.display='none'" 
  class="w3-closebtn w3-hover-red w3-container w3-padding-16 w3-display-topright w3-xxlarge">&times;</span>
  <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">
  
    <div class="w3-center"><br>
      <img src="images/HOT logo.jpg" alt="Avatar" style="width:40%" class="w3-circle w3-margin-top">
    </div>

    <div class="w3-container">
      <div class="w3-section">
        <form action="" method="post" name="Login_Form">
          <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
          <?php if(isset($msg)){?>
            <tr>
              <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
            </tr>
          <?php } ?>
          </table>
         <label><b>User ID</b></label>
         <input class="w3-input w3-border w3-margin-bottom" type="text" id="name" name="Username" placeholder="Enter User ID">

         <label><b>Password</b></label>
         <input class="w3-input w3-border" type="password" id="pass" name="Password" placeholder="Enter Password">
        
         <button type="submit" name="Submit" class="w3-btn w3-btn-block w3-green w3-section" >Login</button>
         <input class="w3-check" type="checkbox" checked="checked"> Remember me
        </form>
        
      </div>
    </div>

    <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
      <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-btn w3-red">Cancel</button>
      <span class="w3-right w3-padding w3-hide-small">Forgot <a href="pages/forgot ps.html">password?</a></span>
    </div>

  </div>
</div>

  


<button onclick="document.getElementById('id02').style.display='block'" class="w3-btn w3-green w3-large">Sign up</button>
<div id="id02" class="w3-modal">
  <span onclick="document.getElementById('id01').style.display='none'" 
  class="w3-closebtn w3-hover-red w3-container w3-padding-16 w3-display-topright w3-xxlarge">&times;</span>
  <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">
  
    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdjjiIPZo3F_HvMVu_QyoCeMAiFdbY4XMt_kQJvpI9r23dWjQ/viewform?embedded=true" width="640" height="1276" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>    

  </div>
</div>

<a href="guest.html"><button class="w3-btn w3-green w3-large">Am a Guest</button></a>

</body>

</html> 




