<?php
include"connect.php";
session_start();
 $serp=$_SESSION['serp']; 
 echo "$serp";                  
                            $query="SELECT personaldetails.serp,personaldetails.fullname,personaldetails.dob,personaldetails.mobile,personaldetails.email,academicdetails.tenth,academicdetails.twelth,academicdetails.grad,academicdetails.pg from personaldetails,academicdetails WHERE personaldetails.serp=academicdetails.serp and personaldetails.serp='$serp'";
                            $results=mysqli_query($db,$query);
                            ?>

    <div class=container>
        <div class=row>
            <div class=col-12>
                <table class="table table-striped">
                    <!-- <tr>
                        <th>PRN No</th>
                        <th>Full name</th>
                        <th>DOB</th>
                        <th>mobile</th>
                        <th>email</th>
                        <th>SSC</th>
                        <th>HSC</th>
                        <th>Graduation </th>
                        <th>Post Graduation</th>
                    </tr> -->
                    <?php 
                                         while($row=mysqli_fetch_array($results))
                                         {
                                            echo "<tr><th>PRN No</th><td>$row[0]</td></tr>";
                                            echo "<tr><th> Full Name</th><td>$row[1]</td></tr>";
                                            echo "<tr><th> DOB</th><td>$row[2]</td></tr>";
                                            echo "<tr><th> Mobile</th><td>$row[3]</td></tr>";
                                            echo "<tr><th> Email</th><td>$row[4]</td></tr>";
                                            echo "<tr><th> SSC marks</th><td>$row[5]</td></tr>";
                                            echo "<tr><th> HSC Marks</th><td>$row[6]</td></tr>";
                                            echo "<tr><th> Graduation</th><td>$row[7]</td></tr>";
                                            echo "<tr><th> Post Graduation</th><td>$row[8]</td></tr>";
                                            
                                         }
                                         ?>

                </table>
            </div>
        </div>
    </div>