<?php

session_start();

if(!isset($_SESSION['tpstudent']))
{
    header("location:studentlogin.php");
}

?>