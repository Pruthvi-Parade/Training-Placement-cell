 <?php
include"connect.php";
                                                
                            $query="SELECT * from company";
                            $results=mysqli_query($db,$query);
                            ?>
                            
                            <div class=container>
                                <div class=row>
                                    <div class=col-12>
                                        <table class="table table-striped">
                                            <tr><th>cregno</th><th>company name</th><th>company location</th><th></th></tr>
                                       <?php 
                                         while($row=mysqli_fetch_array($results))
                                         {
                                            echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
                                         }
                                         ?>

                                        </table>
                                    </div>
                                </div>
                            </div> 
                             
