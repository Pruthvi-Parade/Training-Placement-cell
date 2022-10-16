<?php
session_start();
$drive_id="";
$ddate="";
$positions="";
$tenth="";
$twelth="";	
$grad="";	
$pg="";
$gapinyear="";
$activeback="";
$link="";
$error=array();
$db = mysqli_connect('localhost', 'root', '', 'tandp');

if(isset($_POST['drive'])){
$drive_id=mysqli_real_escape_string($db,$_POST['drive_id']);
$ddate=mysqli_real_escape_string($db,$_POST['ddate']);
$positions=mysqli_real_escape_string($db,$_POST['positions']);
$tenth=mysqli_real_escape_string($db,$_POST['tenth']);
$twelth=mysqli_real_escape_string($db,$_POST['twelth']);
$grad=mysqli_real_escape_string($db,$_POST['grad']);
$pg=mysqli_real_escape_string($db,$_POST['pg']);
// $yd=mysqli_real_escape_string($db,$_POST['yd']);
$gapinyear=mysqli_real_escape_string($db,$_POST['gapinyear']);
$activeback=mysqli_real_escape_string($db,$_POST['activeback']);
$link=mysqli_real_escape_string($db,$_POST['link']);

$query="INSERT INTO placementdrive(drive_id,ddate,positions,tenth,twelth,grad,pg,gapinyear,activeback,link)Values('$drive_id','$ddate','$positions','$tenth','$twelth','$grad','$pg','$gapinyear','$activeback','$link')";
mysqli_query($db,$query);
$_SESSION['$drive_id']=$drive_id;
$_SESSION['success']="link will be created";

   header('location:a_dashboard.php');

}
  ?>
