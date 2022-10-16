<!DOCTYPE html>
<?php
include"connect.php";
?>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> Welcome to Training and Placement Cell</title>
  <link rel="stylesheet" href="style (1).css">
  <!-- Boxiocns CDN Link -->

  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">


<script>
function addquestionform()
{
  ob=new XMLHttpRequest();
  ob.open("GET",'addquestionform.html');
  ob.send();
  ob.onreadystatechange=function()
  {
    document.getElementById("displayform").innerHTML=ob.responseText;

  }
}

 function contact()    
        {
             ob = new XMLHttpRequest();
           
            ob.open("GET", "contact.php"); //    object created 
            // ob configured 
            ob.send();
            ob.onreadystatechange = function() {
                if (ob.readyState == 4) {
                    document.getElementById("displayform").innerHTML = ob.responseText;
                }
            }
        }
function addcompanyinfo()
{
  ob=new XMLHttpRequest();
  ob.open("GET",'company_details.php');
  ob.send();
  ob.onreadystatechange=function()
  {
    document.getElementById("displayform").innerHTML=ob.responseText;

  }
}

function adddriveinfo()
{
  ob=new XMLHttpRequest();
  ob.open("GET",'drive.php');
  ob.send();
  ob.onreadystatechange=function()
  {
    document.getElementById("displayform").innerHTML=ob.responseText;

  }
}

 function a_profile()    
        {
             ob = new XMLHttpRequest();
           
            ob.open("GET", "a_showprofile.php"); //    object created 
            // ob configured 
            ob.send();
            ob.onreadystatechange = function() {
                if (ob.readyState == 4) {
                    document.getElementById("displayform").innerHTML = ob.responseText;
                }
            }
        }

function checkcompany()    
        {
             ob = new XMLHttpRequest();
           
            ob.open("GET", "check_company.php"); //    object created 
            // ob configured 
            ob.send();
            ob.onreadystatechange = function() {
                if (ob.readyState == 4) {
                    document.getElementById("displayform").innerHTML = ob.responseText;
                }
            }
        }        
function a_history()    
        {
             ob = new XMLHttpRequest();
           
            ob.open("GET", "a_history.php"); //    object created 
            // ob configured 
            ob.send();
            ob.onreadystatechange = function() {
                if (ob.readyState == 4) {
                    document.getElementById("displayform").innerHTML = ob.responseText;
                }
            }
        }

</script>

</head>

<body>
  <div class="sidebar close">
    <div class="logo-details">
      <i class='bx bx-id-card'></i>
      <span class="logo_name">Admin </span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#">
          <i class='bx bx-grid-alt'></i>
          <span class="link_name">Dashboard</span>
        </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="a_dashboard.php">Dashboard</a></li>
                </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-user'></i>
            <span class="link_name">Admin Profile</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Admin Profile</a></li>
         
          <li><a onclick="a_profile()">Show Profile</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-buildings'></i>
            <span class="link_name">Company</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Company</a></li>
          <li><a onclick="addcompanyinfo()">Add Companies</a></li> 
          <li><a onclick="adddriveinfo()">Add drive</a></li>
          <li><a onclick="checkcompany()">check Companies</a></li>

        </ul>
        
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-buildings'></i>
            <span class="link_name">Test</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Test</a></li>
          <li><a onclick="addquestionform()">Add Questions</a></li>
          

        </ul>
        
      </li>
      



    
      </li>
      <li>
        <a href="#">
          <i class='bx bx-user'></i>
          <span class="link_name">Placed Students</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Placed Students details</a></li>
        </ul>
      </li>
     <li>
                <a href="#">
                    <i class='bx bx-phone'></i>
                    <span class="link_name">Helpdesk</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a onclick="contact()">Contact details</a></li>
                </ul>
            </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-history'></i>
            <span class="link_name">history</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">History</a></li>
          <li><a onclick="a_history()">Company Status</a></li>


        </ul>
      </li>

      <li>
        <div class="profile-details">

          <div class="name-job">
            <div class="profile_name">Log Out</div>
            <!--     <div class="job">Web Desginer</div>
      </div> -->
            <i class='bx bx-log-out'></i>
          </div>
      </li>
    </ul>
  </div>
  <section class="home-section">
            <div class="home-content">
                <i class='bx bx-menu'></i>
                <span class="text">Welcome</span>


            </div>
            <div class=container>
                <div class="row my-4 mx-4">
                    <div class="col-12 mx-4">
                        <div id="displayform" style="margin:30px;">
                         <?php
                            $query="SELECT * from placedstudent";  
                            $results=mysqli_query($db,$query);
                            ?>
                            
                            <div class=container>
                                <div class=row>
                                    <div class=col-12>
                                            
                                        <table class="table table-striped">
                                             <tr><th>sr.no</th><th>Year</th><th>package</th><th>prn no</th><th>company registration no</th></tr>
                                       <?php 
                                         while($row=mysqli_fetch_array($results))
                                         {
                                            echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td></tr>";
                                         }
                                         ?>


                                        </table>
                                    </div>
                                </div>
                            </div> 

                    
                    
                        </div>
                    </div>
                </div>

            </div>

        </section>



  <script src="script.js"></script>

</body>

</html>