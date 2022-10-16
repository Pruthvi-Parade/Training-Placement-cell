<?php
session_start();

// initializing variables

$tenth = "";
$twelth="";
$grad="";
$pg="";
$extra_cr="";
$errors= array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'tandp');

// REGISTER USER
if (isset($_POST['academic'])) {
  // receive all input values from the form
 
  $tenth = mysqli_real_escape_string($db, $_POST['tenth']);
  $twelth=mysqli_real_escape_string($db, $_POST['twelth']);
  $grad=mysqli_real_escape_string($db, $_POST['grad']);
  $pg=mysqli_real_escape_string($db, $_POST['pg']);
  $extra_cr=mysqli_real_escape_string($db, $_POST['extra_cr']);
  
  // Finally, register user if there are no errors in the form
  //encrypt the st_password before saving in the database

    $query = "INSERT INTO academicdetails (tenth ,twelth,grad, pg, extra_cr)
             VALUES( '$tenth ', '$twelth','$grad','$pg','$extra_cr')";
    mysqli_query($db, $query);
    
    header('location:S_dashboard.php');
  }



  ?>