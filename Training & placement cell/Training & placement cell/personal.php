<?php
include"connect.php";
session_start();
$prn=$_SESSION['serp'];
$fullname=$_POST['fullname'];
$dob=$_POST['dob'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$address=$_POST['s_address'];
$city=$_POST['city'];
$state=$_POST['state'];
$imgname=$_FILES['file']['name'];
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
                //echo "$fn $dob $mobile $email $address $city $state $imgname";
                move_uploaded_file($_FILES['file']['tmp_name'],"uploads/".$_FILES['file']['name']);
                $b_img = "uploads/".$_FILES['file']['name'];	
                $x=mysqli_query($db,"insert into  personaldetails values('prn','$fullname', '$dob','$mobile','$email',
                	'$s_address','$city','$state','$stud_image')");

	if($x>0)
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




?>


