<?php
    include "companydetails.php";
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

</head>
<body>
<form action="companydetails.php" method="POST">
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <!-- <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"></div> -->
        </div>
       
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3 class="text-center">Company  Details</h3>
                </div>
               
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label class="labels"><h6>Registeration no:</h6></label>
                        <input type="year" 
                        class="form-control"
                         placeholder="Registeration no" 
                         name="cregno" 
                         onblur="validateEmpty(this,document.getElementById('regerror'),'Registeration No Should not be empty')"  
                                required />
                                <small id="regerror" class="form-text "></small> 
                            </div>
                    <div class="col-md-12">
                        <label class="labels"><h6>Company name :</h6></label>
                        <input type="text" 
                        class="form-control"
                         placeholder="Company name" 
                         name="cname"
                        onblur="validateEmpty(this,document.getElementById('cpnameerror'),' Company name Should not be empty')"  
                                required />
                                <small id="cpnameerror" class="form-text "></small> 
                            </div>
                    <div class="col-md-12">
                        <label class="labels"><h6>location:</h6></label>
                        <input type="text" 
                         class="form-control"
                          placeholder="job location"
                           name="clocation"
                          onblur="validateEmpty(this,document.getElementById('clocationerror'),' job Location  Should not be empty')"  
                                required />
                                <small id="clocationerror" class="form-text "></small> 
                            </div>
                    <div class="col-md-12">
                        <label class="labels"><h6>Company HR Name: </h6> </label>
                        <input type="text"
                         class="form-control" 
                         placeholder="Company HR Name"
                          name="c_personname"
                         onblur="validateEmpty(this,document.getElementById('cpersonnameperror'),' company person name  Should not be empty')"  
                                required />
                                <small id="cpersonnameperror" class="form-text "></small> 
                            </div>
                    <div class="col-md-12">
                        <label class="labels"><h6>Company HR number:</h6></label>
                        <input type="text"
                         class="form-control" maxlength="10" minlength="10" 
                         placeholder="Company HR number" 
                         name="c_person_mob"
                         onblur="validateEmpty(this,document.getElementById('hrnumbererror'),' company HR number Should not be empty')"  
                                required />
                                <small id="hrnumbererror" class="form-text "></small> 
                            </div>
                    
                  
                </div>
                
              <div class="mt-5 text-center">
                    <input type="submit" class="btn btn-primary" value="submit" name="Company" onclick="validatedetails()" />
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
    background:#f0ffff;
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


