<?php
session_start();



// initializing variables
$serp= "";
$stream= "";
$user_name="";
$fullname="";
$mobile="";
$email="";
$errors=array();


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'tandp');
//print_r($_POST);
// REGISTER USER
if (isset($_POST['reg_student'])) {
  // receive all input values from the form
  $serp = $_POST['serp'];
  $stream =  $_POST['stream'];
  $st_password = mysqli_real_escape_string($db, $_POST['st_password']);
 // $st_password1= mysqli_real_escape_string($db, $_POST['st_password1']);

  echo "$serp"."$stream"."$st_password";
  if($serp=="" || $stream=="" || $st_password=="")
  {
    header("location:studentregistration.php");
  }
  // Finally, register user if there are no errors in the form
  //encrypt the st_password before saving in the database

  	$query = "INSERT INTO student (serp, stream, st_password) 
  			  VALUES('$serp', '$stream', '$st_password')";
  	mysqli_query($db, $query);
  	$_SESSION['serp'] = $serp;
  	$_SESSION['success'] = "You are now logged in";
    ?>
     <script> 
        if(confirm("Registration Successfull, You Can Login Now!!")) 
         {
          location="studentloginpage.php"; 
         } 
        else 
         { 
          location="studentregistration.php";
         } 
         </script>
         <?php

    
  }

//Register admin
  if(isset($_POST['reg_admin'])) {
    $user_name=mysqli_real_escape_string($db,$_POST['user_name']);
    $fullname=mysqli_real_escape_string($db,$_POST['fullname']);
    $mobile=mysqli_real_escape_string($db,$_POST['mobile']);
    $email=mysqli_real_escape_string($db,$_POST['email']);
    $user_password=mysqli_real_escape_string($db,$_POST['user_password']);
   // $user_password=mysqli_real_escape_string($db,$_POST['user_password1']);
    
    echo "$user_name ,$fullname ,$mobile ,$email,$user_password";
    
    if($user_name=="" || $fullname=="" || $mobile=="" || $email=="" || $user_password=="")
  {
    header("location:studentregistration.php");
  }


   $query = "INSERT INTO admin (user_name,fullname ,mobile , email, user_password) 
              VALUES('$user_name', '$fullname', '$mobile','$email','$user_password')";
    mysqli_query($db, $query); 
    $_SESSION['user_name'] = $user_name;
   $_SESSION['success'] = "You are now logged in";
    ?>
     <script> 
        if(confirm("Registration Successfull, You Can Login Now!!")) 
         {
          location="studentloginpage.php"; 
         } 
        else 
         { 
          location="studentregistration.php";
         } 
         </script>
         <?php
  }

// ... 

  if (isset($_POST['login_user'])) {
    $serp = mysqli_real_escape_string($db, $_POST['serp']);
    $st_password = mysqli_real_escape_string($db, $_POST['st_password']);
  
    if (empty($serp)) {
        array_push($errors, "serp is required");
    }
    if (empty($st_password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = ($password);
        $query = "SELECT * FROM student WHERE serp='$serp' AND st_password='$st_password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
           //  $_SESSION['tpstudent']=1;
          $_SESSION['serp'] = $serp;
          $_SESSION['success'] = "You are now logged in";
          header('location: S_dashboard.php');
        }else {
            array_push($errors, "Wrong serp/st_password combination");
        }
    }
  }
  if (isset($_POST['login_admin'])) {
      $user_name= mysqli_real_escape_string($db, $_POST['user_name']);
      $user_password = mysqli_real_escape_string($db, $_POST['user_password']);
    
      if (empty($user_name)) {
          array_push($errors, "user_name is required");
      }
      if (empty($user_password)) {
          array_push($errors, "Password is required");
      }
    
      if (count($errors) == 0) {
          $user_password = ($user_password);
          $query = "SELECT * FROM admin WHERE user_name='$user_name' AND user_password='$user_password'";
          $results = mysqli_query($db, $query);
          if (mysqli_num_rows($results) == 1) {
            $_SESSION['user_name'] = $user_name;
            $_SESSION['success'] = "You are now logged in";
            header('location: a_dashboard.php');
          }else {
              array_push($errors, "Wrong user_name/user_password combination");
          }
      }
    }
   
    ?>