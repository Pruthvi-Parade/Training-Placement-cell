<!DOCTYPE html>
<?php
include"connect.php";
?>

    <html lang="en" dir="ltr">

    <head>


        <script>
            function addpersonalinfo() {
                ob = new XMLHttpRequest();

                ob.open("GET", "form1.php"); //    object created 
                // ob configured 
                ob.send();
                ob.onreadystatechange = function() {
                    if (ob.readyState == 4) {
                        document.getElementById("form").innerHTML = ob.responseText;
                    }
                }
            }

            function s_profile() {
                ob = new XMLHttpRequest();

                ob.open("GET", "s_showprofile.php"); //    object created 
                // ob configured 
                ob.send();
                ob.onreadystatechange = function() {
                    if (ob.readyState == 4) {
                        document.getElementById("form").innerHTML = ob.responseText;
                    }
                }
            }


            function addacademicinfo() {
                ob = new XMLHttpRequest();

                ob.open("GET", "form1.2.php"); //    object created 
                // ob configured 
                ob.send();
                ob.onreadystatechange = function() {
                    if (ob.readyState == 4) {
                        document.getElementById("form").innerHTML = ob.responseText;
                    }
                }
            }


            function displayquestions(qtype) {
                ob = new XMLHttpRequest();
                alert(qtype);
                ob.open("GET", "loadquestions.php?qtype=" + qtype); //    object created 
                // ob configured 
                ob.send();
                ob.onreadystatechange = function() {
                    if (ob.readyState == 4) {
                        document.getElementById("form").innerHTML = ob.responseText;
                    }
                }
            }

            function checkanswer(op, ans) {
                // alert(op);

                if (op == ans) {
                    document.getElementById('correctans').innerHTML = "Good Job!! You are Correct";
                    document.getElementById('wrongans').innerHTML = "";
                } else {
                    document.getElementById('wrongans').innerHTML = "Sorry:) Correct Answer is" + ans;
                    document.getElementById('correctans').innerHTML = "";
                }
            }






            function contact() {
                ob = new XMLHttpRequest();

                ob.open("GET", "contact.php"); //    object created 
                // ob configured 
                ob.send();
                ob.onreadystatechange = function() {
                    if (ob.readyState == 4) {
                        document.getElementById("form").innerHTML = ob.responseText;
                    }
                }
            }

            function company() {
                ob = new XMLHttpRequest();

                ob.open("GET", "upcoming_company.php"); //    object created 
                // ob configured 
                ob.send();
                ob.onreadystatechange = function() {
                    if (ob.readyState == 4) {
                        document.getElementById("form").innerHTML = ob.responseText;
                    }
                }
            }

            function placedstudent() {
                ob = new XMLHttpRequest();

                ob.open("GET", "placedstudent.php"); //    object created 
                // ob configured 
                ob.send();
                ob.onreadystatechange = function() {
                    if (ob.readyState == 4) {
                        document.getElementById("form").innerHTML = ob.responseText;
                    }
                }
            }
        </script>
        <meta charset="UTF-8">
        <title> Welcome to Training and Placement Cell</title>
        <link rel="stylesheet" href="style (1).css">
        <!-- Boxiocns CDN Link -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

        <script src="valid1.js"></script>


    </head>

    <body>
        <div class="sidebar close">
            <div class="logo-details">
                <i class='bx bx-id-card'></i>
                <span class="logo_name">Student </span>
            </div>
            <ul class="nav-links">
                <li>
                    <a href="#">
                        <i class='bx bx-grid-alt'></i>
                        <span class="link_name">Dashboard</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="S_dashboard.php">Dashboard</a></li>
                        <!--  <li><a href="#">My Growth</a></li> -->
                    </ul>
                </li>
                <li>
                    <div class="iocn-link">
                        <a href="#">
                            <i class='bx bx-user'></i>
                            <span class="link_name">Student Profile</span>
                        </a>
                        <i class='bx bxs-chevron-down arrow'></i>
                    </div>
                    <ul class="sub-menu">
                        <li>
                            <a class="link_name" href="#">Student Profile</a></li>
                        <li><a onclick="addpersonalinfo()">Personal Details</a></li>
                        <li><a onclick="addacademicinfo()">academic details</a></li>

                        <li><a onclick="s_profile() ">Show Profile</a></li>
                    </ul>
                </li>
                <li>
                    <div class="iocn-link">
                        <a href="#">
                            <i class='bx bx-pen'></i>
                            <span class="link_name">Assesment</span>
                        </a>
                        <i class='bx bxs-chevron-down arrow'></i>
                    </div>
                    <ul class="sub-menu">
                        <li><a class="link_name" href="#">Practice questions</a></li>
                        <li><a onclick="displayquestions('easy')">Easy</a></li>
                        <li><a onclick="displayquestions('medium')">medium</a></li>
                        <li><a onclick="displayquestions('hard')">hard</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bx-building'></i>
                        <span class="link_name">Upcoming Companies</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a onclick="company()">Upcoming companies info</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bx-user'></i>
                        <span class="link_name">Placed Students</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a onclick="placedstudent()">Placed Students details</a></li>
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
                    <a href="#">
                        <i class='bx bx-history'></i>
                        <span class="link_name">History</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="#">History</a></li>
                    </ul>
                </li>
                <!-- <li>
                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="link_name">Settings</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Setting</a></li>
                </ul>
            </li> -->
                <li>
                    <div class="profile-details">
                        <div class="profile-content">
                            <!-- <img src="image/profile.jpg" alt="profileImg"> -->
                        </div>
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
                            <div id="form" style="margin:30px;">
                                <?php
                         
                            $query="SELECT placementdrive.ddate,placementdrive.positions,company.cregno,company.cname ,placementdrive.link from placementdrive,company where company.cregno=placementdrive.comp_regno";  
                           
                            $results=mysqli_query($db,$query);
                            ?>

                                    <div class=container>
                                        <div class=row>
                                            <div class=col-12>

                                                <table class="table table-striped">
                                                    <tr>
                                                        <th>Drive date</th>
                                                        <th>Designation</th>
                                                        <th>Company registeration number</th>
                                                        <th>company name</th>
                                                        <th>Drive Link</th>
                                                    </tr>
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