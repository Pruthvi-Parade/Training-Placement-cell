 <?php
include"connect.php";
                                                
                            $query="SELECT placementdrive.ddate,placementdrive.positions,company.cregno,company.cname from placementdrive,company where company.cregno=placementdrive.comp_regno;  
                           ";
                            $results=mysqli_query($db,$query);
                            ?>
                            
                            <div class=container>
                                <div class=row>
                                    <div class=col-12>
                                        <table class="table table-striped">
                                            <tr><th>drive date</th><th>designation</th><th>company reg no</th><th>company name</tr>
                                       <?php 
                                         while($row=mysqli_fetch_array($results))
                                         {
                                            echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>
                                            </tr>";
                                         }
                                         ?>

                                        </table>
                                    </div>
                                </div>
                            </div> 
                             
