<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="Loginform.css"/>
</head>
<body>
<?php
    require('connect.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['Username'])) {
      
		$FullName =stripcslashes($_REQUEST['FullName']);
		$FullName =mysqli_real_escape_string($con,$FullName);
        $UserName = stripslashes($_REQUEST['UserName']); 
        $UserName = mysqli_real_escape_string($con, $UserName);
        $Emailid   = stripslashes($_REQUEST['emailid']);
        $Emailid    = mysqli_real_escape_string($con, $emailid);
		$Phoneno    = stripslashes($_REQUEST['Phoneno']);
        $Phoneno    = mysqli_real_escape_string($con, $Phoneno);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
		$ConfirmPassword = stripslashes($_REQUEST['ConfirmPassword']);
        $ConfirmPassword = mysqli_real_escape_string($con, $ConfirmPassword);
		$sq = stripslashes($_REQUEST['sq']);
        $sq = mysqli_real_escape_string($con, $sq);
		$sa = stripslashes($_REQUEST['sa']);
        $sa = mysqli_real_escape_string($con, $sa);
		
        
		echo $FullName.$UserName.$emailid.$Phoneno.$password.$ConfirmPassword.$sq.$sa;
        $query    = "INSERT into admin_registration(Full Name,User Name,Email,Phone no,Password,Confirm Password,sq,sa)
                     VALUES ('$FullName','$UserName','$Emailid','$Phoneno','$Password','$ConfirmPassword','$sq','$sa')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='loginpage.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } 
?>
   
</body>
</html>
