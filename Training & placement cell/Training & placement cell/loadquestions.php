<?php

include "connect.php";



$qt=$_GET['qtype'];
$result=mysqli_query($db,"select * from questions where q_level='$qt'");

while($row=mysqli_fetch_array($result))
{
    ?>

<!-- Button trigger modal -->


<div class=container>
	<div class=row>
		<div class=col-8>


    <form>
    <div class="form-group">
    <input type=hidden value="<?php echo $row['3'];?>" name=txtans>
    <input class="form-control" type=text value="<?php echo $row['1'];?>" readonly>
        <div class="form-check">
        <input class="form-check-input" name=op type=radio onclick="checkanswer(this.value, txtans.value)" value="<?php echo $row['2'];?>" ><?php echo $row['2'];?>
</div>

<div class="form-check">
<input  class="form-check-input" name=op type=radio  onclick="checkanswer(this.value, txtans.value)" value="<?php echo $row['3'];?>" ><?php echo $row['3'];?>
</div>
<div class="form-check">  
        <input class="form-check-input" name=op  onclick="checkanswer(this.value, txtans.value)" type=radio  value="<?php echo $row['4'];?>" ><?php echo $row['4'];?>
</div>
<div class="form-check">
        <input class="form-check-input" type=radio name=op   onclick="checkanswer(this.value, txtans.value)" value="<?php echo $row['5'];?>" ><?php echo $row['5'];?>
</div>

    </div>

     <div>
   
</div>
   
</form>
</div>
<div class="col-4 fixed-bottom one" style="margin-left:100px;" >
 <b id="correctans" class="form-text" style="color:green;" ></b>

    <b id="wrongans" class="form-text" style="color:red;"></b>

</div>
    <?php

}
?>
