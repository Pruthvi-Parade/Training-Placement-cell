<?php
include"connect.php";
$qc=$_POST['category'];
$ql=$_POST['q_level'];
$qs=$_POST['question'];
$op1=$_POST['option1'];
$op2=$_POST['option2'];
$op3=$_POST['option3'];
$op4=$_POST['option4'];
$ans=$_POST['CorrectAns'];

if($qc!="" && $ql!="" && $qs!="" && $op1!="" && $op2!="" && $op3!="" && $op4!="" && $ans!="")
{
    $x=mysqli_query($con,"insert into questions(question,op1,op2,op3,op4,answer,q_category,q_level)values('$qs','$op1','$op2','$op3','$op4','$ans','$qc','$ql')");
    if($x>0)
    {
        ?>
         <script>
         if(confirm("New Question Added Successfully"))
         {
             location=a_dashboard.html;
         }
         else
            location=a_dashboard.html;

        </script>
        <?php

    }
    else
    {
        ?>
        
        <script>
        if(confirm("New Question Added Successfully"))
        {
            location:a_dashboard.html;
        }
        else
           location:a_dashboard.html;

       </script>
    <?php
    }
}
else
{

    ?>
    <script>
    if(confirm("Enter All the Fields"))
    {
        location=a_dashboard.html;
    }
    else
       location=a_dashboard.html;

   </script>
   <?php

}



?>
