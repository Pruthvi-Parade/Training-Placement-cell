<?php
session_start();

// initializing variables
//serp,fullname,dob,mobile, email, s_address,city,state,stud_image

$pid= "";
$yr="";
$pckginrs="";
$serp="";
$comp_regno="";
$errors= array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'tandp');

// REGISTER USER
if (isset($_POST['placedstudent'])) {
  // receive all input values from the form
 
  $pid= mysqli_real_escape_string($db, $_POST['pid']);
  $yr=mysqli_real_escape_string($db, $_POST['yr']);
  $pckginrs=mysqli_real_escape_string($db, $_POST['pckginrs']);
  $serp=mysqli_real_escape_string($db, $_POST['serp']);
  $comp_regno=mysqli_real_escape_string($db, $_POST['comp_regno']);
  
  //$stud_image=mysqli_real_escape_string($db, $_POST['stud_image']);
  


  // Finally, register user if there are no errors in the form
  //encrypt the st_password before saving in the database

  	$query = "INSERT INTO placedstudent (pid,yr,pckginrs,serp,comp_regno)
             VALUES( '$pid', '$yr','$pckginrs','$serp','$comp_regno')";
  	if($query>0)
  {


?>
    <script>
        if(confirm(" Details updated Successfully")){
          location="S_dashboard.php";
        }
        else
        {
          location="S_dashboard.php";
        }
    </script>
<?php
  }
  else
  {
    ?>

    <script>
    alert("Something is wrong");
    </script>
  <?php
  }
}

?>
