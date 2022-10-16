<?php
session_start();
$cregno="";
$cname="";
$clocation="";
$c_personname=""; 
$c_person_mob="";   



$error=array();
$db = mysqli_connect('localhost', 'root', '', 'tandp');

if(isset($_POST['Company'])){
$cregno=mysqli_real_escape_string($db,$_POST['cregno']);
$cname=mysqli_real_escape_string($db,$_POST['cname']);
$clocation=mysqli_real_escape_string($db,$_POST['clocation']);
$c_personname=mysqli_real_escape_string($db,$_POST['c_personname']);
$c_person_mob=mysqli_real_escape_string($db,$_POST['c_person_mob']);



$query="INSERT INTO company(cregno,cname,clocation,c_personname,c_person_mob)Values('$cregno','$cname','$clocation','$c_personname','$c_person_mob')";
mysqli_query($db,$query);
$_SESSION['$drive_id']=$cregno;
$_SESSION['success']="link will be created";
header('location:a_dashboard.php');
}
  ?>
