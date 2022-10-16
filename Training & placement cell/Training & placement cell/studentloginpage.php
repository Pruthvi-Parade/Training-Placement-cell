<?php 
include('server.php');
?>
<html>
<head>
<link href="Loginform.css" rel="stylesheet" id="bootstrap-css">
<script src="Loginform.js"></script>
<script src="Loginform1.js"></script>


</head>

<body>
    
<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
            <h3>Welcome</h3>
            <p> To</p>
            <p>Training & Placement Cell!</p>
            <a href="studentregistration.php">
                <input type="submit" value="Register" name="Register" /></a>



        </div>
        <div class="col-md-9 register-right">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Student</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">admin</a>
                </li>
            </ul>
             <form method="post" action="server.php" >
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Login as Student</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                        <label for="exampleInputPassword1">Student PRN No:</label>
                                <input type="text" class="form-control" placeholder="enter PRN No *" name="serp" />
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password:</label>
                                <input type="password" class="form-control" placeholder="Password " name="st_password"   />
                            </div>
                           
                            
                        </div> 
                        <div class="col-md-9">
                            <input type="submit" class="btnRegister" value="Login" name="login_user" />
                        </div>
                        
                       
                        
                    </div>
                </div>
                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3 class="register-heading">Login as Admin</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                        <div class="form-group">
                               <label for="exampleInputPassword1">User name:</label>
                                <input type="text" class="form-control" placeholder="enter user name *" name="user_name" />

                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password:</label>
                                <input type="password" class="form-control" placeholder="Password " name="user_password" />
                            </div>
                           
                            
                        </div>
                        <div class="col-md-9">
                            <input type="submit" class="btnRegister" value="Login" name="login_admin" />
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>

</div>
</body>
</html>