<?php
    include "personaldetails.php";
?>
<html>
<style> 
.form-text 
{ 
   color:red;
} 
</style>
<head>
    <link href="form.css" rel="stylesheet" id="bootstrap-css">
    <script src="form.js"></script>
    <script src="form1.js"></script>
    <script src="valid1.js"></script> 

<script >
    function validatedetails3()
 {
  
   if(validateName(document.getElementById('fullname'),document.getElementById('fullnameerror'),'Full name Should not be empty') &&
   validateEmpty(document.getElementById('dob'),document.getElementById('doberror'),'Enter valid date of Birth') && 
   validateMobile(document.getElementById('mobile'),document.getElementById('mobileerror'),'Enter Valid mobile number')
   validateEmail(document.getElementById('email'),document.getElementById('emailerror'),'Enter Valid Email') && 
   validateEmpty(document.getElementById('address'),document.getElementById('addresserror'),'address Should not be empty') && 
   validateEmpty(document.getElementById('city'),document.getElementById('cityerror'),'city Should not be empty') && 
   validateEmpty(document.getElementById('state'),document.getElementById('stateerror'),'state Should not be empty')
   )
  {
   
    document.getElementById('frmRegister3').submit();
  }
  else{
      alert ("Please fill Details");
        return false;
  }

 }
 </script>


</head>
<body>
<form action="personaldetails.php" method="POST" id="frmRegister3" novalidate>    
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"></div>
        </div>
		  
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Personal Information</h4>
                </div>
    

      

                <div class="row mt-3">
                    <div class="col-md-12">
                        <label class="labels"><h6>Full Name:</label>
                        <input type="text" class="form-control" placeholder="enter full name" 
                        name="fullname" id="fullname"
                       onblur="validateName(this,document.getElementById('fullnameerror'),'Full name Should not be empty')"  required/> 
                                <small id="fullnameerror" class="form-text "style="color:red;"> </small>
                    </div>
               
                    <div class="col-md-12">
                        <label class="labels"><h6>Date of Birth: </label>
                        <input type="date" class="form-control" placeholder="dateofbirth" 
                         name="dob"   id="dob"
                       onblur="validateEmpty(this,document.getElementById('doberror'),'Enter valid date of Birth')"  required/> 
                                <small id="doberror" class="form-text " style="color:red;" ></small>
                     </div>

                    <div class="col-md-12">
                        <label class="labels"><h6>Mobile Number:</label>
                        <input type="text" class="form-control" placeholder="enter phone number"  name="mobile" id="mobile" 
                         onblur="validateMobile(this,document.getElementById('mobileerror'),'Enter Valid mobile number')" 
                                required/> 
                                <small id="mobileerror" class="form-text" style="color:red;"></small>  

                     <div class="col-md-12">
                        <label class="labels"><h6>Email ID:</label>
                        <input type="email" class="form-control" placeholder="enter email id" 
                        name="email" id="email"
                        onblur="validateEmail(this,document.getElementById('emailerror'),'Enter Valid Email')" 
                                required /> 
                            <small id="emailerror" class="form-text" style="color:red;"></small> 
                    </div>

                    <div class="col-md-12">
                        <label class="labels"><h6>Address:</label>
                        <input type="text" class="form-control" placeholder="enter address "
                         name="s_address"  id="s_address"
                       onblur="validateEmpty(this,document.getElementById('addresserror'),'address Should not be empty')"  required/> 
                                <small id="addresserror" class="form-text " style="color:red;"></small>
                     </div>
                    <div class="col-md-12">
                        <label class="labels"><h6>city:</h6></label>
                        <input type="text" class="form-control" placeholder="enter city"
                        name="city"  id="city"
                       onblur="validateEmpty(this,document.getElementById('cityerror'),'city Should not be empty')"  required/> 
                                <small id="cityerror" class="form-text " style="color:red;"></small>
                    </div>
                    <div class="col-md-12">
                        <label class="labels"><h6>State:</h6></label>
                        <input type="text" class="form-control" placeholder="enter state" name="state" id="state"
                       onblur="validateEmpty(this,document.getElementById('stateerror'),'state Should not be empty')"  required/> 
                                <small id="stateerror" class="form-text " style="color:red;"></small>
                    </div>
                    

                    
                  </div> 
                    
                
                
                <div class="mt-5 text-center">
                    <input type="submit" class="btn btn-primary" value="submit" name="personaldetails" onclick="validatedetails3()" /></div>
            </div>
			</div>
        </div>
		</div>
       
</div>
</div>
</form>



</body>
</html>

<style>
body {
    background: #3931af;
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
</style>


