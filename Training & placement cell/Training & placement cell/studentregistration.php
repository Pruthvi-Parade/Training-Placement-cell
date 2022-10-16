<?php
    include "server.php";
?>
<html>
<style> 
.form-text 
{ 
   color:red;
} 
</style>
<head>
<link href="Loginform.css" rel="stylesheet" id="bootstrap-css">
<script src="Loginform.js"></script>
<script src="Loginform1.js"></script>
<script src="valid1.js"></script>    

<script >
    function validateform()
 {
  
   if(validateEmpty(document.getElementById('serp'),document.getElementById('erperror'),' Student ERP No Should not be empty')  && 
    validateEmpty(document.getElementById('stream'),document.getElementById('streamerror'),'Stream Should not be empty') &&  
    validateEmpty(document.getElementById('st_password'),document.getElementById('passworderror'),'Password Should not be empty')
  )
  {
   
    document.getElementById('frmRegister').submit();
  }
  else{
      alert ("Please fill Details ");
      return false;
  }

 }
 function validateform1()
 {
  
   if(validateEmpty(document.getElementById('user_name'),document.getElementById('usernameerror'),'Username should not be empty')  && 
    validateEmpty(document.getElementById('fullname'),document.getElementById('fullnameerror'),'fullname should not be empty') &&  
    validateEmpty(document.getElementById('mobile'),document.getElementById('mobileerror'),'Enter Valid mobile number')  &&
    validateEmpty(document.getElementById('email'),document.getElementById('emailerror'),'Enter Valid Email') &&
    validateEmpty(document.getElementById('user_password'),document.getElementById('password1error'),'Password Should not be empty')
  )
  {
   
    document.getElementById('frmRegister').submit();
  }
  else{
      alert ("Please fill Details");
      return false;
  }

 }
</script>


</head>

<!------ Include the above in your HEAD tag ---------->
<body>
<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
            <h3>Welcome</h3>
            <p> To</p>
            <p>Training & Placement Cell!</p>
            <a href="studentloginpage.php">
                <input type="submit" value="Login" name="Login" /></a>



        </div>
        <div class="col-md-9 register-right">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Student</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Admin</a>
                </li>
            </ul>
            <form action="server.php" method="POST" id="frmRegister" novalidate>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" 
                     aria-labelledby="home-tab">
                    <h3 class="register-heading">Apply as Student</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                                 <label for="exampleInputPassword1">Student PRN No:</label> 
                                <input type="text"
                                 class="form-control" 
                                 placeholder="enter PRN no *" id="serp" 
                                 name="serp"
                                 onblur="validateEmpty(this,document.getElementById('erperror'),' Student ERP No Should not be empty')"  
                                required />
                                <small id="erperror" class="form-text "> </small> 
                            </div>

                            <div class="form-group">
                                 <label for="exampleInputPassword1">Stream:</label> 
                                <input type="text" 
                                class="form-control" 
                                placeholder="enter stream *"  id="stream" 
                                name="stream"
                                onblur="validateEmpty(this,document.getElementById('streamerror'),'Stream Should not be empty')"  required/> 
                                <small id="streamerror" class="form-text "> </small>
                            </div>

                            <div class="form-group">
                                 <label for="exampleInputPassword1">Password:</label> 
                                <input type="password" 
                                class="form-control" 
                                placeholder="enter Password *" id="st_password" 
                                name="st_password" 
                                onblur="validateEmpty(this,document.getElementById('passworderror'),'Password Should not be empty')"  required/> 
                                <small id="passworderror" class="form-text "> </small>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Confirm Password:</label> 
                                <input type="password"
                                 class="form-control" 
                                 placeholder="enter Confirm Password *" id="st_password1" 
                                 name="st_password1"
                                 required/>
                                 
                            </div>
                            
                        </div>
                        <div class="col-md-9" >
                            
                            <input type="submit" class="btn btn-primary" name="reg_student" onclick="validateform()" value="register"/> 
                        </div>
                    </div>
                </div>
            
                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3 class="register-heading">Apply as a Admin</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Username:</label> 
                                <input type="text" 
                                class="form-control" 
                                placeholder="User Name *" id="user_name" 
                                name="user_name"
                                onblur="validateEmpty(this,document.getElementById('usernameerror'),'Username should not be empty')" 
                                required /> 
                            <small id="usernameerror" class="form-text"></small> 
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Full Name:</label> 
                                <input type="text" 
                                class="form-control" 
                                placeholder="Full Name *"  id="fullname" 
                                name="fullname" 
                                onblur="validateEmpty(this,document.getElementById('fullnameerror'),'fullname should not be empty')" 
                                required /> 
                            <small id="fullnameerror" class="form-text"></small>    
                            </div>

                             <div class="form-group">
                                <label for="exampleInputPassword1">Mobile No:</label> 
                                <input type="text"  
                                class="form-control" maxlength="10" minlength="10" 
                                placeholder="Mobile no*" 
                                name="mobile" id="mobile"
                                onblur="validateMobile(this,document.getElementById('mobileerror'),'Enter Valid mobile number')" 
                                required/> 
                                <small id="mobileerror" class="form-text"></small>  
                            </div>
                            
                           
                        </div>
                        <div class="col-md-6">
                             <div class="form-group">
                                <label for="exampleInputEmail">Email id:</label> 
                                <input type="email" 
                                class="form-control" 
                                placeholder="Email *" 
                                name="email"  id="email" 
                                onblur="validateEmail(this,document.getElementById('emailerror'),'Enter Valid Email')" 
                                required /> 
                            <small id="emailerror" class="form-text"></small> 
                            </div>

                            <div class="form-group">
                                 <label for="exampleInputPassword1">Password:</label> 
                                <input type="password" 
                                class="form-control" 
                                placeholder="enter Password *" 
                                name="user_password"  id="user_password" 
                               onblur="validateEmpty(this,document.getElementById('password1error'),'Password Should not be empty')"  required/> 
                                <small id="password1error" class="form-text "> </small>
                            </div>

                            <div class="form-group">
                                 <label for="exampleInputPassword1">Confirm Password:</label> 
                                <input type="password" 
                                class="form-control" 
                                placeholder="enter Password *" 
                                name="user_password1"  id="user_password1" 
                                required/>
                            </div>
                             <div class="col-md-9" >
                            <input type="submit" class="btn btn-primary" value="Register" name="reg_admin"  onclick="validateform1()"  />
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>

    </div>

</div>
</body>
</html>