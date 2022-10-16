<?php
session_start();

// initializing variables
//serp,fullname,dob,mobile, email, s_address,city,state,stud_image

$fullname= "";
$dob="";
$mobile="";
$email="";
$s_address="";
$city="";
$state="";
$stud_image="";
$errors= array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'tandp');

// REGISTER USER
if (isset($_POST['personaldetails'])) {
  // receive all input values from the form
 
  $fullname= mysqli_real_escape_string($db, $_POST['fullname']);
  $dob=mysqli_real_escape_string($db, $_POST['dob']);
  $mobile=mysqli_real_escape_string($db, $_POST['mobile']);
  $email=mysqli_real_escape_string($db, $_POST['email']);
  $s_address=mysqli_real_escape_string($db, $_POST['s_address']);
  $city=mysqli_real_escape_string($db, $_POST['city']);
  $state=mysqli_real_escape_string($db, $_POST['state']);
  //$stud_image=mysqli_real_escape_string($db, $_POST['stud_image']);
  $stud_image=$_FILES['file']['name'];
$msg=Array();
if(empty($_FILES['file']['name']))
  $msg[] = "Please provide a file";
  
    if($_FILES['file']['error']>0)
    $msg[] = "Error uploading file";
    
        
    if(!(strtoupper(substr($_FILES['file']['name'],-4))==".JPG" || strtoupper(substr($_FILES['img']['name'],-5))==".JPEG"|| strtoupper(substr($_FILES['img']['name'],-4))==".GIF"))
      $msg[] = "wrong file  type";

        if(file_exists("uploads/".$_FILES['file']['name']))
      $msg[] = "File already uploaded. Please do not upload with same name";


            if(!empty($msg))
            {
                echo '<b>Error:-</b><br>';
                
                foreach($msg as $k)
                {
                    echo '<li>'.$k;
                }
            }
            else
            {
              move_uploaded_file($_FILES['file']['tmp_name'],"uploads/".$_FILES['file']['name']);
                $b_img = "uploads/".$_FILES['file']['name'];
}

  // Finally, register user if there are no errors in the form
  //encrypt the st_password before saving in the database

  	$query = "INSERT INTO personaldetails (fullname,dob,mobile, email, s_address,city,state,stud_image)
             VALUES( '$fullname', '$dob','$mobile','$email','$s_address','$city','$state','$stud_image')";
  	if($query>0)
  {


?>
    <script>
        if(confirm("Personal Details updated Successfully")){
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
