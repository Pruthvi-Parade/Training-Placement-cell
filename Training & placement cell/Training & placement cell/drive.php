<?php
    include "drive1.php";
?>
<html>

<head>
    <link href="form.css" rel="stylesheet" id="bootstrap-css">
    <script src="form.js"></script>
    <script src="form1.js"></script>
    <script src="valid1.js"></script>

</head>

<body>
      <form action="drive1.php" method="POST"> 

    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">

            </div>
      

            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Placement Drive</h4>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="labels"><h6>Drive_id:</h6></label>
                            <input type="text" class="form-control" placeholder="enter drive id" 
                            name="drive_id"
                            onblur="validateEmpty(this,document.getElementById('driveiderror'),' drive id Should not be empty')"  
                                required />
                                <small id="driveiderror" class="form-text "></small> 
                            </div>

                        <div class="col-md-12">
                            <label class="labels"><h6>drive date:</h6></label>
                            <input type="date" class="form-control" 
                            placeholder="enter date of drive" name="ddate"
                            onblur="validateEmpty(this,document.getElementById('drivedateerror'),' Drive date  Should not be empty')"  
                                required />
                                <small id="drivedateerror" class="form-text "></small> 
                            </div>
                        <div class="col-md-12"><label class="labels"><h6>Designation</h6></label>
                            <input type="text" class="form-control" placeholder="enter Designation" 
                            name="positions"
                          onblur="validateEmpty(this,document.getElementById('Positionerror'),' Position Should not be empty')"  
                                required />
                                <small id="Positionerror" class="form-text "></small> 
                            </div>
                        <div class="col-md-12">
                            <label class="labels"><h6>SSC:</h6></label>
                            <input type="text" class="form-control" 
                            placeholder="enter 10th marks" name="tenth"
                          onblur="validateEmpty(this,document.getElementById('markserror'),' 10 th marks Should not be empty')"  
                                required />
                                <small id="markserror" class="form-text "></small> 
                            </div>
                        <div class="col-md-12"><label class="labels"> <h6>HSC:</h6></label>
                            <input type="text" class="form-control" placeholder="enter 12th marks " 
                            name="twelth"
                         onblur="validateEmpty(this,document.getElementById('marks1error'),' 12 th marks Should not be empty')"  
                                required />
                                <small id="marks1error" class="form-text "></small> 
                            </div>
                        <div class="col-md-12"><label class="labels"><h6>Graduation:</h6></label>
                            <input type="text" class="form-control" placeholder="enter graduation percentage" name="grad"
                         onblur="validateEmpty(this,document.getElementById('marks2error'),' graduation marks Should not be empty')"  
                                required />
                                <small id="marks2error" class="form-text "></small> 
                            </div>
                        <div class="col-md-12"><label class="labels"><h6>Post Graduation:</h6></label>
                            <input type="text" class="form-control" placeholder="enter PG percentage" name="pg"
                          onblur="validateEmpty(this,document.getElementById('marks3error'),' PG  marks Should not be empty')"  
                                required />
                                <small id="marks3error" class="form-text "></small> 
                            </div>
                       <!--  <div class="col-md-12"><label class="labels"><h6>Yd:</h6></label>
                            <input type="text" class="form-control" placeholder="enter year down"
                             name="yd"
                             onblur="validateEmpty(this,document.getElementById('yderror'),' this field Should not be empty')"  
                                required />
                                <small id="yderror" class="form-text "></small> 
                            </div> -->
                        <div class="col-md-12"><label class="labels"> <h6>Gap-in-education:</h6></label>
                            <input type="text" class="form-control" placeholder="any gap in Gap in education " name="gapinyear"

                     onblur="validateEmpty(this,document.getElementById('gaperror'),' this field Should not be empty')"  
                                required />
                                <small id="gaperror" class="form-text "></small> 
                            </div>
                        <div class="col-md-12"><label class="labels"><h6>Active backLog:</h6></label>
                            <input type="text" class="form-control" placeholder="enter number of active backlog" name="activeback"
                            onblur="validateEmpty(this,document.getElementById('aberror'),' this field Should not be empty')"  
                                required />
                                <small id="aberror" class="form-text "></small> 
                            </div>
                            <div class="col-md-12"><label class="labels"><h6>Drive Link:</h6></label>
                            <input type="text" class="form-control" placeholder="Link" name="enter drivelink" id="link"
                          onblur="validateEmpty(this,document.getElementById('linkerror'),' link should not be empty')"  
                                required />
                                <small id="linkerror" class="form-text "></small> 
                            </div>
                       



                    </div>
                    <div class="mt-5 text-center">
                        <input type="submit"  class="btn btn-primary" value="submit" name="drive"/>
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
        background: #f0ffff;
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