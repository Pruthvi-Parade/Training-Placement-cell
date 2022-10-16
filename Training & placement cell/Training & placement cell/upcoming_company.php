 <?php
include"connect.php";
                                                
                            $query="SELECT cname,clocation,c_personname,c_person_mob from company";
                            $results=mysqli_query($db,$query);
                            ?>
                            
                            <div class=container>
                                <div class=row>
                                    <div class=col-12>
                                        <table class="table table-striped">
                                            <tr><th>Company Name</th><th>Location</th><th>Company HR Name</th><th>HR contact</th></tr>
                                       <?php 
                                         while($row=mysqli_fetch_array($results))
                                         {
                                            echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>";
                                         }
                                         ?>

                                        </table>
                                    </div>
                                </div>
                            </div> 
